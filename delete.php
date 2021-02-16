<?php
include('config.php');
$ID = $_GET['ID'];
$sql = "DELETE FROM `users` WHERE ID=$ID";
if(mysqli_query($conn,$sql)){
    header("Location:asign3-q5update.php");
}
else{
    echo "Deletion failed...";
}
?>