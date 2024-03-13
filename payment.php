<?php 
include("conn.php");
?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet " href="styles.css">

   
</head> 
<style>
        img{
            width:20% ;
            margin:auto;
            display:block;
        }
    </style>


<body>
  
    <div class="container">
        <h2 class ="text-center text-info">Payment Options</h2>

        <div class ="row d-flex justify-content-center align-items-center">
            <div class="col-md-6"></div>
            <a href="https://www.paypal.com"><img src="../Project IS 2/paypal.jpg" alt=""></a>
        </div>
        <div class="col-md-6">
            <a href="order.php?user_id=<?php echo $user_id ?>"><h2 class="text-center">Payofline</h2> </a>
        </div>
    </div>
     
</body>
</html>