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



$q = "SELECT * FROM players WHERE id='$id'";
$m = $mysqli->query($q) or die($mysqli->error());
while($r =$m->fetch_array()) {
  $money = $r[1];
  $level = $r[2];
  $energy = $r[3];



?>




<div1>
    <div1 style="float: left; width: 50%"  ><img src="photos/srel.jpg"  height="100" width="100" ></div1>
    <div1 style="float: right; width: 50%" align="left"><font size="5"><?php echo $first_name; ?></font>
      <br> Stan Konta: <?php echo $money; ?>
      <br> Poziom: <?php echo $level; ?>
      <br> Energia: <?php echo $energy; ?>
      <br>





    </div1>
</div1>
<?php
}
?>
