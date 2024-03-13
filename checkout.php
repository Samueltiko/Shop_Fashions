

<?php
 require('conn.php');
 session_start();
// Process the order and store information in the database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    
    // Insert data into the database (You need to establish your database connection here)
    $sql = "INSERT INTO shipping (Name, Address, Email) VALUES ('$name', '$address', '$email')";

     // Execute the SQL query
     $result = mysqli_query($conn, $sql);

    
    // Redirect back to the dashboard or show a success message
    header('Location: payment.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles.css">
    <style>

        /* Reset some default styles for better consistency across browsers */
body, h1, h2, p, input, textarea, button {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
}

.checkout-container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
    margin-bottom: 10px;
}

form {
    margin-top: 15px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* Responsive design - adjust styles for smaller screens */
@media screen and (max-width: 600px) {
    .checkout-container {
        width: 90%;
    }
}

    </style>
</head>
<body>
    <div class="checkout-container">
        <h2>Order Summary</h2>
        <!-- Display order items here -->

        <h2>Shipping Information</h2>
        <form id="checkoutForm" action="" method="post">
            <label for="name">Name:</label>
            <input type="text"  name="name" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required></textarea>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Place Order</button>
        </form>
    </div>
    <script>
        document.getElementById('checkoutForm').addEventListener('submit', function(event) {
    // Add form validation logic if needed
    // Example: Check if the email is valid
    var emailInput = document.getElementById('email');
    if (!isValidEmail(emailInput.value)) {
        alert('Please enter a valid email address.');
        event.preventDefault(); // Prevent form submission
    }
});

function isValidEmail(email) {
    // Add your email validation logic here
    // For simplicity, this example only checks for the presence of '@'
    return email.includes('@');
}

    </script>
</body>
</html>
