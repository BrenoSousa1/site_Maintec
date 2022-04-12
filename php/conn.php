<?php

$base = "MainTec";
$user = "root";
$pass = "";
$host = "localhost";

$conn = mysqli_connect($host, $user, $pass) or die("error");

$selectdb = mysqli_select_db($conn, $base) or die("error");

?>