<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$telephone = $_POST['Telephone'];
$message = $_POST['message'];
//DB connection
$conn = new mysqli('localhost','root','','webcheck');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
	$stmt = $conn->prepare("Insert into web1(name, email, telephone, message) values(?,?,?,?)");
	$stmt->bind_param("ssis", $name, $email, $telephone, $message);
	$stmt->execute();
	echo "Registration Succesful!!";
	$stmt->close();
	$conn->close();
}
?>