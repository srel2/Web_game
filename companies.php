Pole Pszenicy    <form method="post">
            <input type="submit" NAME="zbierz"/>
                </form>
  <?php

              if (isset($_POST['zbierz']))
              {
              if ($money > 1000)
              {


                $ile = 1000; // cena za sprzedaż firmy
              include_once('add.company.php')  ;
              include_once('ile.php')  ;
              header ("location: gra.php");
              return;
            }

            else {
              echo "Nie masz kasy";
              header ("location: gra.php");
              return;



              echo '<script type="text/javascript">

                        window.onload = function () { alert("Welcome at c-sharpcorner.com."); }

              </script>';




            }
            }

  ?>

  Pole Ziemniaków    <form method="post">
  <input type="submit" NAME="zbierzZ"/>
</form>
<?php
  if ($money > 1200)
    if (isset($_POST['zbierzZ']))
      {

      $ile = 1200; // cena za sprzedaż firmy
      include_once('add.company.php')  ;
      include_once('ile.php')  ;
          header ("location: gra.php");
            return;
}



?>

Sad Jabłkowy   <form method="post">
<input type="submit" NAME="zbierzj"/>
</form>
<?php
if ($money > 1300)
  if (isset($_POST['zbierzj']))
    {
    $ile = 1300; // cena za sprzedaż firmy
    include_once('add.company.php')  ;
    include_once('ile.php')  ;
        header ("location: gra.php");
          return;
}?>

Sad Gruszkowy   <form method="post">
<input type="submit" NAME="zbierzg"/>
</form>
<?php
if ($money > 1400)
  if (isset($_POST['zbierzg']))
    {
    $ile = 1400; // cena za sprzedaż firmy
    include_once('add.company.php')  ;
    include_once('ile.php')  ;
        header ("location: gra.php");
          return;
}?>
