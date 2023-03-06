<?php 
$servername = "";
$username = "root";
$password = "";
$dbname = "course_db";
$conn = mysqli_connect($servername, $username,$password,$dbname);
mysqli_set_charset($conn , 'UTF8');
if (!$conn) 
    {
     die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>