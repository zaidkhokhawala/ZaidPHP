<?php include_once('header.php') ?>
<div class="page-heading header-text">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Manage Categories</span>
                <h3>Manage Categories</h3>
            </div>
        </div>
    </div>
</div>

<div class="contact-page section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-4 p-4 bg-white">
                    <div class="card-header text-white bg-gradient rounded-3 p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="m-0">🏡 Category Listings</h4>
                            <a href="add_category" class="btn btn-success rounded-pill px-3">+ Add New Category</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle text-center border-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Edit &nbsp; &nbsp;& &nbsp;&nbsp; Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cat_data as $d) { ?>
                                    <tr>
                                        <td><?php echo $d['cat_id']; ?></td>
                                        <td><?php echo $d['cat_name']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary btn-sm px-3 rounded-pill">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline-danger btn-sm px-3 rounded-pill">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- End Card -->
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php') ?>
