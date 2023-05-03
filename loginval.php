<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	
	// Database connection
	$conn = mysqli_connect('localhost','root','','delivery');
	if(mysqli_connect_errno()){
		echo "failed to connect: ".mysqli_connect_error();
		exit();
	} else {

		$sql = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			if($row['username']===$username && $row['password']===$password){
			echo '<script>alert("successful")</script>';
			header("Location: http://localhost/Delivery/homepage.php");}else{ echo '<script>alert("Error in username or password")</script>';
			}}
	mysqli_close($conn);
	}


?>