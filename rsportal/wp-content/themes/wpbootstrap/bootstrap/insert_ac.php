
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 

$tbl_name1="test_table"; // Table name 
$tbl_name2="members";
$tbl_name3="registerpage";


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$username=$_POST['username'];
$email=$_POST['email'];
$passwrd=$_POST['password'];

$password= md5($passwrd);

// Insert data into mysql 

$sql2="INSERT INTO $tbl_name2(email, password)VALUES('$email', '$password')";
$result2=mysql_query($sql2);

$sql="INSERT INTO $tbl_name3(firstname, lastname, username, email, password)VALUES('$firstname', '$lastname', '$username', '$email', '$password')";
$result0=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result0==1){
echo "Successful";
echo "<BR>";
echo "<a href='register.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>
