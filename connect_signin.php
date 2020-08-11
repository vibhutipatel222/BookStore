<?php
session_start();
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
	
	$sql = "SELECT email FROM users where email='$email' and password='$password'";
$result = $conn->query($sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         /*session_register("myusername");*/
         $_SESSION['loginuser'] = $email;
         echo '<script>alert("Sign In Succesful!!"); window.location="index2.php";</script>';
          
      }else {
      	echo '<script>alert("Your credentials are Incorrect !!"); window.location="index.php";</script>';
      }
	
	$conn->close();
}
?>