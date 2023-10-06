
<?php
session_start();
if(!isset($_SESSION["login"])||$_SESSION["login"]==0)
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sacle=1.0">
        <title>Welcome</title>
        <link rel="icon" href="home.jpg" type="image/jpg">
        <link rel="stylesheet" href="style.iindex.css">
        <!-- <link rel="icon" href="somaiya.jpg" type="image/jpg"> -->
    </head>
    <body>
        <section>
            <div class="circle"></div>
            <header>
                <a href="#"><img src="xacktonlogo.png" ></a>
                <div class="name">
                    <center><h3>Web Development Internship</h3></center>
                </div>
                <!-- <ul>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul> -->
            </header>
            <div class="content">
                <div class="textbox">
                    <center><br><h1><span>Welcome to your Account</span></h1>
                    <p>This is just a sample account</p>
                <br><a href="logout.php">Logout</a></center>
                </div>
                <div class="imgBox">
                    <img src="home2.jpeg">
                </div>
            </div>
            <div class="footer">
                <center>Developed By : Siddhi Solanki</center>
            </div>
        </section>
    </body>
</html>