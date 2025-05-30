<?php
include_once('model.php');

class ad_control extends model
{

    function __construct()
    {
        parent::__construct();


        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/':

                break;


            case '/index':
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'] ?? '';
                    $project_name = $_POST['project_name'];

                    $c_array = ["name" => $name, "project_name" => $project_name];
                    $result = $this->insert('project', $c_array);

                    if ($result) {
                        echo "<script>
        alert('Inquiry Submitted Successfully');
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
                if (isset($_GET['id'])) {

                    $id = intval($_GET['id']);
                    $this->delete('project', 'id', $id);



                    header("Location: table");
                    exit;
                }
                break;




            case '/edit':
                if (isset($_POST['submit'])) {
                    $id = intval($_POST['id']);  // sanitize id
                    $data = [
                        'name' => $_POST['name'],
                        'project_name' => $_POST['project_name']
                    ];

                    $result = $this->update('project', $data, ['id' => $id]);

                    if ($result) {
                        echo "<script>alert('Record updated successfully');</script>";
                        header("Location: table");
                        exit;
                    }
                }

                $edit_data = [];
                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);  // sanitize id
                    $rows = $this->select('project', ['id' => $id]);
                    if (!empty($rows)) {
                        $edit_data = $rows[0];  // first record
                    }
                }

                header("Location: table");
                exit;
                break;


              case '/edit_project':
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

                // Agar id URL me hai to data fetch karo
                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);
                    $edit_data = $this->selectWhere('project', ['id' => $id]);
                    $edit_data = !empty($edit_data) ? $edit_data[0] : [];
                } else {
                    $edit_data = [];
                }

                include('edit_project.php');
                break;

            default:
                include('index.php');
                break;





        }
    }
}


new ad_control();
