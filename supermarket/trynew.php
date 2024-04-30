
<?php

$db= new mysqli('localhost','root','','hagenimana_diane_sms');
$item=$_POST['item'];
$quantity=$_POST['quantity'];
$CustomerID=$_POST['CustomerID'];
$OrderDate=$_POST['OderDate'];
$insert="INSERT INTO order1 VALUES('','$item','$quantity','$CustomerID','$OrderDate')";
$check=mysqli_query($db,$insert);
if ($check) {
   header('location:orderedproduct.php');
}
else
{
    echo "no";
}



/*
     */
?>




