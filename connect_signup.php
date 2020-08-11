<?php
session_start();
$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$hash = password_hash($password, PASSWORD_DEFAULT);
//DB connection
$conn = new mysqli('localhost','root','','project');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
		$sql = "INSERT INTO users(email, password, name) VALUES ('$email','$password','$name')";
	
if ($conn->query($sql) === TRUE) {
	$_SESSION['loginuser'] = $email;
 echo '<script>alert("Sign Up Succesful !!"); window.location="index2.php";</script>';
} else {
  echo '<script>alert("Sign Up Failed"); window.location="index.php";</script>';
}
	
	
	$conn->close();
}
?>