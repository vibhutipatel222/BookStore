<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$hash = password_hash($password, PASSWORD_DEFAULT);
//DB connection
$conn = new mysqli('localhost','root','','webcheck');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
	$stmt = $conn->prepare("Insert into signup(name, email, password) values(?,?,?)");
	$stmt->bind_param("sss", $name, $email, $hash);
	$stmt->execute();
	echo '<script>alert("Sign Up Succesful!!"); window.location="index2.php";</script>';
	$stmt->close();
	$conn->close();
}
?>