<?php include_once('header.php') ?>
<div class="page-heading header-text">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Manage Products</span>
                <h3>Manage Products</h3>
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
                            <h4 class="m-0">🏡 Property Listings</h4>
                            <a href="add_product" class="btn btn-success rounded-pill px-3">+ Add New Property</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle text-center border-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>No.</th>

                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Property ID</th>
                                    <th>Price</th>
                                    <th>Area</th>
                                    <th>BHK</th>
                                    <th>Floor</th>
                                    <th>Parking</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1; // 🟢 Serial number counter
                                foreach ($product_data as $P_data) {
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td> <!-- Serial No. -->


                                        <td><?= $P_data['category_name']; ?></td>

                                        <td>
                                            <img src="../uploads/properties/<?= $P_data['image']; ?>" width="60" height="60" style="object-fit: cover; border-radius: 5px;">
                                        </td>

                                        <td><?= $P_data['id']; ?></td>
                                        <td>$ <?= number_format($P_data['price']); ?></td>
                                        <td><?= $P_data['area']; ?> m²</td>
                                        <td><?= $P_data['bhk']; ?> BHK</td>
                                        <td><?= $P_data['floor']; ?></td>
                                        <td><?= $P_data['parking']; ?></td>

                                        <td>
                                            <a href="edit_product?id=<?= $P_data['id']; ?>" class="btn btn-outline-primary btn-sm px-3 rounded-pill">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="delete_product?id=<?= $P_data['id']; ?>" class="btn btn-outline-danger btn-sm px-3 rounded-pill"
                                                onclick="return confirm('Are you sure you want to delete this property?');">
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