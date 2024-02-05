<?php
// What to do with the data
if (isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
}
// come to the database server
include'db.php';

// write sql statement to insert data
$sql="insert into studentsinfo('first_name','last_name','city','groupId')values($fname,$lname,$city,$groupid)";

if ($conn_>query($sql)===TRUE)
{
echo "Your data was recorded";
}
else
{
echo "Error":.$sql."<br>".$conn_>error;
}
//close the data base connection
$conn_>close();
