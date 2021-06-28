<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style01.css">
  
</head>
<body>

  <div id="hlavicka">
    <h1 id="nadpis">Rezervace místenek ve vlaku<img id="logo" src="../obr/01.png"></h1>
  </div>
  <div id='cssmenu'>
<ul>
   <li class='active'><a href="../index.php"><span>Domů</span></a></li>
   <li><a href="../rezervace.php"><span>Rezervace lístků</span></a></li>
   <li><a href="../admin.php"><span>Zaměstnanci</span></a></li>
   <li class='last'><a href="registrace.php"><span>Správce</span></a></li>
</ul>
<br>
<br>
  <div id='text'>
<?php
//nezapomeň nastartovat session!
 session_start();
 //Pokud není uživatel přihlášen, pošleme mu přihlašovací formulář
 if ($_SESSION["user_is_logged"] != 1){
  header("Location: pristup.php");
  exit();
  }
?>
<center>
<br>
<br>
<h2 id="podnadpis">Přidávání nových zaměstnanců</h2>
<br>
<form action="registracesql.php" method="POST">
<table class="form">
<tr><td>Uživatel</td><td><input type="text" name="user"></td></tr>
<tr><td>Heslo</td><td><input type="text" name="paswd"></td></tr>

<tr><td>&nbsp;</td><td><button class="button" type="submit">Zapiš</button></td></tr>
</table>
</form>
<br>
</center>
       <?php session_destroy();
?>
</div>
</div>
</body>
</html>
