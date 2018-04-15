<?php
/* Displays user information and some useful messages */
require 'db.php';




session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $id = $_SESSION['id'];
    $level = $_SESSION['level'];
    $money = $_SESSION['money'];
    $energy = $_SESSION['energy'];
}

ob_start();
require 'market.view.php';
ob_end_clean();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="reset.css" type="text/css" />


  <title>PHP Test</title>
  <script  src="js/jquery-3.3.1.min.js"></script>
  <script  src="js/moment.min.js"type="text/javascript"></script>
  <script  src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
 <script>
 $(function () {
  var timerId = 0;
  var ctr=0;
  var max=10;

  timerId = setInterval(function () {
    // interval function
    ctr++;
    $('#blips > .progress-bar').attr("style","width:" + ctr*max + "%");

    // max reached?
    if (ctr==max){
      clearInterval(timerId);
    }

  }, 500);


  $('.btn-default').click(function () {
    clearInterval(timerId);
  });

});
</script>



<script>
  var days = "<?= $days ?>";
  var monthes= "<?= $monthes?>";
  var years= "<?= $years?>";

    document.getElementById('countdown').innerHTML = days+ ' days';

    document.getElementById('countdown').innerHTML += monthes+ ' monthes';

    document.getElementById('countdown').innerHTML += years+ ' years';
</script>

<?php

