<?php 	

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "idservice";

$connect = new mysqli($localhost, $username, $password, $dbname);

if($connect->connect_error)
{
  die("connect failed".$connect->connect_error);
}
else
{
  echo "sucessful";
}

?>