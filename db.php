<?php 
$connect= mysqli_connect("Localhost","ahmed","","hotel");
if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
?>