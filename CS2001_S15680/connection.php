<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "jaurim_hotel";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect!");

};
echo"Great Work!!!"
?>