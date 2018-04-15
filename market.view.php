
<?php
$id = $_SESSION['id'];

$identy = $mysqli->query("SELECT * FROM market ; ");


$staty = $identy->fetch_assoc();
$staty['idg'];
$staty['name'];
$staty['price'];
$staty['amount'];
$staty['idt'];
$_SESSION['logged_in'] = true;






$q = "SELECT * FROM market WHERE  price =  (
 SELECT
            MAX(price)
        FROM
            market WHERE amount >0 )  ; ";
$m = $mysqli->query($q) or die($mysqli->error());

while($r =$m->fetch_array()) {
    $idg = $r[1];
    $name = $r[2];
    $price = $r[3];
    $amount = $r[4];
    $idt = $r[0];







?>








<div id="market"  >
  id gracza:  <font color="#00ff85">
      <?php

      echo $idg;
      ?>
      <br></font>
  Nazwa:<font color="#00ff85">
      <?php

      echo $name;
      ?>
      <br></font>
  Cena:<font color="#00ff85">
      <?php

      echo $price;
      ?>
      <br></font>
      Ilosc:<font color="#00ff85">
          <?php

          echo $amount;

          ?>
          <br></font>

















<?php
}
?>
