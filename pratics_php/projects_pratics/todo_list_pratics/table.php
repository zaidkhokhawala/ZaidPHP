<?php include_once("header.php"); ?>

<!-- Task Table -->
<div class="container mt-5">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Task</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Project_data as $d) { ?>
            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['Name']; ?></td>
                <td><?php echo $d['project_name']; ?></td>
                <td><a href="delete?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
                 <?php  } ?>
    
        </tbody>
    </table>
</div>
<?php include_once("footer.php"); ?>