<?php include_once('header.php') ?>
<?php
if (isset($_SESSION['users'])) {
} else {
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
        <span class="breadcrumb"><a href="#">Home</a> / My Visit Bookings</span>
        <h3>My Scheduled Visits</h3>
      </div>
    </div>
  </div>
</div>

<div class="section contact-page">
  <div class="container">
    <div class="row">
      <?php
      if (!empty($visit_data)) {
        foreach ($visit_data as $visit) {
      ?>
          <div class="col-lg-6 mb-4">
            <div class="card shadow-sm border-0 rounded-4">
              <div class="row g-5">
                <div class="col-md-5">
                  <img src="../uploads/properties/<?= $visit['property_image'] ?>" class="img-fluid rounded-start-4 h-100" alt="Property Image" style="object-fit: cover;">
                </div>

                <div class="col-md-7 d-flex align-items-center">
                  <div class="card-body px-4 py-4">
                    <h5 class="card-title mb-2">Property ID: <?= $visit['property_id'] ?></h5>
                    <p class="mb-1"><strong>Category:</strong> <?= $visit['category_name'] ?></p>
                    <p class="mb-1"><strong>Visitor Name:</strong> <?= $visit['visitor_name'] ?></p>
                    <p class="mb-1"><strong>Visitor Number:</strong> <?= $visit['visitor_number'] ?></p>
                    <p class="mb-1"><strong>Date:</strong> <?= date('d-m-Y', strtotime($visit['visit_date'])) ?></p>
                    <p class="mb-3"><strong>Time:</strong> <?= date('h:i A', strtotime($visit['visit_time'])) ?></p>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2">
                      <a href="delete_visit?id=<?= $visit['id'] ?>" class="btn btn-outline-danger btn-sm px-2" onclick="return confirm('Are you sure you want to delete this visit?');">Delete</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "<div class='text-center'><h5>No visits booked yet.</h5></div>";
      }
      ?>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>