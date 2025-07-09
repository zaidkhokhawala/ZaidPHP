<?php include_once('header.php') ?>

<div class="page-heading header-text">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Manage Visits</span>
                <h3>Manage All Visits</h3>
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
                        <h4 class="m-0">📅 All Scheduled Visits</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle text-center border-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Username</th>
                                    <th>Visitor Name</th>
                                    <th>Category</th>
                                    <th>Property ID</th>
                                    <th>Visitor Number</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                 
                                </tr>
                            </thead>
                            <tbody>  
                                <?php foreach ($visit_data as $visit) { ?>
                                    <tr>
                                        <td><?= $visit['id']; ?></td>
                                        <td><?= $visit['user_id']; ?></td>
                                        <td><?= $visit['username']; ?></td>
                                        <td><?= $visit['visitor_name']; ?></td>
                                        <td><?= $visit['category_name']; ?></td>
                                        <td><?= $visit['property_id']; ?></td>
                                        <td><?= $visit['visitor_number']; ?></td>
                                        <td><?= date('d-m-Y', strtotime($visit['visit_date'])); ?></td>
                                        <td><?= date('h:i A', strtotime($visit['visit_time'])); ?></td>
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
