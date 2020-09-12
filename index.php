<html>
<head>
  <body>
<form action="index.php" method="get">
  <input type="text" voornaam="voornaam"><br>
   <input type="text" tussenvoegsel="tussenvoegsel"><br>
   <input type="text" achternaam="achternaam"><br>
  <input type="text" E-mail="E-mail"><br>
   <input type="text" gebruikersnaam="gebruikersnaam"><br>
   <input type="text" wachtwoord="wachtwoord"><br>
    <input type="text" herhaal wachtwoord="herhaal wachtwoord"><br>
<input type="Submit"><br>
</form>
<br>
<?php
echo $_GET["voornaam"]
?>
</body>
</head>
</html>
