<?php
session_start();
$name = $_POST['Name'];
$email = $_POST['Email'];
$telephone = $_POST['Telephone'];
$message = $_POST['message'];
//DB connection
$conn = new mysqli('localhost','root','','project');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{

	$sql = "INSERT INTO mailus(email,name,tel,message) VALUES ('$email','$name',$telephone,'$message')";
	
if ($conn->query($sql) === TRUE) {
 echo '<script>alert("Your feedback has been recorded!!"); window.location="mail.php";</script>';
} else {
  echo '<script> window.location="mail.php";</script>';
}
	
	$conn->close();
}
?>