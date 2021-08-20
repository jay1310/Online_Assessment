<?php
require("connection.php");
$msg = $_GET['msg'];    
?>

<html>
<?php include("header.php"); ?>
    <body class="addPlayer">
    <div class="container-fluid" id="content">
            <div class="row decor_bg" style="margin-top:90px">
                <div class="col-md-6 col-md-offset-3">

                <form action="scripts/addScript.php" method="post">
                    <table class="table">
                        <tr><th colspan=2><center><h2><b>Add a Player</b></h2></center></th></tr>
                        
                        <tr><td><b><h4>Player's Name</b>:</td><td> <input type="text" name="name" required></td></tr>
                        <tr>
                            <td><input class="btn btn-lg btn-primary" type="submit" value="Add Player"></td>
                            <?php if($msg == "Duplicate"){?>
                                <td> <div class="btn btn-danger"><?php echo"Duplicate Entry"; ?></div> </td>
                            <?php } ?>
                        </tr>
                    </table>
                    
                </form>
            </div>
            
        </div>
       
    </div>
    <?php include("footer.php"); ?>
    </body>
</html>