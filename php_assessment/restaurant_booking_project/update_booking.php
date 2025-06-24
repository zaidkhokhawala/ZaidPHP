<?php include_once("header.php"); 
$res = $booking_data[0]; // single row data
?>

<div class="container mt-5">
    <h4 class="mb-4">Update Reservation</h4>
    <form action="" method="post">
        <!-- Booking Type -->
        <div class="mb-3">
            <label for="booking_type" class="form-label">Booking Type</label>
            <select name="booking_type" id="booking_type" class="form-select" required>
                <option value="">-- Select --</option>
                <option value="full_day" <?= $res['booking_type'] == 'full_day' ? 'selected' : '' ?>>Full Day</option>
                <option value="half_day" <?= $res['booking_type'] == 'half_day' ? 'selected' : '' ?>>Half Day</option>
                <option value="custom" <?= $res['booking_type'] == 'custom' ? 'selected' : '' ?>>Custom</option>
            </select>
        </div>

        <!-- Date -->
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="<?= $res['date'] ?>" required>
        </div>

        <!-- Half Day Slots -->
        <div class="mb-3" id="half_day_slot_div" style="display:none;">
            <label for="half_day_slot" class="form-label">Half Day Slot</label>
            <select name="half_day_slot" id="half_day_slot" class="form-select">
                <option value="">-- Select Slot --</option>
                <?php
                $slots = [
                    "08:00-12:00" => "8 AM – 12 PM",
                    "12:00-16:00" => "12 PM – 4 PM",
                    "16:00-20:00" => "4 PM – 8 PM",
                    "20:00-00:00" => "8 PM – 12 AM"
                ];
                foreach ($slots as $val => $label) {
                    echo "<option value='$val' " . (($res['time_from'] . '-' . $res['time_to']) == $val ? 'selected' : '') . ">$label</option>";
                }
                ?>
            </select>
        </div>

        <!-- Custom Time -->
        <div class="row" id="custom_time_div" style="display:none;">
            <div class="col-md-6 mb-3">
                <label for="time_from" class="form-label">From Time</label>
                <input type="time" name="time_from" id="time_from" class="form-control" value="<?= $res['time_from'] ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label for="time_to" class="form-label">To Time</label>
                <input type="time" name="time_to" id="time_to" class="form-control" value="<?= $res['time_to'] ?>">
            </div>
        </div>

        <div class="d-grid">
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

<script>
    function toggleFields() {
        let type = document.getElementById('booking_type').value;
        document.getElementById('half_day_slot_div').style.display = 'none';
        document.getElementById('custom_time_div').style.display = 'none';

        if (type === 'half_day') {
            document.getElementById('half_day_slot_div').style.display = 'block';
        } else if (type === 'custom') {
            document.getElementById('custom_time_div').style.display = 'flex';
        }
    }

    document.getElementById('booking_type').addEventListener('change', toggleFields);
    window.onload = toggleFields; // Show correct fields on page load
</script>

<?php include_once("footer.php"); ?>
