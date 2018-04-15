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


 if (isset($_POST['surowce'])) {
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "accounts";
       try {
         $uniqT = uniqid(True,True);
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO market (id,idg,name,price,amount) VALUES ('$uniqT',$id,'pszenica','$_POST[sprzedajC]',$_POST[iloscS])";

         // Prepare statement
         $stmt = $conn->prepare($sql);

         // execute the query
         $stmt->execute();

         // echo a message to say the UPDATE succeeded

         }
       catch(PDOException $e)
         {
         echo $sql . "<br>" . $e->getMessage();
         }

       $conn = null;

 }
 ?>

<div class="content">


  <form name="form1" method="post" action="">
  Sprzedaj: <input type="text" name="sprzedajC" /><br><br>
  Ilośc: <input type="text" name="iloscS" /><br><br>
    <form name="form1" method="post" action="">
  <input type="submit" NAME="surowce"/>

</form>
</div>
