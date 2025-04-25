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
                        <form id="add-product-form" action="" method="post" enctype="multipart/form-data">

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="property_images" class="form-label">Upload Property Images</label>
                                <input type="file" name="property_images[]" id="property_images" class="form-control" accept="image/*" multiple required>
                            </div>

                            <!-- Image Preview -->
                            <div id="image-preview" class="mb-3"></div>

                            <!-- Property Category & Price -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Property Category</label>
                                        <select name="category" id="category" class="form-select" required>
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="villa">Villa House</option>
                                            <option value="penthouse">Penthouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Enter Price..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Home Number & Area -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="home_number" class="form-label">Home Number</label>
                                        <input type="text" name="home_number" id="home_number" class="form-control" placeholder="Enter Home Number..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="area" class="form-label">Area</label>
                                        <input type="text" name="area" id="area" class="form-control" placeholder="Enter Area..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- City & Pincode -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter City..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Country & Bedrooms -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bedrooms" class="form-label">Bedrooms</label>
                                        <input type="number" name="bedrooms" id="bedrooms" class="form-control" placeholder="Enter Bedrooms Count..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Bathrooms & Area (m²) -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="bathrooms" class="form-label">Bathrooms</label>
                                        <input type="number" name="bathrooms" id="bathrooms" class="form-control" placeholder="Enter Bathrooms Count..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="property_area" class="form-label">Area (m²)</label>
                                        <input type="number" name="property_area" id="property_area" class="form-control" placeholder="Enter Area in m²..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Floor & Parking -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="floor" class="form-label">Floor</label>
                                        <input type="number" name="floor" id="floor" class="form-control" placeholder="Enter Floor Number..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="parking" class="form-label">Parking</label>
                                        <input type="number" name="parking" id="parking" class="form-control" placeholder="Enter Parking Spots..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button style="color: white; background-color: #f35525;" type="submit" id="form-submit" class="btn">Add Property</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php') ?>