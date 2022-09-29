<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">AUTOLAB</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#r">REVIEWS</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            </div>
        <div class="content">
            <h1>All You Need To Know<br><span>About Cars</span><br>         <br></h1>
            <p class="par">Start your research for your next car by comparing popular models,<br>
              reading consumer reviews, and seeing what our car<br>  experts say about the latest models.</p>



                <div class="form">
                    <h2>Login Here</h2>
                    <form action="" method="POST">
                    <input type="email" name="Email" id="Email" placeholder="Enter Email Here">
                    <input type="password" name="Password" id="Password" placeholder="Enter Password Here">
                    <button class="btnn"><a href="in.php">Login</a></button>
                    </form>
                </div>
          </div>
      </div>
      <div class="icons">
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a><br>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a><br>
        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a><br>
        <a href="#"><ion-icon name="logo-google"></ion-icon></a><br>
        <a href="#"><ion-icon name="logo-skype"></ion-icon></a><br>
    </div>
</body>
</html>


<?php

$server="localhost";
$user="root";
$pass="";
$dbname="phpdb";


//Insertion
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['Login'])){
	$connx=mysqli_connect($server,$user,$pass,$dbname);
	if(!$connx){
		echo"Connection Failed!";
	}

	if(isset($_POST['Email']) && isset($_POST['Password'])){
		@$Email=$_POST['Email'];
		@$Password=$_POST['Password'];

		$sql="INSERT INTO logininf(Name,Password) VALUES ('$Email' ,'$Password');";

		if(mysqli_query($connx,$sql)){
			echo"Inserted Successfully"."<br>";
		}
		else{
			echo"Insertion Failed"."<br>";
		}
	}
}
