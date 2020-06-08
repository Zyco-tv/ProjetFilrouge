<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Eole</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>

  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Tu a pas de compte ?</p>
          <p>Tu peut t'inscrire.</p>
          <button id="switch1">Inscription</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Tu a deja un compte?</p>
          <p>Alors tu peut te connecter.</p>
          <button id="switch2">Connection</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <h2>Connection</h2>
        <div class="inputbox">
          <input type="text" name="email" placeholder="email">
          <input type="password" name="password" placeholder="mot de passe">
        </div>
        <p>Mot de passe oublie?</p>
        <button>Connection</button>
      </div>

      <div class="signup hide">
        <h2>Inscription</h2>
        <div class="inputbox">
          <input type="text" name="fullname" placeholder="pseudo">
          <input type="text" name="email" placeholder="email">
          <input type="password" name="password" placeholder="mot de passe">
        </div>
        <button>Inscription</button>
      </div>

    </div>
    <!-- frontbox -->
  </div>
</body>

</html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
