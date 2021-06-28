<?php
  $login="admin"; //uživatelské jméno
  $pass="12345"; //heslo
 
  //a pokud odpovídají přihlašovací údaje
  if(($_POST['user']==$login)&&($_POST['passwd']==$pass))
  {
  session_start();
  //zaregistruje proměnou user_is_logged a nastaví ji na 1
  $_SESSION["user_is_logged"] = 1;
  //a pošlena úvodní soubor chráněné sekce
  header("Location: registrace.php");
  }
  else  header("Location: pristup.php");  
?>
