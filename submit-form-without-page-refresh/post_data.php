<?php
$host="localhost";
$username="root";
$password="";
$databasename="demo";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_message']))
{
  $name=$_POST['user_name'];
  $email=$_POST['user_email'];
  $message=$_POST['user_message'];
  
  $insert=mysql_query("insert into contact (name,email,message) values('$name','$email','$message')");  
  $id=mysql_insert_id($insert);  
}

?>