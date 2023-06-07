<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "aparichit";
$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn){
    die("Connection failed");
}
?>