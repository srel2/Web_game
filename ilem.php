<?php
$id = $_SESSION['id'];

$_SESSION['logged_in'] = true;

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "accounts";
      try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "UPDATE players SET money=(money- ($price * '$_POST[kupK]')) WHERE id='$id' ";


        // Prepare statement
        $stmt = $conn->prepare($sql);


        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded

        }
      catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
          echo $q . "<br>" . $e->getMessage();
        }

      $conn = null;


?>
<?php
$id = $_SESSION['id'];

      $_SESSION['logged_in'] = true;

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "accounts";
      try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




        $sql2 = "UPDATE players SET money=(money+($price * '$_POST[kupK]')) WHERE id='$idg' " ;

        $stmt2 = $conn->prepare($sql2);

        // execute the query

        $stmt2->execute();
        // echo a message to say the UPDATE succeeded

        }
      catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
          echo $q . "<br>" . $e->getMessage();
        }

      $conn = null;


?>
<?php
$id = $_SESSION['id'];

      $_SESSION['logged_in'] = true;

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "accounts";
      try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




        $sql3 = "UPDATE market SET amount=(amount -'$_POST[kupK]') WHERE idg='$idg' " ;

        $stmt3 = $conn->prepare($sql3);

        // execute the query

        $stmt3->execute();
        // echo a message to say the UPDATE succeeded

        }
      catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
          echo $q . "<br>" . $e->getMessage();
        }

      $conn = null;


?>
