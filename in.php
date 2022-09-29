<?php

$server="localhost";
$user="root";
$pass="";
$dbname="phpdb";


//Insertion
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['select'])){
	$connx=mysqli_connect($server,$user,$pass,$dbname);
	if(!$connx){
		echo"Connection Failed!";
	}

	if(isset($_POST['Email']) && isset($_POST['Password'])){
		@$Email=$_POST['Email'];
		@$Password=$_POST['Password'];

		$sql="INSERT INTO logininf(Email,Password) VALUES ('$Email' ,'$Password');";

		if(mysqli_query($connx,$sql)){
			echo"Inserted Successfully"."<br>";
		}
		else{
			echo"Insertion Failed"."<br>";
		}
	}
}
