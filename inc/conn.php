<?php
$servername = "18.218.33.185";
$username = "thehieu";
$pass = "thehieu";
$dbname = "hieu_toy";
$conn = mysqli_connect($servername , $username , $pass , $dbname);
if (!$conn) {
	die("ket loi bi loi:" . mysqli_connect_error());
}
else{
     echo "<br>";
}
