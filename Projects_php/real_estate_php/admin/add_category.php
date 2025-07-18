<?php include_once('header.php') ?>
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Add Category</span>
                <h3>Add Category</h3>
            </div>
        </div>
    </div>
</div>

<div class="contact-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card p-4 shadow">
                    <h4 class="text-center mb-4">Add New Category</h4>
                    <form id="add-category-form" action="" method="post" enctype="multipart/form-data">

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" name="cat_name" id="category_name" class="form-control" placeholder="Enter Category Name..." required>
                        </div>

                        <!-- Category Image -->
              

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button name="submit" style="color: white; background-color: #f35525;" type="submit" id="form-submit" class="btn">Add Category</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>
