
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemkan`s Fashions</title>
    <link rel="stylesheet " href="styles.css">
</head>
<style>
    body {
 font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-image:url("hmp.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  background-position: center;
    }
</style>
<body>
    <nav class="navbar">
    <div class="navbar">
        <div class="navbar-left">
        <a href="home.php">Home</a>
        <a href="items1.php">Products</a>
        <a href="admin.php"> Admin</a>
        
        <div class="dropdown">
            <button class="dropbtn">Category</button>
            <div class="dropdown-content">
                <a href="#">Mens Fashions</a>
                <a href="#">Women Fashions</a>
            </div>
        </div>
        </div>
 
    </div>
    <div class="navbar-right">
        <div class="user-dropdown">
            <button class="user-dropbtn">User</button>
            <div class="user-dropdown-content">
                <a href="login.php">Login</a>
                <a href="registration.php">Signup</a>
            </div>
        </div>
    </div>
    </nav>
    <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
       <!-- <button class="search-button">Search</button> -->
       <input type="submit " value="search" class="search-button">
    </div>

  

    <div class="title">Chemkan's Fashions</div>
    <div class="title">New<br>
    Collections</div>
    
    <div class="shop-now">
        <a href="items1.php" class="button">Shop Now</a>
    </div>
    
</body>
</html>
