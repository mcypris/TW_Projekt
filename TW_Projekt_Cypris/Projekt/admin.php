<?php
 session_start();
 
 if ($_SESSION["jmeno"]){$vypsat_uzivatele = $_SESSION["jmeno"];
  }
else {
header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style02.css">

  
  <title>Zaměstnanci</title>
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
<table cellpadding = "2" class="adm">
<tr>
<th class="bunka">Sedadlo</th>
<th class="bunka">Obsazenost</th>
</tr>
<?php


$link = mysqli_connect("localhost", "root", "root");
mysqli_select_db( $link,"projekt");


echo "<br>"."<center>"."<h2>"."Stav obsazenosti sedadel"."</h2>"."</center>";

for($b=1; $b<=32; $b++)
{     
  $result = mysqli_query($link,"SELECT * FROM rezervace WHERE sedadlo='s$b'");
  $exist = mysqli_num_rows($result);
		
	echo "<tr>";
	echo "<td class=\"sed\">".$b."</td>";
  echo "<td class=\"obs\">".$exist."</td>";
  echo "</tr>";
	}
        
                
?>
</table>

<table cellpadding = "2" class="sez">
<tr>
<th class="bunka">Sedadlo</th>
<th class="bunka">Jméno</th>
<th class="bunka">Příjmení</th>
<th class="bunka">Email</th>
</tr>
<?php
$db = new PDO("mysql:host=localhost;dbname=projekt", "root", "root");
  $dotazText = "SELECT * FROM rezervace";
  $dotaz = $db->prepare($dotazText); // příprava dotazu k odeslání do databáze
  $dotaz->execute();   // odesíláme dotaz na server MySQL
  while ($radek = $dotaz->fetch()) {    // metoda fetch() vrací jeden záznam 
    echo "<tr>";
    echo "<td class=\"sed\">".$radek['sedadlo'] ."</td>";
    echo "<td class=\"obs\">".$radek['jmeno'] ."</td>";
    echo "<td class=\"obs\">".$radek['prijmeni'] ."</td>";
    echo "<td class=\"obs\">".$radek['email'] ."</td>";
    echo "</tr>";
  }
 $dotaz->closeCursor(); // uvolnění spojení mezi PHP a MySQL
?>

</table>

<h2 class="nadm">Odstranění rezervace</h2>
<form action="mazani.php" method="POST">
<table class="maz">
<tr><td>Sedadlo č.1<input type=checkbox name="a1" value="1"></td>
<td></td>
<td>Sedadlo č.2<input type=checkbox name="a2" value="1"></td></tr>
<tr><td>Sedadlo č.3<input type=checkbox name="a3" value="1"></td>
<td></td>
<td>Sedadlo č.4<input type=checkbox name="a4" value="1"></td></tr>
<tr><td>Sedadlo č.5<input type=checkbox name="a5" value="1"></td>
<td></td>
<td>Sedadlo č.6<input type=checkbox name="a6" value="1"></td></tr>
<tr><td>Sedadlo č.7<input type=checkbox name="a7" value="1"></td>
<td></td>
<td>Sedadlo č.8<input type=checkbox name="a8" value="1"></td></tr>
<tr><td>Sedadlo č.9<input type=checkbox name="a9" value="1"></td>
<td></td>
<td>Sedadlo č.10<input type=checkbox name="a10" value="1"></td></tr>
<tr><td>Sedadlo č.11<input type=checkbox name="a11" value="1"></td>
<td></td>
<td>Sedadlo č.12<input type=checkbox name="a12" value="1"></td></tr>
<tr><td>Sedadlo č.13<input type=checkbox name="a13" value="1"></td>
<td></td>
<td>Sedadlo č.14<input type=checkbox name="a14" value="1"></td></tr>
<tr><td>Sedadlo č.15<input type=checkbox name="a15" value="1"></td>
<td></td>
<td>Sedadlo č.16<input type=checkbox name="a16" value="1"></td></tr>
<tr><td>Sedadlo č.17<input type=checkbox name="a17" value="1"></td>
<td></td>
<td>Sedadlo č.18<input type=checkbox name="a18" value="1"></td></tr>
<tr><td>Sedadlo č.19<input type=checkbox name="a19" value="1"></td>
<td></td>
<td>Sedadlo č.20<input type=checkbox name="a20" value="1"></td></tr>
<tr><td>Sedadlo č.21<input type=checkbox name="a21" value="1"></td>
<td></td>
<td>Sedadlo č.22<input type=checkbox name="a22" value="1"></td></tr>
<tr><td>Sedadlo č.23<input type=checkbox name="a23" value="1"></td>
<td></td>
<td>Sedadlo č.24<input type=checkbox name="a24" value="1"></td></tr>
<tr><td>Sedadlo č.25<input type=checkbox name="a25" value="1"></td>
<td></td>
<td>Sedadlo č.26<input type=checkbox name="a26" value="1"></td></tr>
<tr><td>Sedadlo č.27<input type=checkbox name="a27" value="1"></td>
<td></td>
<td>Sedadlo č.28<input type=checkbox name="a28" value="1"></td></tr>
<tr><td>Sedadlo č.29<input type=checkbox name="a29" value="1"></td>
<td></td>
<td>Sedadlo č.30<input type=checkbox name="a30" value="1"></td></tr>
<tr><td>Sedadlo č.31<input type=checkbox name="a31" value="1"></td>
<td></td>
<td>Sedadlo č.32<input type=checkbox name="a32" value="1"></td></tr>
<tr><td>&nbsp;</td><td><button class="button" type="submit">Mazat</button></td></tr>
</table>
<br>
<?php session_destroy();
?> 
</div>
</div>
</center>
</body>

</html>
