<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "healer";
$conn = mysqli_connect($servername , $username , $pass , $dbname);
if (!$conn) {
	die("ket loi bi loi:" . mysqli_connect_error());
}
else{
     echo "<br>";
}