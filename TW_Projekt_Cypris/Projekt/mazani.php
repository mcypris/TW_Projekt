<?php
$db = new PDO("mysql:host=localhost;dbname=projekt", "root", "root");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_POST["a1"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s1'";
$db->query($dotazText);
}

if($_POST["a2"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s2'";
$db->query($dotazText);
}

if($_POST["a3"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s3'";
$db->query($dotazText);
}

if($_POST["a4"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s4'";
$db->query($dotazText);
}

if($_POST["a5"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s5'";
$db->query($dotazText);
}

if($_POST["a6"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s6'";
$db->query($dotazText);
}

if($_POST["a7"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s7'";
$db->query($dotazText);
}

if($_POST["a8"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s8'";
$db->query($dotazText);
}

if($_POST["a9"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s9'";
$db->query($dotazText);
}

if($_POST["a10"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s10'";
$db->query($dotazText);
}

if($_POST["a11"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s11'";
$db->query($dotazText);
}

if($_POST["a12"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s12'";
$db->query($dotazText);
}

if($_POST["a13"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s13'";
$db->query($dotazText);
}

if($_POST["a14"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s14'";
$db->query($dotazText);
}

if($_POST["a15"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s15'";
$db->query($dotazText);
}

if($_POST["a16"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s16'";
$db->query($dotazText);
}

if($_POST["a17"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s17'";
$db->query($dotazText);
}

if($_POST["a18"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s18'";
$db->query($dotazText);
}

if($_POST["a19"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s19'";
$db->query($dotazText);
}

if($_POST["a20"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s20'";
$db->query($dotazText);
}

if($_POST["a21"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s21'";
$db->query($dotazText);
}

if($_POST["a22"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s22'";
$db->query($dotazText);
}

if($_POST["a23"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s23'";
$db->query($dotazText);
}

if($_POST["a24"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s24'";
$db->query($dotazText);
}

if($_POST["a25"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s25'";
$db->query($dotazText);
}

if($_POST["a26"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s26'";
$db->query($dotazText);
}

if($_POST["a27"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s27'";
$db->query($dotazText);
}

if($_POST["a28"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s28'";
$db->query($dotazText);
}

if($_POST["a29"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s29'";
$db->query($dotazText);
}

if($_POST["a30"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s30'";
$db->query($dotazText);
}

if($_POST["a31"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s31'";
$db->query($dotazText);
}

if($_POST["a32"]==1)
{
$dotazText = "DELETE FROM rezervace WHERE sedadlo='s32'";
$db->query($dotazText);
}

header("Location: index.php");
//$db = closeCursor();
?>


