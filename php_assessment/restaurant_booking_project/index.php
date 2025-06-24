<?php include_once("header.php"); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body">
                    <h4 class="text-center mb-4">Restaurant Table Reservation</h4>
                    <form id="reservation-form" action="index" method="post">
                      

                        <!-- Booking Type -->
                        <div class="mb-3">
                            <label for="booking_type" class="form-label">Select Booking Type</label>
                            <select name="booking_type" id="booking_type" class="form-select" required>
                                <option value="">-- Select --</option>
                                <option value="full_day">Full Day</option>
                                <option value="half_day">Half Day</option>
                                <option value="custom">Custom</option>
                            </select>
                        </div>

                        <!-- Date Field -->
                        <div class="mb-3 d-none" id="date_div">
                            <label for="date" class="form-label">Select Date</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>

                        <!-- Half Day Time Slot -->
                        <div class="mb-3 d-none" id="half_day_slot_div">
                            <label for="half_day_slot" class="form-label">Select Time Slot</label>
                            <select name="half_day_slot" id="half_day_slot" class="form-select">
                                <option value="">-- Select Slot --</option>
                                <option value="08:00-12:00">8 AM – 12 PM</option>
                                <option value="12:00-16:00">12 PM – 4 PM</option>
                                <option value="16:00-20:00">4 PM – 8 PM</option>
                                <option value="20:00-00:00">8 PM – 12 AM</option>
                            </select>
                        </div>

                        <!-- Custom Time -->
                        <div class="row d-none" id="custom_time_div">
                            <div class="col-md-6 mb-3">
                                <label for="time_from" class="form-label">From Time</label>
                                <input type="time" name="time_from" id="time_from" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="time_to" class="form-label">To Time</label>
                                <input type="time" name="time_to" id="time_to" class="form-control">
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit" name="submit">Submit Reservation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JQuery Logic -->
<script>
document.getElementById("booking_type").addEventListener("change", function () {
    let type = this.value;

    // hide all first
    document.getElementById("date_div").classList.add("d-none");
    document.getElementById("half_day_slot_div").classList.add("d-none");
    document.getElementById("custom_time_div").classList.add("d-none");

    if (type === "full_day") {
        document.getElementById("date_div").classList.remove("d-none");
    } else if (type === "half_day") {
        document.getElementById("date_div").classList.remove("d-none");
        document.getElementById("half_day_slot_div").classList.remove("d-none");
    } else if (type === "custom") {
        document.getElementById("date_div").classList.remove("d-none");
        document.getElementById("custom_time_div").classList.remove("d-none");
    }
});
</script>

<?php include_once("footer.php"); ?>