if (isset($_POST['zbierz2'])) {


      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "accounts";
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE user SET money=$ile";
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





</head>
<body>
  <div class="layout">
      <div class="header">
          <div class="nav-left">
              <a class="logo nav-item " href="#">Ekonomiczna</a>
          </div>
          <span  class="nav-toggle"></span>
          <div  class="nav-right">
            <ul >
              <li><a href="#">Start</a></li>
              <li><a href="#">O Nas</a></li>
              <li><a href="#">Oferta</a></li>
              <li><a href="#">Aktualności</a></li>
              <li><a href="#">Kontakt</a></li>
            </ul>
          </div>
      </div>
      <div1 class="avatar">
        <?php
      include('Player.php')  ;
      echo $money;
      ?>

      </div1>
      <div id="content">
          <div class="content">
            <?php

            include('companies.php')  ;
            echo $id;
            ?>



          </div>

          <div class="content" id="market">


<?php
echo uniqid(True,True);
?>




<form name="form1" method="post" >
Sprzedaj: <input type="text" name="kupK" /><br><br>
<input type="submit" NAME="sellm"/>
</form>

<?php
if (isset($_POST['sellm']) &&  ($_POST['kupK'] > 0) && ($amount > 0) && $_POST['kupK'] <= $amount)
{
if ($money > ($price * $_POST['kupK']))

include_once('ilem.php')  ;

header ("location: gra.php");
return;

}

echo ($price * $amount) ;
?>



<?php

include('market.view.php')  ; // musi byc po klawiszu zmieniajacy by sie odswiezalo
?>
</div>
<br>


          </div>
          <div class="content">
            <?php

            include('market.php')  ;

            ?>

          </div>
          <div class="content id="content" ">
            Firmy
            <?php

            include('pszenica.php')  ;

            ?>
          </div>
      </div>



      <?php

      // Display message about account verification link only once
      if ( isset($_SESSION['message']) )
      {
          echo $_SESSION['message'];

          // Don't annoy the user with more messages upon page refresh
          unset( $_SESSION['message'] );
      }

      ?>
      </p>

      <?php

      // Keep reminding the user this account is not active, until they activate
      if ( !$active ){
          echo
          '<div class="info">
          Account is unverified, please confirm your email by clicking
          on the email link!
          </div>';
      }

      ?>


<div class="sidebar">Nazwa Gracza <br>
  Nazwa Gracza <br>
  Nazwa Gracza <br>
  Nazwa Gracza <br>
  Nazwa Gracza <br>
  Nazwa Gracza <br>





</div>


Czas z kompa Kamila
<p id="demo"></p>

<div class="footer">
          <p class="main">
              2017 © nayma.pl | Wszystkie prawa zastrzeżone | Design by <a href="https://nayma.pl" target="_blank">nayma.pl</a>
          </p>
      </div>
  </div>





<?php
$date = 'July 20 2018 05:00:00 PM PDT';
  $exp_date = strtotime($date);
$now = time();

if ($now < $exp_date) {
?>
<script>
// Count down milliseconds = server_end - server_now = client_end - client_now
var server_end = <?php echo $exp_date; ?> * 1000;
var server_now = <?php echo time(); ?> * 1000;
var client_now = new Date().getTime();
var end = server_end - server_now + client_now; // this is the real end time
var ser = server_end;
var cl = client_now;

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour *24;
var timer;

function showRemaining()
{
    var now = new Date();
    var distance =  now;
    if (distance < 0 ) {
       clearInterval( timer );
       document.getElementById('countdown').innerHTML = 'EXPIRED!';

       return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor( (distance % _day ) / _hour );
    var minutes = Math.floor( (distance % _hour) / _minute );
    var seconds = Math.floor( (distance % _minute) / _second );

    var countdown = document.getElementById('countdown');
    var countdown2 = document.getElementById('countdown2');
    countdown.innerHTML = '';
    countdown2.innerHTML = '';

    countdown.innerHTML +=   hours+ ':';
    countdown.innerHTML +=  minutes+ ':';
    countdown.innerHTML +=  seconds+ '';



    var minutes2 = minutes
    var countdown2 = document.getElementById('countdown2');
    if (minutes < 10  )
    {
    var minutes2 = (((minutes - 20) - 5)* -1);
      if (minutes2 == 5){
      countdown2.innerHTML += '0' + minutes2;
      countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
      }
    var minutes2 = ((minutes - 5)* -1);
    if (minutes2 < 0){
    countdown2.innerHTML += '0' + (minutes2 +5);
    }
    if (minutes2 > 0){
    countdown2.innerHTML += '0' + minutes2;
    }
    countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
    }

    if (minutes > 10 && minutes < 20)
    {
    var minutes2 = (((minutes - 20) - 5)* -1);
      if (minutes2 == 5){
      countdown2.innerHTML += '0' + minutes2;
      countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
      }
    var minutes2 = (((minutes - 10) - 5)* -1);
    if (minutes2 < 0){
    countdown2.innerHTML += '0' + (minutes2 +5);
    }
    if (minutes2 > 0){
    countdown2.innerHTML += '0' + minutes2;
    }
    countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
    }

    if (minutes > 20 && minutes < 30)
    {
    var minutes2 = (((minutes - 20) - 5)* -1);
      if (minutes2 == 5){
      countdown2.innerHTML += '0' + minutes2;
      countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
      }
    if (minutes2 < 0){
    countdown2.innerHTML += '0' + (minutes2 +5);
    }
    if (minutes2 > 0){
    countdown2.innerHTML += '0' + minutes2;
    }
    countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
    }


    if (minutes > 30 && minutes < 40)
    {
    var minutes2 = (((minutes - 30) - 5)* -1);
      if (minutes2 == 5){
      countdown2.innerHTML += '0' + minutes2;
      countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
      }
    if (minutes2 < 0){
    countdown2.innerHTML += '0' + (minutes2 +5);
    }
    if (minutes2 > 0){
    countdown2.innerHTML += '0' + minutes2;
    }
    countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
    }

    if (minutes > 40 && minutes < 50)
    {
    var minutes2 = (((minutes - 40) - 5)* -1);
      if (minutes2 == 5){
      countdown2.innerHTML += '0' + minutes2;
      countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
      }
    if (minutes2 < 0){
    countdown2.innerHTML += '0' + (minutes2 +5 );
    }
    if (minutes2 > 0){
    countdown2.innerHTML += '0' + minutes2;
    }
    countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
    }

    if (minutes > 50 && minutes < 60)
    {
    var minutes2 = (((minutes - 40) - 5)* -1);
      if (minutes2 == 5){
      countdown2.innerHTML += '0' + minutes2;
      countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
      }
    var minutes2 = (((minutes - 50) - 5)* -1);
    if (minutes2 < 0){
    countdown2.innerHTML += '0' + (minutes2 +5 );
    }
    if (minutes2 > 0){
    countdown2.innerHTML += '0' + minutes2;
    }
    countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
    }

    if (minutes > 60 )
    {
    var minutes2 = (((minutes - 40) - 5)* -1);
      if (minutes2 == 5){
      countdown2.innerHTML += '0' + minutes2;
      countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
      }
    var minutes2 = (((minutes - 60) - 5)* -1);
    if (minutes2 < 0){
    countdown2.innerHTML += '0' + (minutes2 +5 );
    }
    if (minutes2 > 0){
    countdown2.innerHTML += '0' + minutes2;
    }
    countdown2.innerHTML += ':' + ( (seconds - 60)* -1) + '<br />';
    }

}


timer = setInterval(showRemaining, 1000);
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds

  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>




<?php
} else {
    echo "Times Up";
}
?>
Czas servera
<div id="countdown"></div>
Następny punkt za
<div id="countdown2"></div>


<?php

// Display message about account verification link only once
if ( isset($_SESSION['message']) )
{
    echo $_SESSION['message'];

    // Don't annoy the user with more messages upon page refresh
    unset( $_SESSION['message'] );
}

?>
</p>

<?php

// Keep reminding the user this account is not active, until they activate
if ( !$active ){
    echo
    '<div class="info">
    Account is unverified, please confirm your email by clicking
    on the email link!
    </div>';
}

?>

<h2><?php echo $first_name.' '.$last_name .$id; ; ?></h2>









</body>
</html>
