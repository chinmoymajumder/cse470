<?php
$dsn="mysql:host=localhost;dbname=hungry";
$username="root";
$password="";

try{
	$pdo=new PDO($dsn, $username ,$password);
	echo "connected";

}catch(PDOException $e)
{
	$error_message=$e->getMessage();
	echo $error_message;
	exit();
}





?>