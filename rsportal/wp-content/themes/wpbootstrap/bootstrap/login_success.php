<?php

// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 


session_start();
if(isset($_SESSION['username'])){
header("location:signin.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>


