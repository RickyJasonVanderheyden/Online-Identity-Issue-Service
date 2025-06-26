<?php

require_once 'connectDB.php';

$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$bcnum = $_POST['bcnum'];
$cvstatus = $_POST['cvstatus'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "INSERT INTO applications (name, address, gender, dob, bcnum, cvstatus, email, contact) 
VALUES ('$name', '$address', '$gender', '$dob', '$bcnum', '$cvstatus', '$email', '$contact')";

if ($connect->query($sql) === TRUE) {
    echo '<script>alert("Application was added to database."); 
    window.location.href = "../index.php";</script>';
}
else {
    echo '<script>alert("There was an unexpected error."); 
    window.location.href = "index.php";</script>';
}