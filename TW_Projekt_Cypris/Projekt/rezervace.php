<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style01.css">
  
    <title>Rezervace</title>
</head>
  <body>
  <div id="hlavicka">
    <h1 id="nadpis">Rezervace místenek ve vlaku<img id="logo" src="obr/01.png"></h1>
  </div>
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
<br>
<center>
<img src="obr/03.jpg">
<h2 id="podnadpis">Volná místa</h2>
</center>

<?php
$conn = new mysqli("localhost", "root", "root", "projekt");

if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

for($b=1; $b<=50; $b++){
         
    $result = mysqli_query($conn,"SELECT * FROM rezervace WHERE sedadlo='s$b'");
    $exist = mysqli_num_rows($result); 
	
    $a[$b]=$exist;
    if ($a[$b]=="1")
	{
        $d[$b]="disabled";
    }
	
    else 
    {
        $ch[$b]=" ";$d[$b]=" ";
    }
}
?>

<form action="zapis.php" method="POST">
<table class="form">
<tr><td>Jméno:</td><td><input type="text" name="jmeno"></td></tr>
<tr><td>Příjmení:</td><td><input type="text" name="prijmeni"></td></tr>
<tr><td>Email:</td><td><input type="email" name="email"></td></tr>
</table>
<br>
<table class="reg">
<tr><td><input type="checkbox" id="test1" name="s1" value="1" <?php print $d[1] ?>/>
    <label for="test1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</label></td>
<td></td>
<td><input type="checkbox" id="test2" name="s2" value="1" <?php print $d[2] ?>/>
    <label for="test2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2</label></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><input type="checkbox" id="test3" name="s3" value="1" <?php print $d[3] ?>/>
    <label for="test3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3</label></td>
<td></td>
<td><input type="checkbox" id="test4" name="s4" value="1" <?php print $d[4] ?>/>
    <label for="test4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr><td><input type="checkbox" id="test5" name="s5" value="1" <?php print $d[5] ?>/>
    <label for="test5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5</label></td>
<td></td>
<td><input type="checkbox" id="test6" name="s6" value="1" <?php print $d[6] ?>/>
    <label for="test6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6</label></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><input type="checkbox" id="test7" name="s7" value="1" <?php print $d[7] ?>/>
    <label for="test7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7</label></td>
<td></td>
<td><input type="checkbox" id="test8" name="s8" value="1" <?php print $d[8] ?>/>
    <label for="test8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr><td><input type="checkbox" id="test9" name="s9" value="1" <?php print $d[9] ?>/>
    <label for="test9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9</label></td>
<td></td>
<td><input type="checkbox" id="test10" name="s10" value="1" <?php print $d[10] ?>/>
    <label for="test10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10</label></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><input type="checkbox" id="test11" name="s11" value="1" <?php print $d[11] ?>/>
    <label for="test11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11</label></td>
<td></td>
<td><input type="checkbox" id="test12" name="s12" value="1" <?php print $d[12] ?>/>
    <label for="test12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr><td><input type="checkbox" id="test13" name="s13" value="1" <?php print $d[13] ?>/>
    <label for="test13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13</label></td>
<td></td>
<td><input type="checkbox" id="test14" name="s14" value="1" <?php print $d[14] ?>/>
    <label for="test14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14</label></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><input type="checkbox" id="test15" name="s15" value="1" <?php print $d[15] ?>/>
    <label for="test15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15</label></td>
<td></td>
<td><input type="checkbox" id="test16" name="s16" value="1" <?php print $d[16] ?>/>
    <label for="test16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr><td><input type="checkbox" id="test17" name="s17" value="1" <?php print $d[17] ?>/>
    <label for="test17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17</label></td>
<td></td>
<td><input type="checkbox" id="test18" name="s18" value="1" <?php print $d[18] ?>/>
    <label for="test18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18</label></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><input type="checkbox" id="test19" name="s19" value="1" <?php print $d[19] ?>/>
    <label for="test19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19</label></td>
<td></td>
<td><input type="checkbox" id="test20" name="s20" value="1" <?php print $d[20] ?>/>
    <label for="test20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr><td><input type="checkbox" id="test21" name="s21" value="1" <?php print $d[21] ?>/>
    <label for="test21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21</label></td>
<td></td>
<td><input type="checkbox" id="test22" name="s22" value="1" <?php print $d[22] ?>/>
    <label for="test22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22</label></td>
    
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><input type="checkbox" id="test23" name="s23" value="1" <?php print $d[23] ?>/>
    <label for="test23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23</label></td>
<td></td>
<td><input type="checkbox" id="test24" name="s24" value="1" <?php print $d[24] ?>/>
    <label for="test24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

<tr><td><input type="checkbox" id="test25" name="s25" value="1" <?php print $d[25] ?>/>
    <label for="test25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25</label></td>
<td></td>
<td><input type="checkbox" id="test26" name="s26" value="1" <?php print $d[26] ?>/>
    <label for="test26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26</label></td>
    
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td><input type="checkbox" id="test27" name="s27" value="1" <?php print $d[27] ?>/>
    <label for="test27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;27</label></td>
<td></td>
<td><input type="checkbox" id="test28" name="s28" value="1" <?php print $d[28] ?>/>
    <label for="test28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>    
    
<tr><td><input type="checkbox" id="test29" name="s29" value="1" <?php print $d[29] ?>/>
    <label for="test29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;29</label></td>
<td></td>
<td><input type="checkbox" id="test30" name="s30" value="1" <?php print $d[30] ?>/>
    <label for="test30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30</label></td>
    
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>        
    
<td><input type="checkbox" id="test31" name="s31" value="1" <?php print $d[31] ?>/>
    <label for="test31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31</label></td>
<td></td>
<td><input type="checkbox" id="test32" name="s32" value="1" <?php print $d[32] ?>/>
    <label for="test32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32</label></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>

</table>
<table id="tlacitko">
<tr><td>&nbsp;</td><td><button class="button" type="submit">Rezervovat</button></td></tr>
</table>
</form>
<br>




</div>
</div>
</body>

</html>
