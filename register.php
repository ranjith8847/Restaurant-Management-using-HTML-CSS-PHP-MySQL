<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<style>body {
  background-image: url('gallery-img5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}</style>
		<div class="main">
			<div class="logo">
			</div>
			
			<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form name="signup" action="signup.php" method="post">
    <input type="text" name="username" id="username" placeholder="Username" />
    <input type="text" name="email" id="email" placeholder="E-mail" />
    <input type="password" name="password" id="password" placeholder="Password" />
    <input type="password" name="password2" id="password2" placeholder="Retype password" />
    
    <input type="submit" name="submit" value="Sign Up"/>
    </form>
</div>  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span><br/><br/>
    <button class="social-signin twitter" onclick="location.href = 'http://localhost/Delivery/login.php';">LOG IN</button>
  </div>
  <div class="or">OR</div>
</div>
	</header>
		
</body>
</html>
