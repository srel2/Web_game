<?php

/* Displays user information and some useful messages */
require 'db.php';
//session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
}
else {
    // Makes it easier to read


}


?>


<?php

$id = $_SESSION['id'];
$_SESSION['logged_in'] = true;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";
   if ($ile == 1000){
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO company (name,level,amount,idg) VALUES ('Pszenica',1,100,$id)";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded

$conn = null;}

     if ($ile == 1200){
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


       // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $sql = "INSERT INTO company (name,level,amount,idg) VALUES ('Ziemniaki',1,120,$id)";

     // Prepare statement
     $stmt = $conn->prepare($sql);

     // execute the query
     $stmt->execute();

     // echo a message to say the UPDATE succeeded



   $conn = null;}

   if ($ile == 1300){
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


     // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql = "INSERT INTO company (name,level,amount,idg) VALUES ('Jabłkowy',1,130,$id)";

   // Prepare statement
   $stmt = $conn->prepare($sql);

   // execute the query
   $stmt->execute();

   // echo a message to say the UPDATE succeeded



 $conn = null;}

 if ($ile == 1400){
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


   // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql = "INSERT INTO company (name,level,amount,idg) VALUES ('Gruszkowy',1,140,$id)";

 // Prepare statement
 $stmt = $conn->prepare($sql);

 // execute the query
 $stmt->execute();

 // echo a message to say the UPDATE succeeded



 $conn = null;}








 ?>
