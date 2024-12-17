<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['facUN']))
    {
        header("location:/SEProj2025/faclogin.html");
        
    }
    else
    {
        
        
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
Classroom Repair Sheet
</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.min.js"></script>
<script type="text/javascript" src="../files/js/jquery-ui-1.8.22.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="../files/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../files/css/newDraggable.css">
</head>
<body>
<div style="padding-left: 10px;">
    Name:  <input type="hidden" name="facname" class="facname" id="facname" value=<?php echo htmlspecialchars($_SESSION['facUN']); ?>></input>  
    <?php echo htmlspecialchars($_SESSION['facUN']); ?>   
    <br />Email: <input type="hidden" name="email" class="email" id="email" value=<?php echo htmlspecialchars($_SESSION['facEmail']); ?>>
    <?php echo htmlspecialchars($_SESSION['facEmail']); ?></input>
    <?php
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
    ?>
    <br />
    <input type="hidden" name="room" class="room" id="room" value="210"></input>
</div>
<div class="wrapper">
     <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"> 
                        <a class="navbar-brand" href="faculty.php">HOME</a>
                        <a class="navbar-brand" href="../ResourceList.html">Get Resource List</a>
                        <a class="navbar-brand" href="../ScheduleRoom.html">Book a ClassRoom</a>
                    </div>
                </div>
            </nav>
<div class="room210">Repair Sheet</div>
<ul class="items" id="group1ul">
<li><img src="../files/images/projectorNew.png" id="projector" class="smallimg group1" alt="projector"  name="room210machines"/></li>
<li><img src="../files/images/scanner.png" id="210Scanner" class="smallimg group1" alt="210Scanner"  name="room210machines"/></li>
</ul>
<ul class="items" id="group2ul">
<li><img src="../files/images/dell5820.png" id="PC01" class="smallimg group2" alt="PC01"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC02" class="smallimg group2" alt="PC02"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC03" class="smallimg group2" alt="PC03"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC04" class="smallimg group2" alt="PC04"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC05" class="smallimg group2" alt="PC05"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC06" class="smallimg group2" alt="PC06"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC07" class="smallimg group2" alt="PC07"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC08" class="smallimg group2" alt="PC08"  name="room210machines"/></li>
</ul>
<ul class="items" id="group3ul">
<li><img src="../files/images/dell5820.png" id="PC09" class="smallimg group2" alt="PC09"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC10" class="smallimg group2" alt="PC10"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC11" class="smallimg group3" alt="PC11"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC12" class="smallimg group3" alt="PC12"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC13" class="smallimg group3" alt="PC13"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC14" class="smallimg group3" alt="PC14"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC15" class="smallimg group3" alt="PC15"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC16" class="smallimg group3" alt="PC16"  name="room210machines"/></li>
</ul>
<ul class="items" id="group4ul">
<li><img src="../files/images/dell5820.png" id="PC17" class="smallimg group3" alt="PC17"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC18" class="smallimg group3" alt="PC18"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC19" class="smallimg group3" alt="PC19"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC20" class="smallimg group3" alt="PC20"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC21" class="smallimg group4" alt="PC21"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC22" class="smallimg group4" alt="PC22"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC23" class="smallimg group4" alt="PC23"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC24" class="smallimg group4" alt="PC24"  name="room210machines"/></li>
</ul>
<ul class="items" id="group5ul">
<li><img src="../files/images/dell5820.png" id="PC25" class="smallimg group4" alt="PC25"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC26" class="smallimg group4" alt="PC26"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC27" class="smallimg group4" alt="PC27"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC28" class="smallimg group4" alt="PC28"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC29" class="smallimg group4" alt="PC29"  name="room210machines"/></li>
<li><img src="../files/images/dell5820.png" id="PC30" class="smallimg group4" alt="PC30"  name="room210machines"/></li>
</ul>
<div class="problemarea">
<div class="problem">
Drag problem machine in here:
<div class="numbers"></div>
<button value="Send To Helpdesk" class="button btn btn-primary">Send To Helpdesk</button> 
</div>
</div>
</div>
<foot>
    <script type="text/javascript" src="../files/js/newDraggable.js"></script>
    <script type="text/javascript" src="../files/js/newPostDrag.js"></script>
</foot>
</body>
</html>
