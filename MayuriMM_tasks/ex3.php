<?php 
$title ="Exercise03-Variable, Strings & Operators"; 
include 'header.php'; ?>

<h3>3.2.Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.”</h3>
<form method="post" action="process.php">
    Firstname:<input type="text" name="fname" required><br><br>
    Lastname:<input type="text" name="lname" required><br><br>
    <input type="submit" value="submit">
</form>



<?php include 'footer.php'?>