<?php
    require("../connection.php");
$name=$_POST['name'];

$query="INSERT INTO `scoreboard`(`Name`) VALUES ('".$name."')";
$sql=mysqli_query($con,$query);

if($sql)
    header("location:../check.php");
else{
    echo '<script>alert("Duplicate Entry.")</script>';
    header("location:../add.php?msg=Duplicate");
}
?>