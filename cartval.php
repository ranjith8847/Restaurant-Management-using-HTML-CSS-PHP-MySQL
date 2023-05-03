<?php
	$username = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];	


	$item1 = "Biryani";
	$quantity1 = $_POST['itone'];
	$flavour1 = $_POST['itonesel'];

	$item2 = "Pizza";
	$quantity2 = $_POST['ittwo'];
	$flavour2 = $_POST['ittwosel'];

	$item3 = "Veg Salad";
	$quantity3 = $_POST['itthree'];
	$flavour3 = $_POST['itthreesel'];

	$item4 = "Mushroom Rice";
	$quantity4 = $_POST['itfour'];
	$flavour4 = $_POST['itfoursel'];



	
	// Database connection
	$conn = mysqli_connect('localhost','root','','delivery');
	if(mysqli_connect_errno()){
		echo "failed to connect: ".mysqli_connect_error();
		exit();
	} else {

		if($quantity1>0){
			$sql1 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour)
			values('$username', '$item1', '$address', '$quantity1', '$email','$phone', '$flavour1')";
			mysqli_query($conn, $sql1);
		}

		if($quantity2>0){
			$sql2 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour)
			 values('$username', '$item2', '$address', '$quantity2', '$email','$phone', '$flavour2')";
			mysqli_query($conn, $sql2);
		}
		
		if($quantity3>0){
			$sql3 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour)
			values('$username', '$item3', '$address', '$quantity3', '$email','$phone', '$flavour3')";
			mysqli_query($conn, $sql3);
		}

		if($quantity4>0){
			$sql4 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour)
			 values('$username', '$item4', '$address', '$quantity4', '$email','$phone', '$flavour4')";
			mysqli_query($conn, $sql4);
		}

		
$otp=rand(100000,999999);
	
	
		$sqlo = "SELECT * FROM otpss WHERE email='$email'";
		$reso=mysqli_query($conn,$sqlo);
		if(mysqli_num_rows($reso)>0){
			$sql30="DELETE FROM otpss WHERE email='$email'";
			mysqli_query($conn,$sql30);
		}
		$sqlp = "INSERT INTO otpss(otp,dandt,email) values('$otp', DATE_ADD(NOW(), INTERVAL 10 MINUTE),'$email')";
		mysqli_query($conn,$sqlp);
		
		$msg = "Your otp is". $otp ."/nonly valid upto 10 minutes";

		$msg = wordwrap($msg,70);
		$sub="OTP validation";

		//mail($emailent,$sub,$msg);
		mysqli_close($conn);
		header("Location: http://localhost/Delivery/otpform.php");
	















 //echo '<script>alert("your order has been placed successfully")</script>';
echo "<a href='http://localhost/Delivery/homepage.php'>go back to home page</a>" ; }
?>