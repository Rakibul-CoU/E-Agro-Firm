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
 .blinking{
    animation:blinkingText 1.2s infinite;
    font-size: 50px;
}
@keyframes blinkingText{
    0%{     color: #000;    }
    49%{    color: #000; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #000;    }
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
<br><br><br><br>
<center>
<span class="blinking">Our Upcoming Feature!!!!!!!!!!!</span>
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