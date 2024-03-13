<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .dashboard-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .dashboard-buttons a {
            text-decoration: none;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        .dashboard-buttons a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <div class="dashboard-buttons">
        <a href="insert_product.php">Insert Product</a>
        <a href="insert_category.php">Insert Category</a>
        <a href="view_products.php">View Products</a>
        <a href="delete.php">Delete</a>
    </div>
</body>
</html>
