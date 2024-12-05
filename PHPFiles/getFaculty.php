<?php
    session_start();
    //Database Connection//
    $con = new mysqli('localhost', 'wayko', 'B4v0e1jj', 'project_2025');
    
    //Passed Variables
    $user = trim($_POST['facUN']);
    $password = trim($_POST['facPW']);
    #$hashPassword = hash('sha256', $password);
    if($con->connect_error)
{
	echo $con->connect_error;
	die("Connection Failed " . $con->connect_error);
}
else
{
$sql ="Select * from facultymember where FirstName ='" .$user. "' and FacultyID = '" . $password . "'";

$results = $con->query($sql);

if($results->num_rows > 0)
{
        header("refresh:2; url=faculty.php");
        echo "User login successful redirecting to faculty page";
        $_SESSION['loggedin'] = true;
        $_SESSION['facUN'] = $user;
    }
    else
    {
        header("refresh:2; url=/SEProj2025/faclogin.html");
        echo "User not found or password incorrect";
    }
    }
    $results->free();
    $con->close();
?>