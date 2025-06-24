<?php include_once("header.php"); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body">
                    <h4 class="text-center mb-4">Edit Task</h4>

                    <form action="edit_task" method="post">
                        <input type="hidden" name="id" value="<?= $edit_data['id'] ?? '' ?>">
                        <input type="hidden" name="project_id" value="<?= $edit_data['project_id'] ?? '' ?>">

                        <div class="mb-3">
                            <label for="task_detail" class="form-label">Task Detail</label>
                            <input type="text" name="task_detail" class="form-control"
                                   value="<?= $edit_data['task_detail'] ?? '' ?>" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-primary">Update Task</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>
