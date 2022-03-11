<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Agro Farm</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            h1 {
                text-align: center;
                font-style: italic;
                color: black;
            }
            body {
                background-image: url(images/background.jpg);
                background-size: cover;
            }
            .slide {
                width: 400px;
                height: 200px;
                background-image: url(images/inx1.jpg);
                background-size: cover;
                margin: auto;
                box-shadow: 3px 3px 10px 10px green;
                animation: sample 7s infinite linear;
            }
            @keyframes sample {
                33% {
                    background: url(images/inx2.jpg);
                    background-size: cover;
                }
                75% {
                    background: url(images/inx3.jpg);
                    background-size: cover;
                }
            }
            .lbtn {
                padding: 10px;
                margin: 90px 150px;
                border-radius: 10px;
                font-size: 20px;
            }
            .lbtn:hover {
                background-color: teal;
                transform: scale(1.5);
                color: white;
            }
            .rbtn {
                padding: 10px;
                margin: 11px 200px;
                border-radius: 10px;
                margin-left: 150px;
                font-size: 20px;
            }
            .rbtn:hover {
                background-color: teal;
                transform: scale(1.5);
                color: white;
            }
            .mdbtn {
                padding: 10px;
                margin: 20px 100px;
                border-radius: 10px;
                margin-left: 100px;
               font-size: 20px;
            }
            .mdbtn:hover {
                background-color: teal;
                transform: scale(1.5);
                color: white;
            }


            a:hover {
                background-color: teal;
                transform: scale(1.5);
                color: white;
            }

            a {
                text-decoration: none;
            }

            .marq {
                width: 50%;
                margin: auto;
            }
      

        </style>
    </head>
    <body>
        <div class="container">
       <center>
       <h1 style="background-color:DodgerBlue;">E-Agro Farm</h1>
            </div>
<div class="container">
            <div class="marq">
                <marquee direction="left"> <h1>Welcome To New Era Of Technology. Buy Product From Home, Stay Home, Stay Safe</h1></marquee>
            </div>
            <div class="links">
                <!-- <button class="lbtn">Login</button> -->
                <!-- <button class="rbtn">Registation</button> 
-->
           <!-- <button class="mdbtn">Talk To Agro-Consultant</button> -->
                <button class="lbtn">
                    <a class="btn-primary" href="index_login.php">Login</a>
                </button>
                <button class="rbtn">
                    <a class="btn-primary" href="index_registration.php">Registration</a>
                </button>
 <button class="mdbtn">
                    <a class="btn-primary" href="cons.php"
                        >Talk To Agro-Consultant</a
                    >
                </button>

            <div class="slide"></div>
        </div>
<style>
.footer {
   width: 100%;
        position: fixed;        
        background: black;
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
                <a>[All Rights Reserved @ E-Agro Farm]</a>
            </nav>
</div>
    </body>
</html>
