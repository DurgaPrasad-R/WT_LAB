<?php
$severname = 'localhost';
$username = 'root';
$password = '';
$dbname = "mydatabase";
$conn = mysqli_connect($severname,$username,$password,$dbname);
if (!$conn){
    die('Could not connect to mySql server:'.mysql_error());
}
?>