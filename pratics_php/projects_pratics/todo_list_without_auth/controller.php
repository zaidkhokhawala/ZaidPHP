<?php
include_once('model.php');

class controller extends model
{
    function __construct()
    {
        model::__construct();
        $path = $_SERVER['PATH_INFO'];
        switch ($path) {
            case '/':
            case '/index':
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'] ?? '';
                    $project_name = $_POST['project_name'];
                    $c_array = ["name" => $name, "project_name" => $project_name];
                    $result = $this->insert('project', $c_array);

                    if ($result) {
                        echo "<script>
        alert('project Submitted Successfully');
        window.location.href = 'table';
    </script>";
                        exit;
                    }
                }

                include('index.php');
                break;


            case '/table':
                $con_data = $this->select('project');
                include('table.php');
                break;


            case '/delete':
                if (isset($_GET['id'])) $this->delete('project', 'id', $_GET['id'])
                    && header("Location: table") && exit;
                break;

            case '/edit_project':
                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);
                    $edit_data = $this->selectWhere('project', ['id' => $id]);
                    $edit_data = !empty($edit_data) ? $edit_data[0] : [];
                } else {
                    $edit_data = [];
                }

                // Agar form submit hua to update karo
                if (isset($_POST['submit'])) {
                    $id = intval($_POST['id']);
                    $data = [
                        'name' => $_POST['name'],
                        'project_name' => $_POST['project_name']
                    ];
                    $this->update('project', $data, ['id' => $id]);
                    echo "<script>
                            alert('Project Updated Successfully');
                            window.location.href = 'table';
                          </script>";
                    exit;
                }


                include('edit_project.php');
                break;

            case '/task_table':
                if (isset($_GET['project_id'])) {
                    $project_id = $_GET['project_id'];

                    // Project name laane ke liye
                    $project_data = $this->selectWhere('project', ['id' => $project_id]);
                    $project_name = $project_data[0]['project_name'] ?? '';

                    // Task list laane ke liye
                    $task_data = $this->selectWhere('task', ['project_id' => $project_id]);

                    include('Task_table.php');
                } else {
                    echo "Project ID not found.";
                }
                break;

            case '/add_task':
                if (isset($_POST['submit'])) {
                    $task_detail = $_POST['task_detail'];
                    $project_id = $_POST['project_id'];
                    $this->insert('task', ['Task_detail' => $task_detail, 'project_id' => $project_id]);

                    echo "<script>
                alert('Task Added');
                window.location.href='task_table?project_id=$project_id';
              </script>";
                    exit;
                }
                include('add_task.php');
                break;

            case '/edit_task':
                // If form is submitted
                if (isset($_POST['submit'])) {
                    $id = intval($_POST['id']);
                    $task_detail = $_POST['task_detail'];
                    $project_id = $_POST['project_id'];

                    $this->update('task', ['task_detail' => $task_detail], ['id' => $id]);

                    echo "<script>
                alert('Task Updated Successfully');
                window.location.href = 'task_table?project_id=$project_id';
              </script>";
                    exit;
                }

                // Fetch existing task data
                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);
                    $edit_data = $this->selectWhere('task', ['id' => $id]);
                    $edit_data = !empty($edit_data) ? $edit_data[0] : [];
                    // Required for redirecting back to same project
                    $project_id = $edit_data['project_id'];
                }

                include('edit_task.php');
                break;

            default:
                include('index.php');
                break;
        }
    }
}

new controller();
