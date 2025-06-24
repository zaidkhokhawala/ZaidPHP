<?php include_once("header.php"); ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h4 class="">Tasks for Project: <?= $project_name ?></h4>
        <a href="add_task?project_id=<?= $_GET['project_id'] ?>" class="btn btn-primary">+ Add Task</a>
    </div>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Task Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($task_data as $row) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['task_detail'] ?></td>
                    <td>
                        <a href="edit_task?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="delete_task?id=<?= $row['id'] ?>&project_id=<?= $_GET['project_id'] ?>" class="btn btn-danger" onclick="return confirm('Delete this task?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<?php include_once("footer.php"); ?>