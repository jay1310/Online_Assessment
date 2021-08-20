<?php
    require("../connection.php");

    $score = $_POST['newscore'];
    $oldscore = $_POST['oldscore'];
    $name = $_POST['pname'];

    $query="UPDATE scoreboard SET Score = '".$score."' WHERE Score='".$oldscore."' AND Name='".$name."'";
    $sql=mysqli_query($con,$query);
    if($sql){
    header("location:../check.php");
    }
    else
        echo '<script>alert("Something went wrong, Please try again.")</script>'
?>