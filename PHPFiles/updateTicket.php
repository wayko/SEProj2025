<?php
	$IDNum = $_POST['idNum'];
	$TechID = $_POST['techIDNum'];
	$Problem = $_POST['problem'];
	require 'dbconfig.php';
	$sql ="Update incidentreport SET Problem = '". $Problem  ."' Where incidentID = $IDNum";
	if($con->query($sql) === TRUE)
	{
		echo "Successful Update";
	}
	else
	{
		echo "Error: " . $con->error;
	}
	$con->close()
?>