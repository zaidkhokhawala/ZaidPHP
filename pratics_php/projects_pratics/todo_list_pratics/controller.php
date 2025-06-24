
<?php
require_once('model.php');
class controller extends model
{

    function __construct()
    {

        parent::__construct();
        $path = $_SERVER['PATH_INFO'];
        switch ($path) {
            case '/':
            case '/index':

                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $project_name = $_POST['project_name'];
                    $adddata_array = ["name" => $name, "project_name" => $project_name];
                    $send = $this->adddata('projects', $adddata_array);
                    if ($send) {
                        echo  "<script>alert('project add success'); window.location.href='table';</script>";
                        exit;
                    }
                }
                require_once('index.php');
                break;


            case '/table':
                $all_data = $this->alldata('projects');
                require_once('table.php');
                break;

            case '/delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $send_delete = $this->delete('projects', 'id', $id);

                    if ($send_delete) {
                        echo  "<script>alert('project add success'); window.location.href='table';</script>";
                        exit;
                    }
                    else{
                         echo  "<script>alert('project not delete'); window.location.href='table';</script>";
                        exit;
                    }
                }

                break;

            default:
                echo "404 page not found ";
                break;
        }
    }
}
new controller();

?>