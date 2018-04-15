<?php
/******************************************************
* connection.php
* konfiguracja połączenia z bazą danych
******************************************************/

function connection() {
    // serwer
    $mysql_server = "localhost";
    // admin
    $mysql_admin = "root";
    // hasło
    $mysql_pass = "";
    // nazwa baza
    $mysql_db = "mysql";
    // nawiązujemy połączenie z serwerem MySQL
    @mysqli_connect($mysql_server, $mysql_admin, $mysql_pass)
    or die('Brak połączenia z serwerem MySQL.');
    // łączymy się z bazą danych
    @mysqli_select_db($mysql_db)
    or die('Błąd wyboru bazy danych.');
}

?>
