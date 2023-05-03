<?php
session_start();
?>
<?php

$otptyped=$_POST['otptyped'];

$conn=mysqli_connect('localhost','root','','delivery');

$sqla="SELECT * FROM otpss WHERE otp='$otptyped' AND NOW()<=dandt";
$ress=mysqli_query($conn,$sqla);
if(mysqli_num_rows($ress)===1){
	echo "<script>alert('Table booked successfully')</script>";
	echo "<br><a href='http://localhost/Delivery/homepage.php'>go back to home page</a>";

$st = "UPDATE tablebook SET status='booked',username='".$_SESSION['username']."', mobile='".$_SESSION['mobile']."', people='".$_SESSION['people']."', hours='".$_SESSION['hours']."', email='".$_SESSION['email']."', tabletype='".$_SESSION['type']."' WHERE date='".$_SESSION['date']."' AND slot='".$_SESSION['slot']."'";
mysqli_query($conn, $st);


}else{
echo '<script>alert("otp doesnt match or expired")</script>';
}
mysqli_close($conn);

?>
