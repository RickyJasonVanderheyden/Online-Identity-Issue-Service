<?php
session_start();

require_once 'db_connect.php';

if(!_SESSION['userID']) {
    echo '<script>alert("You are not logged in")</script>';
}