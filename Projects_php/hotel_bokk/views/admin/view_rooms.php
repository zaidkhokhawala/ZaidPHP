<h2>All Rooms</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>Room No</th>
        <th>Type</th>
        <th>Price</th>
        <th>Hotel</th>
    </tr>
    <?php foreach ($rooms as $room): ?>
        <tr>
            <td><?= $room['room_no'] ?></td>
            <td><?= $room['type'] ?></td>
            <td><?= $room['price'] ?></td>
            <td><?= $room['hotel_name'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
