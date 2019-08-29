<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Islm23";
$db_name = "fadis";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $err_msg = array();
// $suc_msg = 'jdsh';
?>