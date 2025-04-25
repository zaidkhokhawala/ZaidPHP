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
                            <a href="add_product.php" class="btn btn-success rounded-pill px-3">+ Add New Property</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle text-center border-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Home No</th>
                                    <th>Area</th>
                                    <th>City</th>
                                    <th>Pincode</th>
                                    <th>Bedrooms</th>
                                    <th>Bathrooms</th>
                                    <th>Floor</th>
                                    <th>Parking</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <?php foreach ($product_data as $P_data) { ?>
                                    <tr>
                                        <td><?php echo $P_data['id']; ?></td>
                                        <td><img src="uploads/<?php echo $P_data['image']; ?>" class="property-img" width="50"></td>
                                        <td><?php echo $P_data['category_name']; ?></td>
                                        <td>$ <?php echo $P_data['price']; ?></td>
                                        <td><?php echo $P_data['home_number']; ?></td>
                                        <td><?php echo $P_data['area']; ?> sqft</td>
                                        <td><?php echo $P_data['city']; ?></td>
                                        <td><?php echo $P_data['pincode']; ?></td>
                                        <td><?php echo $P_data['bedrooms']; ?></td>
                                        <td><?php echo $P_data['bathrooms']; ?></td>
                                        <td><?php echo $P_data['floor']; ?></td>
                                        <td><?php echo $P_data['parking']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary btn-sm px-3 rounded-pill">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
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


<!-- Custom Styling -->
<style>
   

   
</style>



<?php include_once('footer.php') ?>
