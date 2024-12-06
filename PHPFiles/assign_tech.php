<?php
	$IDNum = $_POST['idNum'];
	$TechID = $_POST['techIDNum'];

  //Database Connection//
    $con = new mysqli('localhost', 'wayko', 'B4v0e1jj', 'project_2025');

    if($con->connect_error)
{
	echo $con->connect_error;
	die("Connection Failed " . $con->connect_error);
}
else
{
$sql ="Update incidentreport SET AssignedTech = $TechID Where incidentID = $IDNum";
if($con->query($sql) === TRUE)
{
	echo "Successful Update";
}
else
{
	echo "Error: " . $con->error;
}
}
$con->close();
?>