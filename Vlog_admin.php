<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>E-Agro Farm(Vlogs)</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body style="background-image: none;">
        <div>
            <h1 class="head">E-Agro Farm</h1>
            <div class="menu">
                <ul>
                    <li><a href="admin_home.php"> Home </a></li>
                    <li><a href="insert_admin.php">Add Another Admin</a></li>
                    <li><a href="Vlog_admin.php">Vlog</a></li>
                
                    <!-- <li>
                        <a href="#">Login</a>
                        <ul>
                            <li><a href="Login.php">Farmer</a></li>
                            <li><a href="Login.php">Buyer</a></li>
                            <li><a href="LoginAdmin.php">Admin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Register</a>
                        <ul>
                            <li><a href="Registration.php">Farmer</a></li>
                            <li><a href="Registration.php">Buyer</a></li>
                            <li><a href="Registration.php">Admin</a></li>
                        </ul>
                    </li> -->
                    <li><a href="table_admin.php">Admins</a></li>
                    <li><a href="table_products.php">Products</a></li>
                    <li><a href="table_registration.php">Registrations</a></li>
                    <li><a href="table_transaction.php">Transactions</a></li>
                    <li><a href="About_admin.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class='container-vlog'>
            <div class="header-vlog">
                <h1>Welcome to Vlogs :</h1>
            </div>
        <style>
.footer {
   width: 100%;
        position: fixed;        
        background: #ffffff;
        padding: 10px 0;
        color: #ffffff;
      font-size: 25px;
bottom: 0;
}
</style>

<div class="footer">
   <nav>
    <center>
                <a href="#">Home</a>
                 
                <a href="#">About</a>
                <a href="#">Products</a>
                <a href="#">Services</a>
                <a href="#">Contact Us</a>
            </nav>
</div>
    </body>
</html>
