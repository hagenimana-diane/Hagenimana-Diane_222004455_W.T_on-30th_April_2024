<?php

$db= new mysqli('localhost','root','','hagenimana_diane_sms');
$id=$_POST['id'];
$delete="DELETE FROM orders WHERE id='$id'";
$che=mysqli_query($db,$delete);
header('location:bought.php');


?>