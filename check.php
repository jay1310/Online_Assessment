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
                    <center><div class="btn btn-lg btn-danger">LEADERBOARD</div></center>
                    <table class="table table-striped" style="margin-top:50px">
                        <?php
                        $count = 0;
                        $s="select * from scoreboard ORDER BY Score DESC,Name";
                        $players=mysqli_query($con,$s);
                        if (mysqli_num_rows($players) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Player's Name</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($players)) {
                                    $count += 1;
                                    echo "<tr><td>" . "#" . $count . "</td><td>" . $row["Name"] . "</td><td>" . $row["Score"]."</tr>" ;
                                }?>
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