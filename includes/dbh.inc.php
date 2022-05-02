<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "better_haven";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (!$conn){
    die("Suck dick! Connection failed" . mysqli_connect);

}