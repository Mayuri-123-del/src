<?php 
$title ="Exercise04"; 
include 'header.php'; ?>

<h3>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
 
<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    <div class="mb-3">
        <label for="Name">name :</label>
        <input type="text" class="form-control" id="Vote" name="name" placeholder="name" required>
    </div>
    <div class="mb-3">
        <label for="Age">Age :</label>
        <input type="number" class="form-control" id="vote" name="age" placeholder="age" required>
    </div>
    <div class = "mb-3">
    <input type="submit" value="Submit" name = "submit" class = "btn btn-primary">
    </div>    
</form>

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $name=$_POST["name"];
        $age=$_POST["age"];
        
        if ($age > 18)
        {
            echo "<B><h4>You are eligible for voting</h4></B>";
        }
        else
        {
            echo "<B><h4>You are not eligible for voting</h4></B>";
        }}
    ?>
        
    
<h3>4.3Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>

<?php
        $month = date("F");
        switch($month)
        { 
        case "August":
            echo "It's August, so you have still holidays.";
            break;
            default:
            echo "It isn't August, it is " . $month . " so you don't have any holidays";
}
?>

<h3>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        <div class="row">
        <div class="col">
            <label for="multiflicationchart">Type a number :</label>
            <input type="number" class="form-control" name = "Number" placeholder="Number1">
        </div>
        <div class="col">
            <label for="multiflicationcha">Type the number :</label>
            <input type="number" class="form-control" name = "Number_1" placeholder="Number2">
        </div>
        </div>
            <div class = "mt-2">
            <input type="submit" value="Submit" name = "submit" class = "btn btn-primary">
        </div>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['numbercheck']))
    {
        $Number1 = $_POST["Number1"];
        $Number2 = $_POST["Number_1"];
                    
        for($i = 1; $Number1 < $Number2; $i++)
        {
    
            $answer = $Number1 * $Number2;
            echo $Number1 . " * " . $Number2 . " = " . $answer;
         }
    }
}
  ?>
  <h3>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>

  <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    <div class="mb-3">
        <label for="Name">Number 1:</label>
        <input type="text" class="form-control" id="Vote" name="num1" placeholder="Number1" required>
    </div>
    <div class="mb-3">
        <label for="Age">Age :</label>
        <input type="number" class="form-control" id="vote" name="age" placeholder="age" required>
    </div>
    <div class = "mb-3">
    <input type="submit" value="Submit" name = "submit" class = "btn btn-primary">
    </div>    
</form>

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $name=$_POST["name"];
        $age=$_POST["age"];
        
        if ($age > 18)
        {
            echo "<B><h4>You are eligible for voting</h4></B>";
        }
        else
        {
            echo "<B><h4>You are not eligible for voting</h4></B>";
        }}
    ?>




  <h3>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>

  <?php
        $myarray = array("HTML", "CSS", "PHP", "JavaScript");

        foreach($myarray as $value)
        {
            echo $value." ";
        }
    ?>


 


<?php include 'footer.php'?>