<?php
session_start();
$email = $_POST['Email'];
//DB connection
$conn = new mysqli('localhost','root','','project');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
	$sql = "INSERT INTO newsletter(email) VALUES ('$email')";
	
if ($conn->query($sql) === TRUE) {
 echo '<script>alert("Signed up for newsletter!!"); window.location="index2.php";</script>';
} else {
  echo '<script>alert("You have already signed up for newsletter!!");window.location="index2.php";</script>';
}
	
	$conn->close();
}
?>