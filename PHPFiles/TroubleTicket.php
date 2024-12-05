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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cartNav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button> 
                        <a class="navbar-brand" href="#">HOME</a>
                        <a class="navbar-brand" href="troubleticket.php">Ticket System</a>
                    </div>
                </div>
            </nav>
            <?php

   
    $con = new mysqli('localhost', 'root', 'B4v0e1jj', 'project_2025');
    $sql = "Select * from incidentreport ORDER BY incidentID";
    $results = $con->query($sql);
    $itemLen = 4;
    while($row = $results->fetch_assoc())
    {
     $itemLen = ($itemLen == 4) ? 1 : $itemLen +1;
        if($itemLen == 1) echo "<div class='row text-center'>";
        ?>
        <div class="col-sm-4">
            <div class="panel">
                <div class="panel-body">
                    
                    <div class="pull-right">

                        <p class="pull-left">Reported By:<b><?php echo $row['facultyMember']; ?></b></p><br/>
                        
                    
                        <span class="pull-left">
                            <p class="pull-left">Room Number:<?php echo $row['classRoomID']; ?></p><br/>
                            <p class="pull-left">Device Name:<?php echo $row['deviceName']; ?></p><br/>
                            <p class="pull-left">Date/Time of incident:<?php echo $row['TimeDate']; ?></p><br/>
                             <p class="pull-left">Issue:<?php echo $row['Problem']; ?></p><br/><br/><br/>
                            <a href="add_cart.php?id=<?php echo $row['incidentID']; ?>" class="btn btn-primary btn-sm pull-left">Assign Tech</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    if($itemLen == 1) echo "<div></div><div></div><div></div></div>";
    if($itemLen == 2) echo "<div></div><div></div></div>";
    if($itemLen == 3) echo "<div></div></div>";
    $results->free();
    $con->close();
    ?>
    </div>
    </div>
    </body>
    </html>
    