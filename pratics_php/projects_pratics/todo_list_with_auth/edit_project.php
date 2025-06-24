<?php include_once("header.php"); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body">
                    <h4 class="text-center mb-4">Edit Project Details</h4>
                  <form id="contact-form" action="edit_project" method="post">
    <input type="hidden" name="id" value="<?php echo $edit_data['id'] ?? ''; ?>">

    <div class="mb-3">
        <label for="name" class="form-label">Edit Your Name</label>
        <input type="text" name="name" id="name" class="form-control" 
               placeholder="Enter your name" autocomplete="on" 
               value="<?php echo $edit_data['name'] ?? ''; ?>" required>
    </div>

    <div class="mb-3">
        <label for="project_name" class="form-label">Edit Project Name</label>
        <input type="text" name="project_name" id="project_name" class="form-control" 
               placeholder="Enter task name" 
               value="<?php echo $edit_data['project_name'] ?? ''; ?>" required>
    </div>

    <div class="d-grid">
        <button class="btn btn-primary" type="submit" name="submit">Update Task</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>