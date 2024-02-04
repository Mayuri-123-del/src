<?php
// what to do with the data of the form
$title = "Your Information";

include 'header.php'; ?>
<?php

$first_name =$_POST["f_name"];
$last_name=$_POST["l_name"];

echo  "Hello "  . $first_name  .  $last_name . " you are welcome to my site";

?>
<?php include 'footer.php';
?>
