<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
date_default_timezone_set('Asia/Manila');
$server_date_time = date('Y-m-d H:i:s');
$server_date_only = date('Y-m-d');
$server_time_only = date('H:i:s');
$server_year = date('Y');

try {

	$conn = new PDO ("mysql:host=$servername;dbname=leave_db",$username,$password);

	// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connected Successfully";
	
} catch (PDOException $e) {
	echo 'NO CONNECTION'.$e->getMessage();
}

?>