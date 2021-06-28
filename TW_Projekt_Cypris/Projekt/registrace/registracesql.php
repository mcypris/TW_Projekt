<?php
$login = $_POST["user"];
$heslo = $_POST["paswd"];

$heslo1 = md5($heslo);

$db = new PDO("mysql:host=localhost;dbname=projekt", "root", "root");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dotazText = "INSERT INTO reg(login, heslo)
                VALUES ('$login', '$heslo1')";
 try {
  $db->query($dotazText);
} catch (PDOException $e) {
  echo $e->getMessage();
}              
 
header("Location: ../index.php");

session_destroy();	
?>

