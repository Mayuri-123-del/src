<?php
// what to do with the data of the form
$title = "Your Information";

include 'header.php';

$fname=$_POST["fname"];
$lname=$_POST["lname"];


echo  "Hello "  . $fname ." ".  $lname . " you are welcome to my site";

include 'footer.php';
?>