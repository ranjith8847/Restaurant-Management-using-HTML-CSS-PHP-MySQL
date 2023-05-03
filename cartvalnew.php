<?php
session_start();
?>
<?php
	$username = $_POST['username'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];	


$c1=0;
$c2=0;
$c3=0;
$c4=0;
$c5=0;
$c6=0;
$c7=0;
$c8=0;
$c9=0;
$c10=0;
$c11=0;
$c12=0;
$c13=0;
$c14=0;
$c15=0;
$c16=0;
$c17=0;
$c18=0;


	//$username = "u";
	//$address = "a";
	//$email = "e";
	//$phone = "p";


	$item1 = "Crispy Onion Rings";
	$quantity1 = $_POST['itone'];
	$diet1 = $_POST['dietone'];
	$flavour1 = $_POST['flavourone'];

	$item2 = "Thai Spring Rolls";
	$quantity2 = $_POST['itemtwo'];
	$diet2 = $_POST['diettwo'];
	$flavour2 = $_POST['flavourtwo'];
	
	$item3 = "Ancho Chili Cheese Quesadilla";
	$quantity3 = $_POST['itemthree'];
	$diet3 = $_POST['dietthree'];
	$flavour3 = "none";

	$item4 = "Cream of Wild Mushroom";
	$quantity4 = $_POST['itemfour'];
	$diet4 = $_POST['dietfour'];
	$flavour4 = "none";

	$item5 = "Tasty Chicken Noodle Soup";
	$quantity5 = $_POST['itemfive'];
	$diet5 = $_POST['dietfive'];
	$flavour5 = $_POST['flavourfive'];

	$item6 = "Classic Caesar Salad";
	$quantity6 = $_POST['itemsix'];
	$diet6 = $_POST['dietsix'];
	$flavour6 = $_POST['flavoursix'];

	$item7 = "Cranberry Pecan Blue";
	$quantity7 = $_POST['itemseven'];
	$diet7 = $_POST['dietseven'];
	$flavour7 = "none";

	$item8 = "Spinach Salad";
	$quantity8 = $_POST['itemeight'];
	$diet8 = $_POST['dieteight'];
	$flavour8 = "none";

	$item9 = "Roasted Turkey Club";
	$quantity9 = $_POST['itemnine'];
	$diet9 = $_POST['dietnine'];
	$flavour9 = $_POST['flavournine'];

	$item10 = "Hot Italian Grinder";
	$quantity10 = $_POST['itemten'];
	$diet10 = $_POST['dietten'];
	$flavour10 = $_POST['flavourten'];

	$item11 = "Classic Chicken Burger";
	$quantity11 = $_POST['itemeleven'];
	$diet11 = $_POST['dieteleven'];
	$flavour11 = $_POST['flavoureleven'];

	$item12 = "Classic Cheese Burger";
	$quantity12 = $_POST['itemtwelve'];
	$diet12 = $_POST['diettwelve'];
	$flavour12 = "none";

	$item13 = "French Fries";
	$quantity13 = $_POST['itemthirteen'];
	$diet13 = $_POST['dietthirteen'];
	$flavour13 = "none";

	$item14 = "Corn on the Cobb";
	$quantity14 = $_POST['itemfourteen'];
	$diet14 = $_POST['dietfourteen'];
	$flavour14 = "none";

	$item15 = "Lemonade";
	$quantity15 = $_POST['itemfifteen'];
	$diet15 = $_POST['dietfifteen'];
	$flavour15 = "none";

	$item16 = "Ice Tea";
	$quantity16 = $_POST['itemsixteen'];
	$diet16 = $_POST['dietsixteen'];
	$flavour16 = "none";

	$item17 = "Ice Cream";
	$quantity17 = $_POST['itemseventeen'];
	$diet17 = $_POST['dietseventeen'];
	$flavour17 = $_POST['flavourseventeen'];

	$item18 = "German Chocolate Cake";
	$quantity18 = $_POST['itemeighteen'];
	$diet18 = $_POST['dieteighteen'];
	$flavour18 = $_POST['flavoureighteen'];


	
	// Database connection
	$conn = mysqli_connect('localhost','root','','delivery');
	if(mysqli_connect_errno()){
		echo "failed to connect: ".mysqli_connect_error();
		exit();
	} else {

		if($quantity1>0){
	
			if($diet1== "Diabetic 1800 ADA"){
			$c1= ($quantity1)*(60);}
			if($diet1== "Regular"){
			$c1 = ($quantity1)*(40);}
			if($diet1== "Low Residue / Modified Fiber"){
			$c1 = ($quantity1)*(60);}
			if($diet1== "Gastric"){
			$c1= ($quantity1)*(50);}


			$sql1 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item1', '$address', '$quantity1', '$email','$phone', '$flavour1', '$diet1', '$c1', 'NULL')";
			mysqli_query($conn, $sql1);

		}

		if($quantity2>0){
			if($diet2== "Diabetic 1800 ADA"){
			$c2= ($quantity2)*(90);}
			if($diet2== "Regular"){
			$c2 = ($quantity2)*(70);}
			if($diet2== "Gastric"){
			$c2= ($quantity2)*(70);}


			$sql2 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item2', '$address', '$quantity2', '$email','$phone', '$flavour2', '$diet2', '$c2', 'NULL')";
			mysqli_query($conn, $sql2);
		}
		
		if($quantity3>0){


			if($diet3== "Diabetic 1800 ADA"){
			$c3= ($quantity3)*(80);}
			if($diet3== "Regular"){
			$c3 = ($quantity3)*(60);}
			if($diet3== "Low Residue / Modified Fiber"){
			$c3 = ($quantity3)*(70);}
			if($diet3== "Gastric"){
			$c3= ($quantity3)*(65);}

			$sql3 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item3', '$address', '$quantity3', '$email','$phone', '$flavour3', '$diet3', '$c3', 'NULL')";
			mysqli_query($conn, $sql3);
		}

		if($quantity4>0){

			if($diet4== "Diabetic 1800 ADA"){
			$c4= ($quantity4)*(50);}
			if($diet4== "Regular"){
			$c4 = ($quantity4)*(40);}
			if($diet4== "Low Residue / Modified Fiber"){
			$c4 = ($quantity4)*(50);}
			if($diet4== "Gastric"){
			$c4= ($quantity4)*(50);}

			$sql4 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item4', '$address', '$quantity4', '$email','$phone', '$flavour4', '$diet3', '$c4', 'NULL')";
			mysqli_query($conn, $sql4);
		}

		if($quantity5>0){

			if($diet5== "Diabetic 1800 ADA"){
			$c5= ($quantity5)*(50);}
			if($diet5== "Regular"){
			$c5 = ($quantity5)*(40);}
			if($diet5== "Low Residue / Modified Fiber"){
			$c5 = ($quantity5)*(50);}
			if($diet5== "Gastric"){
			$c5= ($quantity5)*(50);}

			$sql5 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item5', '$address', '$quantity5', '$email','$phone', '$flavour5', '$diet5', '$c5', 'NULL')";
			mysqli_query($conn, $sql5);
		}

		if($quantity6>0){

			if($diet6== "Diabetic 1800 ADA"){
			$c6= ($quantity6)*(90);}
			if($diet6== "Regular"){
			$c6 = ($quantity6)*(70);}
			if($diet6== "Low Residue / Modified Fiber"){
			$c6 = ($quantity6)*(80);}
			if($diet6== "Gastric"){
			$c6= ($quantity6)*(75);}


			$sql6 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item6', '$address', '$quantity6', '$email','$phone', '$flavour6', '$diet6', '$c6', 'NULL')";
			mysqli_query($conn, $sql6);
		}
		
		if($quantity7>0){

			if($diet7== "Diabetic 1800 ADA"){
			$c7= ($quantity7)*(90);}
			if($diet7== "Regular"){
			$c7 = ($quantity7)*(80);}
			if($diet7== "Low Residue / Modified Fiber"){
			$c7 = ($quantity7)*(90);}
			if($diet7== "Gastric"){
			$c7= ($quantity)*(90);}


			$sql7 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item7', '$address', '$quantity7', '$email','$phone', '$flavour7', '$diet7', '$c7', 'NULL')";
			mysqli_query($conn, $sql7);
		}

		if($quantity8>0){

			if($diet8== "Diabetic 1800 ADA"){
			$c8= ($quantity8)*(110);}
			if($diet8== "Regular"){
			$c8 = ($quantity8)*(90);}
			if($diet8== "Low Residue / Modified Fiber"){
			$c8 = ($quantity8)*(100);}
			if($diet8== "Gastric"){
			$c8= ($quantity8)*(100);}


			$sql8 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item8', '$address', '$quantity8', '$email','$phone', '$flavour8', '$diet8', '$c8', 'NULL')";
			mysqli_query($conn, $sql8);
		}

		if($quantity9>0){

			if($diet9== "Diabetic 1800 ADA"){
			$c9= ($quantity9)*(100);}
			if($diet9== "Regular"){
			$c9 = ($quantity9)*(90);}
			if($diet9== "Low Residue / Modified Fiber"){
			$c9 = ($quantity9)*(110);}
			if($diet9== "Gastric"){
			$c9= ($quantity9)*(11);}



			$sql9 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item9', '$address', '$quantity9', '$email','$phone', '$flavour9', '$diet9','$c9', 'NULL')";
			mysqli_query($conn, $sql9);
		}

		if($quantity10>0){

			if($diet10== "Diabetic 1800 ADA"){
			$c10= ($quantity10)*(100);}
			if($diet10== "Regular"){
			$c10 = ($quantity10)*(90);}
			if($diet10== "Low Residue / Modified Fiber"){
			$c10 = ($quantity10)*(100);}
			if($diet10== "Gastric"){
			$c10= ($quantity10)*(100);}


			$sql10 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item10', '$address', '$quantity10', '$email','$phone', '$flavour10', '$diet10', '$c10', 'NULL')";
			mysqli_query($conn, $sql10);
		}
		
		if($quantity11>0){

			if($diet11== "Diabetic 1800 ADA"){
			$c11= ($quantity11)*(120);}
			if($diet11== "Regular"){
			$c11 = ($quantity11)*(90);}
			if($diet11== "Low Residue / Modified Fiber"){
			$c11 = ($quantity11)*(95);}
			if($diet11== "Gastric"){
			$c11= ($quantity11)*(95);}



			$sql11 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item11', '$address', '$quantity11', '$email','$phone', '$flavour11', '$diet11','$c11', 'NULL')";
			mysqli_query($conn, $sql11);
		}

		if($quantity12>0){

			if($diet12== "Diabetic 1800 ADA"){
			$c12= ($quantity12)*(95);}
			if($diet12== "Regular"){
			$c12 = ($quantity12)*(90);}
			if($diet12== "Low Residue / Modified Fiber"){
			$c12 = ($quantity12)*(95);}
			if($diet12== "Gastric"){
			$c12= ($quantity12)*(95);}



			$sql12 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item12', '$address', '$quantity12', '$email','$phone', '$flavour12', '$diet12','$c12', 'NULL')";
			mysqli_query($conn, $sql12);
		}

		if($quantity13>0){

			if($diet13== "Diabetic 1800 ADA"){
			$c13= ($quantity13)*(35);}
			if($diet13== "Regular"){
			$c13 = ($quantity13)*(30);}
			if($diet13== "Low Residue / Modified Fiber"){
			$c13 = ($quantity13)*(35);}
			if($diet13== "Gastric"){
			$c13= ($quantity13)*(35);}




			$sql13 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item13', '$address', '$quantity13', '$email','$phone', '$flavour13', '$diet13', '$c13', 'NULL')";
			mysqli_query($conn, $sql13);
		}

		if($quantity14>0){

			if($diet14== "Diabetic 1800 ADA"){
			$c14= ($quantity14)*(35);}
			if($diet14== "Regular"){
			$c14 = ($quantity14)*(30);}
			if($diet14== "Low Residue / Modified Fiber"){
			$c14 = ($quantity14)*(35);}
			if($diet14== "Gastric"){
			$c14= ($quantity14)*(35);}




			$sql14 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item14', '$address', '$quantity14', '$email','$phone', '$flavour14', '$diet14'.'$c14', 'NULL')";
			mysqli_query($conn, $sql14);
		}
		
		if($quantity15>0){

			if($diet15== "More Sugar"){
			$c15 = ($quantity15)*(50);}
			if($diet15== "Regular"){
			$c15 = ($quantity15)*(50);}
			if($diet15== "Sugar Substitutes"){
			$c15 = ($quantity15)*(55);}
			if($diet15== "Less Sugar"){
			$c15= ($quantity15)*(50);}
			if($diet15== "No Sugar"){
			$c15= ($quantity15)*(50);}



			$sql15 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item15', '$address', '$quantity15', '$email','$phone', '$flavour15', '$diet15','$c15', 'NULL')";
			mysqli_query($conn, $sql15);
		}

		if($quantity16>0){

			if($diet16== "No Sugar"){
			$c16= ($quantity16)*(80);}
			if($diet16== "Regular"){
			$c16 = ($quantity16)*(80);}
			if($diet16== "ADD Sugar Substitute"){
			$c16 = ($quantity16)*(90);}



			$sql16 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item16', '$address', '$quantity16', '$email','$phone', '$flavour16', '$diet16','$c16', 'NULL')";
			mysqli_query($conn, $sql16);
		}

		if($quantity17>0){


			if($diet17== "Diabetic 1800 ADA"){
			$c17= ($quantity17)*(50);}
			if($diet17== "Regular"){
			$c17 = ($quantity17)*(30);}
			



			$sql17 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			values('$username', '$item17', '$address', '$quantity17', '$email','$phone', '$flavour17', '$diet17','$c17', 'NULL')";
			mysqli_query($conn, $sql17);
		}

		if($quantity18>0){

			if($diet18== "Diabetic 1800 ADA"){
			$c18= ($quantity18)*(80);}
			if($diet18== "Regular"){
			$c18 = ($quantity18)*(50);}
			




			$sql18 = "INSERT INTO ordersnew(username, item, address, quantity, email, phone, flavour, diet, cost, orderid)
			 values('$username', '$item18', '$address', '$quantity18', '$email','$phone', '$flavour18', '$diet18','$c18', 'NULL')";
			mysqli_query($conn, $sql18);
		}

$total = $c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9+$c10+$c11+$c12+$c13+$c14+$c15+$c16+$c17+$c18;

//echo "$total";	

$_SESSION["username"]=$username;
$_SESSION["total"]=$total;
//header("Location: http://localhost/Delivery/otpform.php");



/*$otp=rand(100000,999999);
	
	
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
 //echo '<script>alert("your order has been placed successfully")</script>';
echo "<a href='http://localhost/Delivery/paytm/index.php'>confirm payment</a>" ;
 }
?>