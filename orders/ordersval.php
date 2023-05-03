<?php
	$name = $_POST['name'];
	$itemname = $_POST['itemname'];
	$address = $_POST['address'];
	$quantity = $_POST['quantity'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];



	
	// Database connection
	$conn = mysqli_connect('localhost','root','','delivery');
	if(mysqli_connect_errno()){
		echo "failed to connect: ".mysqli_connect_error();
		exit();
	} else {

		$sql = "INSERT INTO orders(username, itemname, address, quantity, email, phone)
			 values('$name', '$itemname', '$address', '$quantity', '$email','$phone')";

		if (mysqli_query($conn, $sql)){
			echo '<script>alert("you will receive your order within 1 hour")</script>';
		}else{
			echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
	mysqli_close($conn);
	}



?>