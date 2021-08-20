<?php
    require("connection.php");
    
?>

<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body class="leaderboard">
<div class="container-fluid" id="content">
        <?php include("header.php"); ?>
            <div class="row decor_bg" style="margin-top:90px">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped table-dark">
                        <?php
                        $s="select * from scoreboard ORDER BY SCORE DESC,NAME";
                        $players=mysqli_query($con,$s);
                        if (mysqli_num_rows($players) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Player's Name</th>
                                    <th>Current Score</th>
                                    <th>Update Score</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                while ($row = mysqli_fetch_array($players)) {
                                    $count++;
                                    $pname = $row["Name"];
                                    $currscore = $row["Score"];?>
                                    <tr>
                                    <form action="scripts/updateScript.php" method="POST">
                                        <td> <?php echo $count?> </td>
                                        <td> <?php echo $pname?> </td>
                                        <td> <?php echo $currscore?> </td>
                                        <td><input type="text" name="newscore" required>
                                        <input type="hidden" name="oldscore" value="<?php echo $currscore?>">
                                        <input type="hidden" name="pname" value="<?php echo $pname ?>"></td>
                                        <td><input type="submit" value="Update"></td>
                                    </form>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        <?php
                        } else {?>
                        <div class="container-fluid" id="content">
                            No players to show
                        </div>
                           
                        <?php }
                        ?>
                    </table>                   
                </div>
            </div>
        </div>
        <?php
            include("footer.php");
        ?>

    </body>
</html>