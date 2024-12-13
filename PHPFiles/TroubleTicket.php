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
        echo "</script>";
        echo "</div>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Incident Report</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
        <script type="text/javascript" src="../files/js/jquery-ui-1.8.22.custom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../files/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="admin.php">HOME</a>
                        <a class="navbar-brand" href="troubleticket.php">Ticket System</a>
                    </div>
                </div>
            </nav>
            <?php
                require 'dbconfig.php';
                if($_SESSION['TechLevel'] == 2 || $_SESSION['TechLevel'] == 3)
                {
                    $sql = "Select * from incidentreport ORDER BY incidentID";
                    $results = $con->query($sql);
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
                    echo "<th>Tech ID Number</th>";
                    echo "<th>Assigned Tech</th>";
                    echo "<th>Assign Tech</th>";
                    echo "</tr>"; 
                    while($row = $results->fetch_assoc())
                    {
                    echo "<tr class='tickets'>";
                    echo "<td class='ticketID'>";
                    echo $row['incidentID'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['facultyMember'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['facEmail'];
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
                    echo "<select name='techid' class='techid'>";
                    echo "<option value='100'>100</option>";
                    echo "<option value='200'>200</option>";
                    echo "<option value='300'>300</option>";
                    echo "</td>";
                    echo "<td>";
                    echo $row['AssignedTech'];
                    echo "</td>";
                    echo "<td>";
                    echo "<button class='btn btn-primary btn-sm pull-left getTech' id='" .$row['incidentID']."'>Assign Tech</button>";
                    echo "</td>";
                    echo "</tr>";
            ?>
            <?php
                    }
                }
                else
                {
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
                    echo "<th>Update Ticket</th>";
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
                        echo "<td>";
                         echo "<button class='btn btn-primary btn-sm pull-left updateTicket' id='" .$row['incidentID']."'>Update Ticket</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                echo "</tbody>";
                echo "</table>";
                $results->free();
                $con->close();
            ?>
        </div>
        <script>
            $(document).ready(function()
            {
                var techID = 0;
                $('.techid').change(function()
                {
                key = $('.techid').parent().parent().find('input').val();
                techID = $(this).val();
                }),
                $('.getTech').on('click', function()
                {
                    if(techID === 0)
                    {
                        techID = 100;
                    }
                    index = $(this).closest('tr').index() - 1;
                    idNum =  $(".ticketID:eq(" + index + ")" ).text();
                    $.ajax(
                    {
                        type:"POST",
                        url: "assign_tech.php",
                        data: {idNum: idNum, techIDNum: techID},
                        success: function(response)
                        {
                            alert(response);
                        },
                        error: function(xhr, ajaxOptions, thrownError) 
                        { 
                            alert(xhr.responseText); 
                        }
                    });
                $(document).ajaxStop(function()
                {
                    window.location.reload();
                });
            });
                $('.updateTicket').on('click', function()
                    {
                        alert('Update Button Pressed');
                    });
            });
        </script>
    </body>
</html>
    