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
        

   
    $con = new mysqli('localhost', 'root', 'B4v0e1jj', 'project_2025');
    $sql = "Select * from incidentreport ORDER BY incidentID";
    $results = $con->query($sql);
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
    $('.getTech').on('click', function(){
        if(techID === 0){
            techID = 100;
        }

        index = $(this).closest('tr').index() - 1;
        idNum =  $(".ticketID:eq(" + index + ")" ).text();
        $.ajax({
            type:"POST",
            url: "assign_tech.php",
            data: {idNum: idNum, techIDNum: techID},
            success: function(response){
                alert(response);

            },
            error: function(xhr, ajaxOptions, thrownError) 
            { 
                alert(xhr.responseText); 
            }
        });
  
    });
    $(document).ajaxStop(function(){
    window.location.reload();
});
    });
       </script>
    
    </body>
    </html>
    