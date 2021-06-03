<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "fiverr";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    $error = mysqli_connect_error();
    die("Connection to data base failed... $error");
}