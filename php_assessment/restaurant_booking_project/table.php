<?php include_once("header.php"); ?>

<div class="container mt-5">
    <h4 class="mb-4">My Table Reservations</h4>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>Booking Type</th>
                <th>Date</th>
                <th>Time From</th>
                <th>Time To</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($bookings)) : ?>
                <?php foreach ($bookings as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= ucfirst($row['booking_type']) ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['time_from'] ?: '-' ?></td>
                        <td><?= $row['time_to'] ?: '-' ?></td>
                        <td><?= ucfirst($row['status']) ?></td>
                        <td>
                            <a href="update_booking?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="delete?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">No reservations found.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>

<?php include_once("footer.php"); ?>