<?php

// Grab User submitted information
$email = $_POST["email"];
$password = $_POST["password"];

// Connect to the database
$con = mysql_connect("localhost","root","root");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("sep_db",$con);

$result = mysql_query("SELECT email, password FROM member WHERE email = $email");

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["password"]==$password){
   // header ("Location: dashboad.php");
    
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>