
<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>estore: Homepage</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div id="header">
            <div id="logo">
<!--logo--> <img src="images/image1.png" title="Estore">
            </div>
            <div id="navbar">
                <a href="index.php">Home</a>
                <a href="aboutus.php">About Us</a>
                <a href="product.php">Products</a>
                <a href="contact.php">Contact</a>

            </div>
            <div class="cart">
                <a href="shoppingcart.html">
                <img src="images/shopping_cart.png" alt="shopping cart">
                </a>
            </div>

            <div id="login_reg_pannel">
                <?php if(empty($_SESSION["username"])) { ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
                <?php } else{ ?>
                <a href="logout.php">logout</a>
                <?php } ?>
            </div>
        </div>