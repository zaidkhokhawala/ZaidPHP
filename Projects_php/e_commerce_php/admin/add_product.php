<?php include_once('header.php') ?>

<div class="container-fluid  img1">
    <form class="product-form p-4 shadow-lg bg-white rounded">
        <h2 class="text-center text-danger">Add Product</h2>

        <div class="mb-3 input-group d-flex justify-content-between">
    <label class="form-label">Select Category :</label>
    <select class="form-select" aria-label="Default select example" 
        style="color: black; background-color: white;">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
</div>



        <div class="mb-3">
            <label class="form-label">Product Name :</label>
            <input type="text" name="product_name" class="form-control" required placeholder="Enter Product Name">
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Ask Price :</label>
                <input type="number" name="ask_price" class="form-control" required placeholder="Enter Ask Price">
            </div>
            <div class="col-md-6">
                <label class="form-label">Sale Price :</label>
                <input type="number" name="sale_price" class="form-control" required placeholder="Enter Sale Price">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Product Photo :</label>
            <input type="file" name="product_photo" class="form-control" required>
        </div>

        <button type="submit" class="btn w-100 text-white" style="background-color: #e73918;">
            Add Product
        </button>
    </form>
</div>

<?php include_once('footer.php') ?>
