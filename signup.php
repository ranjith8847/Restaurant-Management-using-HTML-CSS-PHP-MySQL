<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

if($password!==$password2){
	echo "password and retyped password doesn't match... Go back and try again";
}else{

	
	// Database connection
	$conn = mysqli_connect('localhost','root','','delivery');
	if(mysqli_connect_errno()){
		echo "failed to connect: ".mysqli_connect_error();
		exit();
	} else {

		$sql = "INSERT INTO signup(username, email, password, password2)
			 values('$username','$email','$password','$password2')";

		if (mysqli_query($conn, $sql)){
			echo '<script>alert("successful")</script>';
			header("Location: http://localhost/Delivery/login.php");
		}else{
			echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
	mysqli_close($conn);
	}
}


?>