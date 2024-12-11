<?php
    session_start();
    //Database Connection//
    $con = new mysqli('localhost', 'wayko', 'B4v0e1jj', 'project_2025');
    
    //Passed Variables
    $user = trim($_POST['adminUN']);
    $password = trim($_POST['adminPW']);
    #$hashPassword = hash('sha256', $password);
    if($con->connect_error)
{
	echo $con->connect_error;
	die("Connection Failed " . $con->connect_error);
}
else
{
$sql ="Select * from adminmember where FirstName ='" .$user. "' and AdminID = '" . $password . "'";

$results = $con->query($sql);

if($results->num_rows > 0)
{
    while($row = $results->fetch_assoc())
    {
        header("refresh:2; url=admin.php");
        echo "User login successful redirecting to admin page";
        $_SESSION['loggedin'] = true;
        $_SESSION['adminUN'] = $user;
        $_SESSION['TechLevel'] =  $row['TechLevel'];
    }
    }
    else
    {
        header("refresh:2; url=/SEProj2025/adminlogin.html");
        echo "User not found or password incorrect";
    }
    }
    $results->free();
    $con->close();
?>