
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple E-Commerce</title>
  <link rel="stylesheet" href="D:\xampp\htdocs\project IS 2\bootstrap-5.0.2-dist.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <!-- Cart Icon -->
  <div id="cart-icon" onclick="toggleCart()">
    🛒
    <span id="cart-count">0</span>
  
  </div>
   

  <!-- Product List -->
  <div class="product1" data-id="1" data-name="Product 1" data-price="20.00">
    <img src="img1.jpg" alt="Product 1">
    <h2>Product 1</h2>
    <p>$20.00</p>
    <button class="add-to-cart" onclick="addToCart(this)">Add to Cart</button>
  </div>

  <div class="product2" data-id="2" data-name="Product 2" data-price="30.00">
    <img src="product1.jpg" alt="Product 2">
    <h2>Product 2</h2>
    <p>$30.00</p>
    <button class="add-to-cart" onclick="addToCart(this)">Add to Cart</button>
  </div>

  <div class="product3" data-id="2" data-name="Product 3" data-price="30.00">
    <h2>Product 3</h2>
    <p>$30.00</p>
    <button class="add-to-cart" onclick="addToCart(this)">Add to Cart</button>
  </div>

  <div class="product4" data-id="4" data-name="Product 2" data-price="30.00">
    <h2>Product 4</h2>
    <p>$30.00</p>
    <button class="add-to-cart" onclick="addToCart(this)">Add to Cart</button>
  </div>


   <!-- Cart Display -->
   <div id="cart" style="display: none;">
    <h3>Your Cart</h3>
    <ul id="cart-list"></ul>
    <ul id="cart-items"></ul>
    <p>Total: $<span id="cart-total">0.00</span></p>
    <button id="checkout" onclick="window.location.href='login.php'">Checkout</button>
  </div> 


  <script src="add.js"></script>
</body>
</html>

