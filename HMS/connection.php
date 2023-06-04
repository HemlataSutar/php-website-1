<?php
$servername="localhost";
$username="root";
$password="";
$database_name="dragonhousedb";
$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
?>