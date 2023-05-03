<?php
session_start();
?>
<?php
	$date = $_POST['date'];
	$slot = $_POST['slot'];
	$mobile = $_POST['mobile'];
	$username = $_POST['username'];
	$email=$_POST['email'];
	$people=$_POST['person'];
	$hours=$_POST['hours'];
$_SESSION['date']=$date;
$_SESSION['slot']=$slot;
$_SESSION['mobile']=$mobile;
$_SESSION['username']=$username;
$_SESSION['email']=$email;
$_SESSION['people']=$people;
$_SESSION['hours']=$hours;



if($people>0 && $people<=2){
	$type="two seater table";
}
if($people>2 && $people<=4){
	$type="four seater table";
}
if($people>4 && $people<=10){
	$type="ten seater table";
}
if($people>10 && $people<=20){
	$type="twenty seater table";
}

$_SESSION['type']=$type;

	
	// Database connection
	$conn = mysqli_connect('localhost','root','','delivery');
	if(mysqli_connect_errno()){
		echo "failed to connect: ".mysqli_connect_error();
		exit();
	}
	$date1= date("Y-m-d");
	if($date>$date1){
		
	$sql= "SELECT * FROM tablebook WHERE date='$date' AND slot='$slot'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			if (empty($row['status'])) {
			$st = "UPDATE tablebook SET status='booked',username='$username', mobile='$mobile', people='$people', hours='$hours', email='$email', tabletype='$type' WHERE date='$date' AND slot='$slot'";
			mysqli_query($conn, $st);
			echo "table booked successfully...";
			



/*
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
*/


			/*header("Location: http://localhost/Delivery/homepage.php");*/}
else{
	echo "the slot is already booked";

	
}}}else{echo "date not valid...<br> table booking should be made one day prior";}
	
?>







