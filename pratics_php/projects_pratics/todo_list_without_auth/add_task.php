<?php include_once("header.php"); ?>

<div class="container mt-5">
    <h3>Add Task</h3>
    <form method="POST">
        <input type="hidden" name="project_id" value="<?= $_GET['project_id'] ?>">

        <div class="mb-3">
            <label for="task_detail" class="form-label">Task Name</label>
            <input type="text" class="form-control" name="task_detail" required>
        </div>

        <button type="submit" name="submit" class="btn btn-success">Add Task</button>
    </form>
</div>

<?php include_once("footer.php"); ?>
