<html>
<head>
<title>LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<style>body {
  background-image: url('gallery-img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}</style>
	<header>
		<div class="main">
			<div class="logo">
			<div id="login-box">
  <div class="left">
    <h1>Login page</h1>
<form action="loginval.php" method="post">
	<input type="text" name="username" placeholder="Enter username" />
    <input type="password" name="password" placeholder="Password" />
    <input type="submit" name="submit" value="Login " />
</form>
  </div>
  
  <div class="right">
    <span class="loginwith"></span><br/><br/><br/><br/><br/>
    <button class="social-login google" onclick="location.href = 'http://localhost/Delivery/register.php';">SIGN UP</button>
  </div>
  <div class="or"><a>OR</a></div>
</div>
	
</header>		
</body>
</html>