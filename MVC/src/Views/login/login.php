<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="shortcut icon" type="image/png" href="https://image.noelshack.com/fichiers/2020/25/1/1592208328-logo.png"/>
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
	<div class="container">
		<h1>Bienvenue</h1>
		
		<form class="form" method="POST" action="/login">
			<input type="text" placeholder="Pseudo" value="<?= $_SESSION["old"]["pseudo"] ?? "";?>" name="pseudo">

			<span  class="red"><?php echo isset($_SESSION["errors"]["pseudo"]) ? $_SESSION["errors"]["pseudo"] : "";?></span>

			<input type="password" placeholder="Password" value="<?php echo isset($_SESSION["old"]["password"]) ? $_SESSION["old"]["password"] : "";?>" name="password">

			<span  class="red"><?php echo isset($_SESSION["errors"]["password"]) ? $_SESSION["errors"]["password"] : "";?></span>

			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
<?php 
unset($_SESSION["errors"]);
unset($_SESSION["old"]);