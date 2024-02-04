<?php 
$title ="Exercise03-Variable, Strings & Operators"; 
include 'header.php'; ?>

<h3>3.2.Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.”</h3>
<form method="post" action="process.php">
    Firstname:<input type="text" name="fname" required><br><br>
    Lastname:<input type="text" name="lname" required><br><br>
    <input type="submit" value="submit">
</form>

<h3>3.3 Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your <head> tag.</h3>

<form method="post" action="process1.php">
  <div class="mb-3">
    <label for="Firstname" class="form-label">First name</label>
    <input type="text" name="f_name">
  </div>
  <div class="mb-3">
    <label for="Lastname" class="form-label">Last name</label>
    <input type="text" name="l_name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h3>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>5</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>4</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jill</td>
      <td>3</td>
      <td>3</td>
    </tr>
  </tbody>
</table>

<h3>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>
<?php
$str1 = "Hello"; 
$str2 = "World";
$output1 = $str1 ." ". $str2;
echo "The output is :" . $output1;
?>

<h3>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h3>

<?php
$n1 = 298;
$n2 = 234;
$n3 = 46;

echo $n1 ."<br>";
echo $n2 ."<br>";
echo $n3 ."<br>";

$sum = $n1 + $n2 + $n3;

echo "Sum is :" . $sum;

?>

<h3>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER</h3>

<?php
echo "Server is :". $_SERVER['SERVER_NAME'];
?>

<h3>3.8 File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time </h3>


<?php include 'footer.php'?>