<?php include_once('header.php') ?>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
        <h3>Properties</h3>
      </div>
    </div>
  </div>
</div>

<div class="section properties">
  <div class="container">
    <ul class="properties-filter">
      <li>
        <a class="is_active" href="#!" data-filter="*">Show All</a>
      </li>
      <li>
        <a href="#!" data-filter=".Apartment">Apartment</a>
      </li>
      <li>
        <a href="#!" data-filter=".Villa">Villa House</a>
      </li>
      <li>
        <a href="#!" data-filter=".Penthouse">Penthouse</a>
      </li>
    </ul>
    <div class="row properties-box">





      <?php foreach ($property_data as $property) { ?>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items <?= htmlspecialchars($property['category_name']); ?>">
          <div class="item">
            <a href="property-details?id=<?= $property['id']; ?>"><img src="../uploads/properties/<?= $property['image']; ?>" alt=""> </a>

            <span class="category"><?= htmlspecialchars($property['category_name']); ?></span>
            <h6>$<?= number_format($property['price']); ?></h6>
            <h4>
              <a href="property-details?id=<?= $property['id']; ?>">
                <?= htmlspecialchars($property['location'] ?? 'Not specified'); ?>
              </a>
            </h4>

            <!-- 🔄 Property Details Grid (No List) -->
            <div class="row px-2 text-dark small fw-medium mb-3">
              <div class="col-6 mb-2">BHK: <span class="text-muted"><?= $property['bhk']; ?></span></div>
              <div class="col-6 mb-2">Floor: <span class="text-muted"><?= $property['floor']; ?></span></div>
              <div class="col-6 mb-2">Area: <span class="text-muted"><?= $property['area']; ?> m²</span></div>
              <div class="col-6 mb-2">Parking: <span class="text-muted"><?= $property['parking']; ?> spots</span></div>
            </div>

            <div class="main-button">
              <a href="schedule_visit?pid=<?= $property['id']; ?>">Schedule a Visit</a>
            </div>

          </div>
        </div>
      <?php } ?>











    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a class="is_active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">>></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include_once('footer.php') ?>