<?php include_once("header.php"); ?>



<!-- Task Table -->
<div class="container mt-5">

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Project Name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($con_data as $row) { ?>
                <tr>
                    <td><?php echo $row['id'];  ?></td>
                    <td><?php echo  $row['name']; ?></td>
                    <td><?php echo $row['project_name']; ?></td>
                    <td><a href="delete?id=<?php echo $row['id']; ?>" class="btn btn-danger ">Delete</a>
                        
                    <a href="edit_project?id=<?php echo $row['id']; ?>" class="btn btn-primary ">Edit</a>
                    <a href="task_table?project_id=<?= $row['id'] ?>"class="btn btn-success " >View Tasks</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>







</div>

<?php include_once("footer.php"); ?>