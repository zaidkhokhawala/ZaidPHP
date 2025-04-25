<?php include_once('header.php') ?>
<div class="page-heading header-text">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Manage Contacts</span>
                <h3>Manage Contacts</h3>
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
                        <h4 class="m-0">📩 Contact Submissions</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle text-center border-0">
                            <thead class="table-dark">
                              
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>  
                            <?php foreach ($con_data as $data) {
                                    
                                 ?>
                                    <tr>
                                    <td><?php echo $data['id'];  ?></td>
                                    <td><?php echo $data['name'];  ?></td>
                                    <td><?php echo $data['email'];  ?></td>
                                    <td><?php echo $data['message'];  ?></td>

                                        <td>
                                            <a href=""
                                               class="btn btn-outline-danger btn-sm px-3 rounded-pill">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                               <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- End Card -->
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php') ?>
