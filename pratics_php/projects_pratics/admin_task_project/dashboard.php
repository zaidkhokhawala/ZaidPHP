<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('https://plus.unsplash.com/premium_photo-1701069017776-1d6363816001?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8ZGFyayUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D') no-repeat center center fixed;
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
        }

        /* Navbar */
        .navbar {
            height: 80px;
            background-color: #000000;
            /* Black */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            animation: fadeInDown 1s ease-out;
        }

        .navbar-brand {
            color: #FFD700;
            font-size: 30px;
            font-weight: bold;
            letter-spacing: 2px;
            background: linear-gradient(45deg, #ffd700, #ffcc00, #b8860b);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .welcome-text {
            font-size: 24px;
            color: #FFD700;
            background: linear-gradient(45deg, #ffd700, #ffcc00, #b8860b);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            animation: fadeInDown 1s ease-out;
        }

        .logout-btn {
            background-color: #FFD700;
            color: #000000;
            font-weight: bold;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: linear-gradient(45deg, #ffd700, #ffcc00, #b8860b);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .logout-btn:hover {
            background: linear-gradient(45deg, #ffb700, #ffd700, #ffcc00);
            transform: scale(1.05);
            color: #000000;
        }

        /* Table Section */
        .table-container {
            background: #2c2c2c;
            /* Dark grayish background */
            padding: 30px;
            margin-top: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background: linear-gradient(45deg, #000000, #434343);
            /* Black Gradient */
            color: #FFD700;
            /* Gold */
            font-size: 18px;
            text-align: center;
        }

        .table td {
            background: linear-gradient(45deg, #000000, #434343);
            /* Black Gradient for Body */
            color: #FFD700;
            /* Gold Text Color */
            vertical-align: middle !important;
            font-size: 16px;
            text-align: center;
        }

        .btn-primary {
            background: linear-gradient(45deg, #ffd700, #ffcc00, #b8860b);
            /* Shiny Gold Gradient */
            color: #000000;
            border: none;
            font-weight: bold;
            transition: all 0.3s ease;
            padding: 8px 14px;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #ffb700, #ffd700, #ffcc00);
            transform: scale(1.05);
        }

        /* Modal Design */
        .modal-content {
            border-radius: 12px;
            background: #2c2c2c;
        }

        .modal-header {
            background: #000000;
            color: #FFD700;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .modal-footer {
            background: #2c2c2c;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        /* Animation */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Add Product Form Styles */
        .add-product-form input,
        .add-product-form select {
            border-radius: 10px;
            background-color: #444444;
            padding: 10px;
            border: 1px solid #6c757d;
            margin-bottom: 20px;
            width: 100%;
        }

        .add-product-form select {
            background-color: #3e3e3e;
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>

            <div class="collapse navbar-collapse justify-content-center">
                <span class="welcome-text">Welcome back, Zaid</span>
            </div>

            <div class="d-flex">
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container">

        <!-- Manage Products Table Section -->
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0" style="font-weight: bold; color: #FFD700;">Manage Products</h3>

                <!-- Add Product Button -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    + Add Product
                </button>
            </div>

            <!-- Products Table -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Product Name</th>
                            <th>Price (₹)</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>





                    <tbody>
                        <?php foreach ($product_data as $data) {

                        ?>
                            <tr>
                                <td><?php echo $data['id'];  ?></td>
                                <td><?php echo $data['product_name'];  ?></td>
                                <td><?php echo $data['price'];  ?></td>
                                <td><?php echo $data['category'];  ?></td>

                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>


















                </table>
            </div>
        </div>

    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="add_product" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3 add-product-form">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" required>
                        </div>
                        <div class="mb-3 add-product-form">
                            <label class="form-label">Price (₹)</label>
                            <input type="number" class="form-control" name="price" required>
                        </div>
                        <div class="mb-3 add-product-form">
                            <label class="form-label">Category</label>
                            <select class="form-control" name="category" required>
                                <option value="">Select Category</option>
                                <option value="Fruits">Fruits</option>
                                <option value="Vegetables">Vegetables</option>
                                <option value="Dairy">Dairy</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-success">Add Product</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>