<?php include 'checkhost.php'; ?>


<?php

ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="registerpage"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
if(isset($_POST["myusername"])){$myusername=$_POST["myusername"];}; 
if(isset($_POST["mypassword"])){$mypasswrd=$_POST["mypassword"];} ;

$mypassword = md5($mypasswrd);


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){


// Register $myusername, $mypassword and redirect to file "login_success.php"
/*
session_register("myusername");
session_register("mypassword"); 
*/

$_SESSION['username'] = $myusername;

header("location:login_success.php");

echo "Success";
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>