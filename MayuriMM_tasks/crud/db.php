<?php
$servername= "web-dev-env-main-db-1";
$username="App1";
$password="Minuthi4216";
$dbname="App1";

// create database connection
$conn= new mysqli($servername,$username,$password,$dbname)

// check connection
if($conn_>connect_error){
    die("connection failed:".$conn_>connect_error);   
}
?>