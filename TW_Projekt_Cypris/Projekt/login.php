<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style01.css">
  
<?php
$uzivatel = $_POST["user"];
$hes = $_POST["passwd"];

$db = new PDO("mysql:host=localhost;dbname=projekt", "root", "root");
$dotazText = "SELECT * FROM reg where login = '$uzivatel'";
$dotaz = $db->prepare($dotazText); // příprava dotazu k odeslání do databáze
$dotaz->execute();   // odesíláme dotaz na server MySQL
while ($radek = $dotaz->fetch())
 {    // metoda fetch() vrací jeden záznam   
 $heslo = $radek["heslo"]; 
 
  }
 $dotaz->closeCursor();

$pass = $heslo;
$hes1 = $hes;
$heslo2 = md5($hes1);

 //Pokud byl odeslán formulář
 if ($_GET['action']=='validate'){
  //a pokud odpovídají přihlašovací údaje
   if(($heslo2==$pass))
{
     session_start();
     $_SESSION["jmeno"] = $uzivatel; 
     //a pošlena úvodní soubor chráněné sekce
     header("Location: admin.php");
     exit;
   }
 }


?>

</head>
<body>
  <div id="hlavicka">
    <h1 id="nadpis">Rezervace místenek ve vlaku<img id="logo" src="obr/01.png"></h1>
  </div>
<center>
  <div id='cssmenu'>
<ul>
   <li class='active'><a href="index.php"><span>Domů</span></a></li>
   <li><a href="rezervace.php"><span>Rezervace lístků</span></a></li>
   <li><a href="admin.php"><span>Zaměstnanci</span></a></li>
   <li class='last'><a href="registrace/registrace.php"><span>Správce</span></a></li>
</ul>
<br>
<br>
  <div id='text'>
<br>
<img src="obr/04.jpg">
<h2 id="podnadpis">Přístup na zabezpečenou stránku</h2>
<form action="./login.php?action=validate" method="post">
   <table class="form">
    <tr><td>Uživatel </td><td><input type="text" name="user" /></td></tr>
    <tr><td>Heslo </td><td><input type="password" name="passwd" /></td></tr>
    <tr><td colspan="2"><button class="button" type="submit">OK</button>
     <button class="button" type="reset">Storno</button></td></tr>
<?php 

 $dotaz->closeCursor(); // uvolnění spojení mezi PHP a MySQL
?>
 </table>
</form>
<br>
</center>
</div>
</div>
</body>
</html>
