<?php
//connecting to database
include 'db_connect.php';

$msg =isset( $_POST['text']);
$room = isset($_POST['room']);
$ip = isset($_POST['ip']);

 $sql="INSERT INTO `msgs` (`msg`, `room`, `ip`, `stime`) VALUES ( '$msg', '$room', '$ip',current_timestamp);";
 mysqli_query($conn,$sql);
//  mysqli_close($conn);

?>