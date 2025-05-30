﻿<?php

include_once('header.php');

?>


<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Contact</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Contact
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
										<th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
									foreach($contact_arr as $d)
									{
									?>
										<tr class="odd gradeX">
											<td><?php echo $d->id?></td>
											<td><?php echo $d->name?></td>
											<td><?php echo $d->email?></td>
											<td><?php echo $d->comment?></td>
											<td class="center">
												<a href="" class="btn btn-primary">Edit</a>
												<a href="delete?del_contact=<?php echo $d->id?>" class="btn btn-danger">Delete</a>
											</td>
										</tr>
									<?php
									}
									?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

    </div>
</div>
<?php
include_once('footer.php');
?>