<h2>Book Room</h2>
<form method="POST" action="index.php?page=book_room">
    <input type="hidden" name="room_id" value="1"> <!-- static for now -->
    <label>Check-in Date:</label>
    <input type="date" name="check_in" required><br>
    <label>Check-out Date:</label>
    <input type="date" name="check_out" required><br>
    <button type="submit">Book Now</button>
</form>
