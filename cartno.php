<?php 
						$conn = new mysqli('localhost','root','','project');
						if($conn->connect_error)
							{
								echo 'Failed to connect';
							}
						else
							{
								$email=$_SESSION['loginuser'];
								//$sql="SELECT * from cart";
								$sql= "SELECT book_title,price FROM cart,books WHERE product_id=book_id AND user_id='$email'";
								$result = $conn->query($sql);
								$count=0;
								if ($result->num_rows > 0) {
								  // output data of each row
								  while($row = $result->fetch_assoc()) {
								    $count++;
								  }
								  echo "$count";

								} else {
								  echo "0";
								}

								$conn->close();
							}
					?>