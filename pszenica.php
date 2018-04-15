<script type="text/javascript">
$(document).ready(function(){
  $("#rbutton_1").click(function(){
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text(minutes + ":" + seconds);


            if (--timer < 0) {
                timer = 0;



            }


        }, 1000);
    }

    jQuery(function ($) {
        var fiveMinutes = 10 * 1,
            display = $('#time');
        startTimer(fiveMinutes, display);

    });
  });
  $("#stop").click(function(){
      $("div").stop();
  });
});

function disable(i){
  $("#rbutton_"+i).prop("disabled",true);
  setTimeout( function() {
        document.getElementById(rbutton_1).removeAttribute('disabled');         // removes the "disabled" attribute
        document.getElementById(rbutton_1).innerHTML = 'Click';        // changes tne button text
      }, 2000 );
}
</script>


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

$identy = $mysqli->query("SELECT * FROM company WHERE idg='$id'");

$staty = $identy->fetch_assoc();
$staty['name'];
$staty['level'];
$staty['amount'];
$_SESSION['logged_in'] = true;



$q = "SELECT * FROM company WHERE idg='$id'";
$m = $mysqli->query($q) or die($mysqli->error());
while($r =$m->fetch_array()) {
  $namep = $r[1];
  $levelp = $r[2];
  $amountp = $r[3];




?>


<div class="content">
  <div1 style="float: left; width: 30%">
  Nazwa:  <font color="#00ff85">
      <?php

      echo $namep;
      ?>
      <br></font>
  Poziom Farmy:<font color="#00ff85">
      <?php

      echo $levelp;
      ?>
      <br></font>
  Produkcja na godzine:<font color="#00ff85">
      <?php

      echo $amountp;
      ?>
      <br></font>


      <form method="post">
      <button type="submit" name="zasiej" id="rbutton_1" onclick="disable(1)">Zasiej pole</button>
      </form>








    </div1>

      <?php

if ($namep == "Pszenica" )
echo "<img src='photos/pszenica.jpg' height='72' width='72'>";

if ($namep == "Ziemniaki" )
echo "<img src='photos/ziemniaki.jpg' height='72' width='72'>";
if ($namep == "Gruszkowy" )
echo "<img src='photos/gruszki.jpg' height='72' width='72'>";
if ($namep == "Jabłkowy" )
echo "<img src='photos/jablka.jpg' height='72' width='72'>";
      ?>



</div>
<br>

<?php
}
?>
