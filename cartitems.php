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

		$sql = "DELETE FROM cart WHERE user_id='$email' AND product_id='$data'";
	
if ($conn->query($sql) === TRUE) {
	 echo '<script>window.location="checkout.php";</script>';
} else {
  echo '<script>window.location="checkout.php"; </script>';
}
	$conn->close();
}
?>