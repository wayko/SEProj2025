<?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
    {
        header("location:/SEProj2025/adminlogin.html");
        
    }
    else
    {
        echo "<div style='padding-left: 10px;'>";
        echo "Name: " . htmlspecialchars($_SESSION['adminUN']);
        echo "<br /><button class='logout btn btn-primary btn-sm pull-left'>Log Out</button>";
        echo "<script type='text/javascript' src='http://code.jquery.com/jquery-1.7.min.js'></script>";
        echo "<script type='text/javascript' src='../files/js/jquery-ui-1.8.22.custom.min.js'></script>";
        echo "<script>";
        echo "$(document).ready(function()";
        echo "{";
        echo "$('.logout').on('click',function()";
        echo "{";
        echo "$(location).prop('href', 'sessionDestroy.php')";
        echo "});";
        echo "});";
        echo " </script>";
        echo "</div>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Portal</title>
        <link rel="stylesheet" type="text/css" href="../files/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"> 
                        <a class="navbar-brand" href="admin.php">HOME</a>
                        <a class="navbar-brand" href="TroubleTicket.php">Get Trouble Tickets</a>
                        <a class="navbar-brand" href="/SEProj2025/ResourceList.html">Get Resource List</a>
                    </div>
                </div>
            </nav>
            <?php
                require 'dbconfig.php';
                $sql2 = "Select * from incidentreport WHERE AssignedTech = ".$_SESSION['Admin']. " ORDER BY incidentID";
                    $results2 = $con->query($sql2);
                    echo "<table class='table table-bordered table-striped'>";
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<th>Ticket ID</th>";
                    echo "<th>Reported By</th>";
                    echo "<th>Email</th>";
                    echo "<th>Date/Time</th>";
                    echo "<th>Room Number</th>";
                    echo "<th>Device Name</th>";
                    echo "<th>Issue Reported</th>";
                    echo "<th>Assigned Tech</th>";
                    echo "</tr>";
                    while($row2 = $results2->fetch_assoc())
                    {
                        echo "<tr class='tickets'>";
                        echo "<td class='ticketID'>";
                        echo $row2['incidentID'];
                        echo "</td>";
                        echo "<td>";
                        echo $row2['facultyMember'];
                        echo "</td>";
                        echo "<td>";
                        echo $row2['facEmail'];
                        echo "</td>";
                        echo "<td>";
                        echo $row2['TimeDate'];
                        echo "</td>";
                        echo "<td>";
                        echo $row2['classRoomID'];
                        echo "</td>";
                        echo "<td>";
                        echo $row2['deviceName'];
                        echo "</td>";
                        echo "<td>";
                        echo $row2['Problem'];
                        echo "</td>";
                        echo "<td>";
                        echo htmlspecialchars($_SESSION['adminUN']);
                        echo "</td>";
                        echo "</tr>";
                    }              
                echo "</tbody>";
                echo "</table>";
                $results2->free();
                $con->close(); 
    ?>
    </div>
    </div>   
    </body>
    </html>
