<?php include_once('header.php'); ?>

<style>
    /* Table border color */
    .custom-table {
        border: 2px solid rgb(255, 23, 23);
    }

    .custom-table th,
    .custom-table td {
        border: 2px solid rgb(255, 23, 23);
    }

    /* Background image (same as form page) */
    .custom-bg {
        background: url('../users/assets/images/home-03/slide-01.jpg') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        padding: 20px;
    }
</style>

<div class="container-fluid custom-bg">
    <h2 class="text-center text-danger">Manage Products</h2>
    <table class="table table-dark table-hover custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Product Name</th>
                <th>Ask Price</th>
                <th>Sale Price</th>
                <th>Product Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($product_arr as $d) { ?>
                <tr>
                    <td><?php echo $d->ID ?></td>
                    <td><?php echo $d->Category ?></td>
                    <td><?php echo $d->Product_Name ?></td>
                    <td><?php echo $d->Ask_Price ?></td>
                    <td><?php echo $d->Sale_Price ?></td>
                    <td><img src="assets/images/apple.jpg" width="50"></td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td>2</td>
                <td>Vegetables</td>
                <td>Tomato</td>
                <td>50</td>
                <td>40</td>
                <td><img src="assets/images/tomato.jpg" width="50"></td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Exotic</td>
                <td>Avocado</td>
                <td>300</td>
                <td>280</td>
                <td><img src="assets/images/avocado.jpg" width="50"></td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php include_once('footer.php'); ?>