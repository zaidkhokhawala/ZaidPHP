<?php require_once("header.php") ?> 

<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>KlassyCafe</h4>
                        <h6>THE BEST EXPERIENCE</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Make A Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- ***** Main Banner Area Start ***** -->
                <div style="position: relative; height: 100vh; overflow: hidden;">
                    <!-- Background Image -->
                    <img src="../../assets/images/slide-01.jpg" alt="Banner Image" 
                        style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">

                    <!-- Overlay Form -->
                    <div style="position: relative; z-index: 2; height: 100%;">
                        <div class="container h-100 d-flex align-items-center justify-content-center">
                            <div class="bg-light p-5 rounded shadow" style="max-width: 600px; width: 100%; opacity: 0.95;">
                                <h4 class="mb-4 text-center">Table Reservation</h4>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input name="email" type="email" class="form-control" placeholder="Your Email*" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input name="phone" type="text" class="form-control" placeholder="Phone Number*" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <select name="number-guests" class="form-control" required>
                                                <option value="">Number Of Guests</option>
                                                <?php for ($i = 1; $i <= 12; $i++) echo "<option value='{$i}'>{$i}</option>"; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input name="date" type="text" class="form-control" placeholder="dd/mm/yyyy" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <select name="time" class="form-control" required>
                                                <option value="">Time</option>
                                                <option value="Breakfast">Breakfast</option>
                                                <option value="Lunch">Lunch</option>
                                                <option value="Dinner">Dinner</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary px-4">Make A Reservation</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Main Banner Area End ***** -->
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php") ?>  
