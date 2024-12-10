<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
    {
        header("location:/SEProj2025/faclogin.html");
        
    }
    else
    {
        echo "Faculty Member: " . htmlspecialchars($_SESSION['facUN']) . "<br/>";
        echo "Faculty Email: " . htmlspecialchars($_SESSION['facEmail']) . "<br/>";
        
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Faculty Portal</title>
        <link rel="stylesheet" type="text/css" href="../files/css/bootstrap.min.css">
        <style>
            .product_image
            {
                height:200px;
            }
            .product_name
            {
                height:80px;
                padding-left:20px;
                padding-right:20px;
            }
            .product_footer
            {
                padding-left:20px;
                padding-right:20px;
                padding-bottom:25px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"> 
                        <a class="navbar-brand" href="faculty.php">HOME</a>
                        <a class="navbar-brand" href="classroom.php">Create Trouble Tickets</a>
                        <a class="navbar-brand" href="../ResourceList.html">Get Resource List</a>
                        <a class="navbar-brand" href="../ScheduleRoom.html">Book a ClassRoom</a>
                    </div>
                </div>
            </nav>
            <?php
                if(isset($_SESSION['message']))
                {
                    ?>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="alert alert-info text-center">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                        </div>
                    </div>
                <?php
                    unset($_SESSION['message']);
                }

   
    ?>
    </div>
    </div>
    </body>
    </html>
