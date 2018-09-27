<?php

$connection = mysql_connect("localhost" , "root" , " ");

$db = mysql_select_db("trpl-10b",$connection);
session_start();

$user_check =$_SESSION['login'];
$ses_sql=mysql_query("SELECT username from users where username ='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nama'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location:index.php'); // Redirecting To Home Page IKI GAK PAHAM
}

 ?>
