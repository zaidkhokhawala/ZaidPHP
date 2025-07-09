

<?php include_once('header.php') ?>
<?php	
if(isset($_SESSION['users']))
{
}
else
{
	echo "<script>
		alert('Login First !');
		window.location='index';
	</script>";
}	
?>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb"><a href="#">Home</a> / Schedule a Visit</span>
        <h3>Schedule a Visit</h3>
      </div>
    </div>
  </div>
</div>

<div class="contact-page section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card p-4 shadow rounded-4">
          <h4 class="text-center mb-4">Book Your Property Visit</h4>

     <form action="" method="post">
  <div class="row">
    <!-- Visitor Name -->
    <div class="col-md-6 mb-3">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" required>
    </div>

    <!-- Mobile Number -->
    <div class="col-md-6 mb-3">
      <label for="number" class="form-label">Mobile Number</label>
      <input type="text" name="number" id="number" class="form-control" placeholder="e.g. 9876543210" required>
    </div>
  </div>

  <div class="row">
    <!-- Visit Date -->
    <div class="col-md-6 mb-3">
      <label for="visit_date" class="form-label">Preferred Date</label>
      <input type="date" name="visit_date" id="visit_date" class="form-control" required>
    </div>

    <!-- Visit Time -->
    <div class="col-md-6 mb-3">
      <label for="visit_time" class="form-label">Preferred Time</label>
      <input type="time" name="visit_time" id="visit_time" class="form-control" required>
    </div>
  </div>

  <div class="row">
    <!-- Property ID (readonly) -->
    <div class="col-md-6 mb-3">
      <label for="property_id" class="form-label">Property ID</label>
      <input type="number" name="property_id" id="property_id" class="form-control"
             value="<?= isset($property_id) ? $property_id : ''; ?>" readonly required>
    </div>

    <!-- Category Name (readonly) -->
    <div class="col-md-6 mb-3">
      <label for="category_name" class="form-label">Category</label>
      <input type="text" name="category_name" id="category_name" class="form-control"
             value="<?= isset($category_name) ? $category_name : ''; ?>" readonly required>
    </div>

    

  <!-- Submit Button -->
  <div class="text-center">
    <button name="submit" type="submit" class="btn text-white px-4 py-2" style="background-color: #f35525;">
      Book Visit
    </button>
  </div>
</form>


        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('footer.php') ?>

