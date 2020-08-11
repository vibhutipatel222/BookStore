<?php
session_start();
//echo '<script>alert("Yooo !!"); window.location="checkout.html";</script>';
//DB connection
$conn = new mysqli('localhost','root','','project');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
	$email=$_SESSION['loginuser'];
	$data = $_GET["data"];

		$sql = "INSERT INTO cart(user_id,type, product_id,quantity) VALUES ('$email','book','$data',1)";
	
if ($conn->query($sql) === TRUE) {
	 echo '<script>alert(" Succesful 😀!!"); window.location="checkout.php";</script>';
} else {
  echo '<script>alert("NOT successful ☹"); window.location="index2.php"; </script>';
}
	$conn->close();
}
?>