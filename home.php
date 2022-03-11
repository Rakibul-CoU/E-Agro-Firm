<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "farming";

    $con = mysqli_connect($server,$user,$password,$db);
    
?>


<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Agro Farm</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
        <div class="full">
            <center>
            <h1>E-Agro Farm</h1></center>
            <div class="menu">
                <ul>
                    <li><a href="home.php"> Home </a></li>
                    <li><a href="Vlog.php">Vlog</a></li>
                
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
                    <li><a href="market.php">Digital market</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <h6 style="text-align: center; font-size: xx-large;">
                <?php
                    $a = $_SESSION["login"];
                    //echo $a;
                    $find= "select username from registration where sno='$a'";
                    $result = $con->query($find);
                    $row = $result->fetch_assoc();
                    echo "Welcome ".$row["username"];
                            
                ?>
            </h6>
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
                <a>All Rights Reserved @E-Agro Farm</a>
            </nav>
</div>
    </body>
</html>
