<?php
$name = $_POST['name'];
$problem = $_POST['problem'];
$timedate = $_POST['timedate'];
$email = $_POST['email'];
$facName = $_POST['requestor'];
$roomNum = $_POST['room'];

require 'dbconfig.php';
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
     $con->close();
?>
