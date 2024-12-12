<?php
    session_start();
    //Database Connection//
    $con = new mysqli('localhost', 'wayko', 'B4v0e1jj', 'project_2025');
    
    //Passed Variables
    $user = trim($_POST['adminUN']);
    $password = trim($_POST['adminPW']);
    #$hashPassword = hash('sha256', $password);
   
$sql ="Select * from adminmember where FirstName ='" .$user. "' and AdminID = '" . $password . "'";

$results = $con->query($sql);

if($results->num_rows > 0)
{
    while($row = $results->fetch_assoc())
    {
        $_SESSION['loggedin'] = true;
        $_SESSION['adminUN'] = $user;
        $_SESSION['TechLevel'] =  $row['TechLevel'];
        $_SESSION['Admin'] = $row['AdminID'];
        header("refresh:2; url=admin.php");
        echo "User login successful redirecting to admin page <br />";
        echo $_SESSION['Admin'];
    }
    }
    else
    {
        header("refresh:2; url=/SEProj2025/adminlogin.html");
        echo "User not found or password incorrect";
    }
    $results->free();
    $con->close();
?>