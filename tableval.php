<?php
	$date = $_POST['date'];
	$slot = $_POST['slot'];

	
	// Database connection
	$conn = mysqli_connect('localhost','root','','delivery');
	if(mysqli_connect_errno()){
		echo "failed to connect: ".mysqli_connect_error();
		exit();
	} else {

		$sql = "INSERT INTO tablebook(date, slot)
			 values('$date','$slot')";

		if (mysqli_query($conn, $sql)){
			echo '<script>alert("successful")</script>';
			header("Location: http://localhost/Delivery/login.php");
		}else{
			echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
	mysqli_close($conn);
	}


?>