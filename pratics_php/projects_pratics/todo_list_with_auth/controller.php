<?php
session_start();
include_once('model.php');

class controller extends model
{
    function __construct()
    {
        model::__construct();

        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            // ================= AUTH ROUTES =================
            case '/':
                if (isset($_SESSION['user'])) {
                    header("Location: index");
                    exit;
                } else {
                    header("Location: login");
                    exit;
                }
                break;

            case '/register':
                if (isset($_SESSION['user'])) {
                    header("Location: project");
                    exit;
                }

                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                    $exists = $this->selectWhere('users', ['email' => $email]);
                    if ($exists) {
                        echo "<script>alert('Email already registered');</script>";
                    } else {
                        $this->insert('users', [
                            'name' => $name,
                            'email' => $email,
                            'password' => $password
                        ]);
                        echo "<script>alert('Registered successfully'); window.location.href='login';</script>";
                        exit;
                    }
                }
                include('register.php');
                break;

            case '/login':
                if (isset($_SESSION['user'])) {
                    header("Location: index");
                    exit;
                }

                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $user = $this->selectWhere('users', ['email' => $email]);
                    if (!empty($user) && password_verify($password, $user[0]['password'])) {
                        $_SESSION['user'] = $user[0];
                        echo "<script>alert('Login successful'); window.location.href='index';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Invalid email or password');</script>";
                    }
                }
                include('login.php');
                break;

            case '/logout':
                session_destroy();
                echo "<script>window.location.href='login';</script>";
                break;

            // ================= PROTECTED ROUTES (Login Required) =================
            case '/index':
                $this->checkLogin();
                $con_data = $this->selectWhere('project', ['user_id' => $_SESSION['user']['id']]);
                include('index.php');
                break;

            case '/project':
                $this->checkLogin();
                $con_data = $this->selectWhere('project', ['user_id' => $_SESSION['user']['id']]);
                include('project_table.php'); // make sure this file exists
                break;

            

            case '/project_add':
                $this->checkLogin();

                if (isset($_POST['submit'])) {
                    echo "Form Submitted<br>";

                    $name = $_POST['name'] ?? '';
                    $project_name = $_POST['project_name'] ?? '';

                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";

                    $c_array = [
                        "name" => $name,
                        "project_name" => $project_name,
                        "user_id" => $_SESSION['user']['id']
                    ];

                    $result = $this->insert('project', $c_array);

                    if ($result) {
                        echo "<script>alert('Project Submitted Successfully'); window.location.href = 'project';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Project not inserted. Check DB or code');</script>";
                    }
                }

                include('project_add.php');
                break;


            case '/project_delete':
                $this->checkLogin();
                if (isset($_GET['id'])) {
                    $this->delete('project', 'id', $_GET['id']);
                    header("Location: project");
                    exit;
                }
                break;

            // ================= TASK ROUTES =================
            case '/task':
                $this->checkLogin();
                if (isset($_GET['project_id'])) {
                    $project_id = $_GET['project_id'];
                    $project_data = $this->selectWhere('project', ['id' => $project_id]);
                    $project_name = $project_data[0]['project_name'] ?? '';
                    $task_data = $this->selectWhere('task', ['project_id' => $project_id]);
                    include('task_table.php');
                } else {
                    echo "<h3>Project ID not found.</h3>";
                }
                break;

            case '/task_add':
                $this->checkLogin();
                if (isset($_POST['submit'])) {
                    $task_detail = $_POST['task_detail'];
                    $project_id = $_POST['project_id'];
                    $this->insert('task', ['task_detail' => $task_detail, 'project_id' => $project_id]);

                    echo "<script>alert('Task Added'); window.location.href='task?project_id=$project_id';</script>";
                    exit;
                }
                include('task_add.php');
                break;

            case '/task_edit':
                $this->checkLogin();

                if (isset($_POST['submit'])) {
                    $id = intval($_POST['id']);
                    $task_detail = $_POST['task_detail'];
                    $project_id = $_POST['project_id'];

                    $this->update('task', ['task_detail' => $task_detail], ['id' => $id]);

                    echo "<script>alert('Task Updated Successfully'); window.location.href = 'task?project_id=$project_id';</script>";
                    exit;
                }

                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);
                    $edit_data = $this->selectWhere('task', ['id' => $id]);
                    $edit_data = !empty($edit_data) ? $edit_data[0] : [];
                    $project_id = $edit_data['project_id'];
                }

                include('task_edit.php');
                break;

            case '/task_delete':
                $this->checkLogin();
                if (isset($_GET['id']) && isset($_GET['project_id'])) {
                    $this->delete('task', 'id', $_GET['id']);
                    $project_id = $_GET['project_id'];
                    echo "<script>alert('Task Deleted'); window.location.href='task?project_id=$project_id';</script>";
                    exit;
                }
                break;

            // ================= DEFAULT HANDLER =================
            default:
                if (!isset($_SESSION['user'])) {
                    include('login.php');
                } else {
                    header("Location: project");
                    exit;
                }
                break;
        }
    }
}

new controller();
