<form method="post">
<input type="submit" NAME="zbierzj"/>
</form>
<?php
if (isset($_POST['zbierzj'])){
$current_time = getdate();
$czas2 = $current_time["minutes"] +5;


date_default_timezone_set('Europe/London');
// Configuration ----------------------------
//
// Change this to change the countdown time
echo $czas2;
$Time["minute"] = $czas2;
$Time["second"] = 0;
//-------------------------------------------

//get the current date/time
$current_time = getdate();
$Time["hour"] = $current_time["hours"];


// calculate the remaining minutes and seconds
$min = ($Time["hour"] - $current_time["hours"]) * 60;
$min += ($Time["minute"] - $current_time["minutes"]);
$sec = ($Time["second"] - $current_time["seconds"]);



// make sure we get something valid even if we already passed the time limit

// if the number of seconds is below 0
if ($sec < 0)
{
      // we remove 1 minute
      $min --;
      // if there really was 1 minute, we add 60 seconds
      if ($min >= 0)      $sec += 60;
}
// if the number of minutes is below 0 we adjust it to 0
if ($min < 0) $min = 0;


// display the page with the javascript
// we use $min and $ sec to initialize the variables and the display
print "
<html>
<head>
<script>
  var interval, m=".$min.", s=".$sec.";
  function countdown() {
    if(s==0) {if(m==0) {clearInterval(interval); return;} m-=1; s=60;}
    s-=1;
    document.getElementById(\"time\").innerHTML = m + \":\" + (s<10?\"0\":\"\") + s;
  }
</script>
</head>
<body onload=\"interval=setInterval('countdown();',1000);\">
<div id=\"time\">".$min.":".$sec."</div>
</body>
</html>";



}

?>


<?php

  date_default_timezone_set('Europe/London');
$timezone = date_default_timezone_get();

$date = date('h:i:s', time());
echo $date;


 ?>
