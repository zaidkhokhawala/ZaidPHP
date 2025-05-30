<?php

include_once('header.php');

?>


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Product</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Product</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For Sweets & Namkin Lovers</h1>
            </div>
        </div>
        <div class="row">
            
			<?php
			foreach($cat_arr as $d)
			{
			?>
			
			<div class="col-lg col-md mb-4 pb-2">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                    <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                        <h4 class="font-weight-bold text-white mb-0">$</h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                        <img class="rounded-circle w-100 h-100" src="upload/categories/<?php echo $d->image?>" style="object-fit: cover;">
                    </div>
                    <h5 class="font-weight-bold mb-4"><?php echo $d->name?></h5>
                    <a href="" class="btn btn-sm btn-secondary">View Product</a>
                </div>
            </div>
            <?php
			}
			?>
			
            <div class="col-12 text-center">
                <a href="" class="btn btn-primary py-3 px-5">Load More</a>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<?php

include_once('footer.php');

?>