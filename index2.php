  <html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>PHP Test</title>
    <script  src="js/jquery-3.3.1.min.js"></script>
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
          var fiveMinutes = 100 * 1,
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



  </head>
  <body>


    <div class="wrapper">
<?php
if (isset($_POST['send'])) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "gra";
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE towary SET Ziemniaki=(Ziemniaki-'$_POST[fname]')";

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

if (isset($_POST['zbierz'])) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "gra";
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE towary SET Ziemniaki=(Ziemniaki+'$_POST[fname2]')";

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




<form name="form1" method="post" action="">
        Sprzedaj: <input type="text" name="fname" id="tu"  /><br><br>
        <input type="submit" NAME="send"/>
      </form>
      <form name="form1" method="post" action="">
      Zbierz: <input type="text" name="fname2" /><br><br>
      <input type="submit" NAME="zbierz"/>
    </form>



      <div>
        Ilość Ziemniaków:
      <?php
        class TableRows extends RecursiveIteratorIterator {
          function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
          }
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gra";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT `Ziemniaki` FROM `towary`");
          $stmt->execute();

          // set the resulting array to associative
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
          foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
          }
        }
        catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
        ?>
      </div>

      <div>

      </div>
</div>

  <div id="time">1:00</div>

  <button id="start_1">Start Animation</button>
  <button id="stop">Stop Current Animation</button>
  <button id="rbutton_1" onclick="disable(1)">Click me</button>

 </div>




  </body>
  </html>
