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



//$pdo = new PDO('mysql:host=localhost;port=80;dbname=RistoranteconFusion', 
//   '', '');
// See the "errors" folder for details...
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

?>