<?php
$name = $_POST['name'];
$problem = $_POST['problem'];
$timedate = $_POST['timedate'];
$email = $_POST['email'];
$facName = $_POST['requestor'];
$roomNum = $_POST['room'];

$con = new mysqli('localhost', 'wayko', 'B4v0e1jj', 'project_2025');


 if($con->connect_error)
 {
 	echo $con->connect_error;
 	die("Connection Failed " . $con->connect_error);
 }
 else
 {
   foreach ($name as $key => $valname) 
   {
   	
     $sql = "Insert into incidentreport(classRoomID, facultyMember, facEmail, deviceName, Problem, TimeDate, AssignedTech) VALUES('".$roomNum."','".$facName."','".$email."','". $valname."','".$problem[$key]."','".$timedate[$key]."', 0)";
        if($con->query($sql) === TRUE)
     {
        
         header("Refresh:0; url=SEProj2025/index.html");
     }
     else
     {
         echo "Error: " . $sql . "<br>" . $con->error;
     }
 	}
 }
     $con->close();
?>
