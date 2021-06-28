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
<center>
<br>
<img src="../obr/05.jpg">
<h2 id="podnadpis">Přihlášení do admin sekce</h2>

<form action="login.php" method="post">
   <table class="form">
    <tr><td>Uživatel </td><td><input type="text" name="user"></td></tr>
    <tr><td>Heslo </td><td><input type="password" name="passwd"></td></tr>
    <tr><td colspan="2"><button class="button" type="submit">OK</button>
    <button class="button" type="reset">Storno</button></td></tr>
 </table>
</form>
<br>
</center>
  </div>
  </div>
</body>
</html>
