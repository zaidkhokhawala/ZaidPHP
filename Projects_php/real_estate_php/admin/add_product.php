<?php include_once('header.php') ?>
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Add Product</span>
                <h3>Add Product</h3>
            </div>
        </div>
    </div>
</div>

<div class="contact-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card p-4 shadow">
                    <h4 class="text-center mb-4">Add New Property</h4>
                    <form id="add-property-form" action="" method="post" enctype="multipart/form-data">
                        <!-- Property Category -->
                        <div class="mb-3">
                            <label class="form-label">Property Category</label>
                            <select name="category" id="category_name" class="form-select" required>
                                <option value="" selected>Select Category</option>
                                <?php foreach ($cat_arr as $s): ?>
                                    <option value="<?php echo $s['cat_name']; ?>"><?php echo $s['cat_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <!-- Property Image Upload -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Property Image</label>
                            <input type="file" name="property_img" id="image" class="form-control" required>
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Enter Price..." required>
                        </div>

                        <!-- Home Number -->
                        <div class="mb-3">
                            <label for="home_number" class="form-label">Home Number</label>
                            <input type="text" name="home_number" id="home_number" class="form-control" placeholder="Enter Home Number..." required>
                        </div>

                        <!-- Area -->
                        <div class="mb-3">
                            <label for="area" class="form-label">Area</label>
                            <input type="text" name="area" id="area" class="form-control" placeholder="Enter Area..." required>
                        </div>

                        <!-- City -->
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter City..." required>
                        </div>

                        <!-- Pincode -->
                        <div class="mb-3">
                            <label for="pincode" class="form-label">Pincode</label>
                            <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode..." required>
                        </div>

                        <!-- Country -->
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country..." required>
                        </div>

                        <!-- Bedrooms and Bathrooms -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="bedrooms" class="form-label">Bedrooms</label>
                                <input type="number" name="bedrooms" id="bedrooms" class="form-control" placeholder="Enter Bedrooms..." required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="bathrooms" class="form-label">Bathrooms</label>
                                <input type="number" name="bathrooms" id="bathrooms" class="form-control" placeholder="Enter Bathrooms..." required>
                            </div>
                        </div>

                        <!-- Area in m² and Floor -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="area_m2" class="form-label">Area (m²)</label>
                                <input type="number" name="property_area" id="area_m2" class="form-control" placeholder="Enter Area in m²..." required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="floor" class="form-label">Floor</label>
                                <input type="number" name="floor" id="floor" class="form-control" placeholder="Enter Floor..." required>
                            </div>
                        </div>

                        <!-- Parking -->
                        <div class="mb-3">
                            <label for="parking" class="form-label">Parking</label>
                            <select name="parking" id="parking" class="form-select" required>
                                <option value="" disabled selected>Parking Available?</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button style="color: white; background-color: #f35525;" name="submit" type="submit" id="form-submit" class="btn">Add Property</button>
                        </div>

                    </form>



                </div>
            </div>  
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>