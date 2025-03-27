<?php
// Array of products
$products = ["Laptop", "Smartphone", "Headphones", "Smartwatch", "Camera"];

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Dynamic Content with PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .product-list {
            max-width: 600px;
            margin: auto;
            padding: 10px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product {
            padding: 15px;
            margin: 10px 0;
            background: #e1f5fe;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <h1>Product List</h1>
    <div class='product-list'>";

// Loop to display each product
foreach ($products as $product) {
    echo "<div class='product'>$product</div>";
}

echo "</div>
</body>
</html>";
?>
