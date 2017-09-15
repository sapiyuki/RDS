<?php 

require_once('config.php');

try{
	$conn = new PDO("mysql:host=$host; dbname=$dbname" , $username , $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected Success";
} catch (PDOException $e){
	echo "Fail:" . $e->getMessage();
}
?>
