<?php include_once('header.php') ?>
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Add property</span>
                <h3>Add property</h3>
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

    <div class="row">
        <!-- Category -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Property Category</label>
            <select name="category" id="category_name" class="form-select" required>
                <option value="" selected>Select Category</option>
                <?php foreach ($cat_arr as $s): ?>
                    <option value="<?php echo $s['cat_name']; ?>"><?php echo $s['cat_name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Property Image -->
        <div class="col-md-6 mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" name="property_img" id="image" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <!-- Price -->
        <div class="col-md-6 mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="e.g. 2,500,000" required>
        </div>

        <!-- Area (Location) -->
        <div class="col-md-6 mb-3">
            <label for="area" class="form-label">Area (Location)</label>
            <input type="text" name="area" id="area" class="form-control" placeholder="e.g. 18 Old Street, Miami, FL 33101" required>
        </div>
    </div>

    <div class="row">
        <!-- BHK -->
        <div class="col-md-6 mb-3">
            <label for="bhk" class="form-label">BHK</label>
            <input type="number" name="bhk" id="bhk" class="form-control" placeholder="e.g. 2 (1 Bedroom + 1 Hall)" required>
        </div>

        <!-- Area in m² -->
        <div class="col-md-6 mb-3">
            <label for="property_area" class="form-label">Area (m²)</label>
            <input type="number" name="area" id="property_area" class="form-control" placeholder="e.g. 120" required>
        </div>
    </div>

    <div class="row">
        <!-- Floor -->
        <div class="col-md-6 mb-4">
            <label for="floor" class="form-label">Floor</label>
            <input type="number" name="floor" id="floor" class="form-control" placeholder="e.g. 3" required>
        </div>

        <!-- Parking -->
        <div class="col-md-6 mb-4">
            <label for="parking" class="form-label">Parking </label>
            <input type="text" name="parking" id="parking" class="form-control" placeholder="e.g. 2 Cars / 1 Covered Spot">
        </div>
    </div>

    <!-- Submit -->
    <div class="text-center">
        <button name="submit" type="submit" id="form-submit" class="btn px-4 py-2 text-white" style="background-color: #f35525;">Add Property</button>
    </div>

</form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>
