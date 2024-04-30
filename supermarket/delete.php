<?php

$db= new mysqli('localhost','root','','hagenimana_diane_sms');
$OrderID=$_POST['OrderID'];
$delete="DELETE FROM order1 WHERE OrderID='$OrderID'";
$che=mysqli_query($db,$delete);
header('location:orderedproduct.php');


?>