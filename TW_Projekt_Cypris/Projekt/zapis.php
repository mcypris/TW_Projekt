<?php
$conn = new mysqli("localhost", "root", "root", "projekt");

if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$email = $_POST["email"];
echo $_POST["prijmeni"];

for($a=1; $a<=50; $a++){
	$sedadlo[$a] = $_POST["s$a"];
	if($sedadlo[$a] == 1){
	$result = mysqli_query($conn,"SELECT * FROM rezervace WHERE sedadlo='s$a'");
   	$exist = mysqli_num_rows($result); 
	    
    if($exist == 0){
			$sql = "INSERT INTO rezervace(sedadlo, jmeno, prijmeni, email)
            VALUES('s$a', '$jmeno', '$prijmeni', '$email')";
            $conn->query($sql); 
        
			header("Location: index.php");
		}else{
			echo "Sedadlo $a uz je rezervovano. <br>";
		}
	}
}
$conn->close();
?>