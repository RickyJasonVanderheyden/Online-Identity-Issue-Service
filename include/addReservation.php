<?php

require_once 'connectDB.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$date = $_POST['date'];

$sql = "INSERT INTO reservations (name,email,contact,date)
      VALUES ('$name','$email','$contact','$date')";

if ($connect->query($sql) === TRUE) {
  echo '<script>alert("Application was added to database."); 
  window.location.href = "../index.php";</script>';
}
else {
  echo '<script>alert("There was an unexpected error."); 
  window.location.href = "index.php";</script>';
}

?>