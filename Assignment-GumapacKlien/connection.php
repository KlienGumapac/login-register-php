<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "connection";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}
echo "";
?>