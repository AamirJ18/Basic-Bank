<?php

$servername="localhost";
$username="root";
$password="";
$dbname="tsf_bank";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("Could not connect to database due to following error -> ".mysqli_connect_error());
}

?>