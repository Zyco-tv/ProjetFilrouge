<?php var_dump('jyj'); die;?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
	<div class="container">
		<h1>Bienvenue</h1>
		
    <form class="form" method="POST" action="/register">
      <input name="pseudo" type="text" placeholder="Pseudo" value="<?php echo isset($_SESSION["old"]["pseudo"]) ? $_SESSION["old"]["pseudo"] : ""; ?>">
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["pseudo"]) ? $_SESSION["errors"]["pseudo"] : "";?></span>
      <input name="mail" type="text" placeholder="Mail" value="<?php echo isset($_SESSION["old"]["mail"]) ? $_SESSION["old"]["mail"] : "";?>">
      <span class="text-red-500"><?php echo isset($_SESSION["errors"]["mail"]) ? $_SESSION["errors"]["mail"] : "";?></span>
      <input name="password" type="password" placeholder="Password" value="<?php echo isset($_SESSION["old"]["password"]) ? $_SESSION["old"]["password"] : "";?>">
      <span class="red"><?php echo isset($_SESSION["errors"]["password"]) ? $_SESSION["errors"]["password"] : ""?></span>
      <input name="confirm" type="password" placeholder="confirm password" value="<?php echo isset($_SESSION["old"]["confirm"]) ? $_SESSION["old"]["confirm"] : "";?>">
      <span class="red"><?php echo isset($_SESSION["errors"]["confirm"]) ? $_SESSION["errors"]["confirm"] : "" ?></span>
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