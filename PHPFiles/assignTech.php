<?php
	$IDNum = $_POST['idNum'];
	$TechID = $_POST['techIDNum'];

  //Database Connection//
    require 'dbconfig.php';
$sql ="Update incidentreport SET AssignedTech = $TechID Where incidentID = $IDNum";
if($con->query($sql) === TRUE)
{
	echo "Successful Update";
}
else
{
	echo "Error: " . $con->error;
}
$con->close();
?>