<?php include_once('header.php') ?>

<div class="page-heading header-text">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Manage Users</span>
                <h3>Manage Users</h3>
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
                        <h4 class="m-0">👤 Registered Users</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle text-center border-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>  
                                <?php foreach ($user_data as $user) { ?>
                                    <tr>
                                        <td><?php echo $user['id']; ?></td>
                                        <td><?php echo $user['username']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                       
                                            
                                        
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
