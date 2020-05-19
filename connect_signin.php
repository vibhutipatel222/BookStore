<?php
$email = $_POST['Email'];
$password = $_POST['Password'];
//DB connection
$conn = new mysqli('localhost','root','','webcheck');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
	$stmt = $conn->prepare("Insert into signin(email, password) values(?,?)");
	$stmt->bind_param("ss", $email, $password);
	$stmt->execute();
	echo "Registration Succesful!!";
	$stmt->close();
	$conn->close();
}
?>