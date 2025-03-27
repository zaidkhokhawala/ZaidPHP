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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>  <?php foreach ($product_data as $P_data) { ?>
        <tr>
            <td><?php echo $P_data['id']; ?></td>
            <td><img src="uploads/<?php echo $P_data['image']; ?>" class="property-img"></td> <!-- ✅ Database se image le raha hai -->
            <td><?php echo $P_data['category_name']; ?></td> <!-- ✅ Category name fetch ho raha hai -->
          <td>$ <?php echo $P_data['price']; ?></td> <!-- ✅ Price formatted -->
            <td><?php echo $P_data['home_number']; ?></td>
            <td><?php echo $P_data['area']; ?> sqft</td>
            <td><?php echo $P_data['city']; ?></td>
            <td><?php echo $P_data['pincode']; ?></td>
            <td><?php echo $P_data['country']; ?></td>
            <td><?php echo $P_data['bedrooms']; ?></td>
            <td><?php echo $P_data['bathrooms']; ?></td>
            <td><?php echo $P_data['floor']; ?></td>
            <td><?php echo $P_data['parking']; ?></td>
            <td>
                <a href="#" class="btn btn-warning btn-sm action-btn" data-bs-toggle="tooltip" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm action-btn" data-bs-toggle="tooltip" title="Delete">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
                                <tr>
                                    <td>2</td>
                                    <td><img src="uploads/property2.jpg" class="property-img"></td>
                                    <td>Villa</td>
                                    <td>$250,000</td>
                                    <td>V-202</td>
                                    <td>2500 sqft</td>
                                    <td>Los Angeles</td>
                                    <td>90001</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm action-btn" data-bs-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm action-btn" data-bs-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="uploads/property3.jpg" class="property-img"></td>
                                    <td>Penthouse</td>
                                    <td>$500,000</td>
                                    <td>P-303</td>
                                    <td>3500 sqft</td>
                                    <td>Miami</td>
                                    <td>33101</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td>10</td>
                                    <td>3</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm action-btn" data-bs-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm action-btn" data-bs-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
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
