<?php
$email2 = $_POST['Email'];
$conn = new mysqli('localhost','root','','webcheck');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
	$stmt = $conn->prepare("Insert into newsletter(email2) values(?)");
	$stmt->bind_param("s", $email2);
	$stmt->execute();
	echo '<script>alert("Email Registration Succesful!!"); window.location="mail.php";</script>';
	$stmt->close();
	$conn->close();
	// header("Location:mail.html");
	// exit();
}
?>