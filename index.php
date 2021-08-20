<?php
    require("connection.php");

    include("header.php");
?>
<html>
<head>
    <title>Scoreboard</title>
    
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
        row{
            float:left;
        }

    </style>

    </head>
<body>
    
  <div id="banner_image">
    <center>
        <div class="container">
            <div id="banner_content">
                <div class="row">
                    <div class="col-12"><h1><em><strong>Welcome to the Scoreboard</strong></em></h1></div>
                </div>
                <div class="row">
                &nbsp; &nbsp; &nbsp;<a href="check.php" class="btn btn-danger btn-lg active"><span class="glyphicon glyphicon-log-in"></span> Check Score</a>
                    <br><br>
                    &nbsp; &nbsp; <a href="add.php" class="btn btn-primary btn-lg active"><span class="glyphicon glyphicon-user"></span> Add Player</a>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="update.php" class="btn btn-primary btn-lg active"><span class="glyphicon glyphicon-user"></span> Update Score</a>
                </div>     
            </div>
      </div>
    </center>
    </div> 
    
        <?php
            include("footer.php");
        ?>
    
</body>


</html>