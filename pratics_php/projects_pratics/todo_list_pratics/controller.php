
<?php
require_once('model.php');
class controller extends model
{

    function __construct()
    {
        model::__construct();
        $path = $_SERVER['PATH_INFO'];
        switch ($path) {
            case '/':
            case '/index':

                if(isset($_POST['submit'])){
                    $add_array=["Name"=>$_POST['name'],"project_name"=>$_POST['project_name']] ;
                     $this->adddata('projects',$add_array)&& exit("<script>alert('project added sucessfully');location.href='table';</script>");
                }

                require_once('index.php');
                break;

            case '/table':
                $Project_data = $this->alldata('projects');
                require_once('table.php');
                break;

            case '/delete':
                if (isset($_GET['id'])){
                 $this->delete('projects', 'id', $_GET['id']);
                header("Location:table");
                exit;}

                break;

          

            default:
                echo "404 page not found";
                break;
        }
    }
}
new controller;
