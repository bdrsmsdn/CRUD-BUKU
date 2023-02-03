<?php
$servername = "localhost"; //nama server
$username = "root"; //nama username
$password = ""; //password
$dbname = "data"; //nama database

// Create connection dari fungsi mysqli_connect untuk melakukan koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
