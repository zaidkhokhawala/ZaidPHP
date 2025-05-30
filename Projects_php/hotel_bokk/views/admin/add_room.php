<h2>Add Room</h2>
<form method="POST">
    <label>Hotel:</label>
    <select name="hotel_id">
        <?php foreach ($hotels as $hotel): ?>
            <option value="<?= $hotel['id'] ?>"><?= $hotel['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label>Room No:</label>
    <input type="text" name="room_no" required><br>
    <label>Type:</label>
    <input type="text" name="type" required><br>
    <label>Price:</label>
    <input type="number" name="price" required><br>
    <button type="submit">Add Room</button>
</form>
