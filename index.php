<?php

 ?>

<html>
  <head>
    <title>inlog page</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="text" title="username" placeholder="username" required><br>
      <input type="password" title="wachtwoord" placeholder="wachtwoord" required><br>
      <button type="submit" class="btn"> verzenden </button>
      <a class="sign up" href="signup.php"> registreer </a><br>
      <a class="wachtwoord vergeten" href="lostpsw.php"> wachtwoord vergeten </a>
    </form>
  </body>
</html>
