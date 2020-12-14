<?php 

session_start();

require_once 'pdov2.php';

$branch = $_SESSION['branch'];
$branch = strtoupper($branch);

$session = $_SESSION['session'];
$session = strtoupper($session);


//function getNumberofGuest() : int{
  //      $noguest = $_SESSION['numberofguest'];
    //    return $noguest;
//}


//function getCustomername(){
  //  $name = $_SESSION['name'];
    //$name = strtoupper($name);
    //return $name;
//}

$status = 'confirm';

     $stmt = $pdo->prepare('INSERT INTO reservation_details
        (Customer_name, Reservation_date, branch_name, Session, Numberofguest, Status) 
    VALUES ( :uid, :fn, :ln, :em, :he, :su)');
    $stmt->execute(array(
        ':uid' => $_SESSION['name'],
        ':fn' => $_SESSION['date'],
        ':ln' => $branch,
        ':em' => $session,
        ':he' => $_SESSION['numberofguest'],
        ':su' => $status));
    
    $stmt2 = $pdo->prepare('INSERT INTO customer_info
        (customer_name, customer_email, customer_phone, customer_address) 
    VALUES ( :cn, :ce, :cp, :ca)');
    $stmt2->execute(array(
        ':cn' => $_SESSION['name'],
        ':ce' => $_SESSION['email'],
        ':cp' => $_SESSION['phone'],
        ':ca' => $_SESSION['address']));
    $_SESSION['message'] = $_SESSION['name'].',Thankyou for choosing Hungry and your reservation is confirmed for your'.$_SESSION['numberofguest'].' Guests';
    $_SESSION['model'] ='done';
    	header("Location: indexv2.php");
        return; 
 ?>