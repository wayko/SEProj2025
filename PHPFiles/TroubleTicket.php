<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
    {
        header("location:/SEProj2025/adminlogin.html");
        
    }
    else
    {
         echo "Admin Member: " . htmlspecialchars($_SESSION['adminUN']);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Incident Report</title>
        <link rel="stylesheet" type="text/css" href="../files/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">HOME</a>
                        <a class="navbar-brand" href="troubleticket.php">Ticket System</a>
                    </div>
                </div>
            </nav>
            <?php
        echo "<table class='table table-striped'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<th>Reported By</th>";
        echo "<th>Date/Time</th>";
        echo "<th>Room Number</th>";
        echo "<th>Device Name</th>";
        echo "<th>Issue Reported</th>";
        echo "<th>Assign Tech</th>";
        echo "</tr>";
   
    $con = new mysqli('localhost', 'root', 'B4v0e1jj', 'project_2025');
    $sql = "Select * from incidentreport ORDER BY incidentID";
    $results = $con->query($sql);
    while($row = $results->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>";
        echo $row['facultyMember'];
        echo "</td>";
        echo "<td>";
        echo $row['TimeDate'];
        echo "</td>";
        echo "<td>";
        echo $row['classRoomID'];
        echo "</td>";
        echo "<td>";
        echo $row['deviceName'];
        echo "</td>";
        echo "<td>";
        echo $row['Problem'];
        echo "</td>";
        echo "<td>";
        echo "<a href='assign_tech.php?id=" . $row['incidentID'] .  "' class='btn btn-primary btn-sm pull-left'>Assign Tech</a>";
        echo "</td>";
        echo "</tr>";
        ?>

        <?php
    }
    echo "</tbody>";
    echo "</table>";
    $results->free();
    $con->close();
    ?>
    </div>
    </div>
    </body>
    </html>
    