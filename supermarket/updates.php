				<?php
if (isset($_POST['sub'])) {
	# code...

$db=new mysqli('localhost','root','','hagenimana_diane_sms');
$id=$_GET['edits'];
$product=$_POST['product'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$up="UPDATE orders SET productname='$product', quantity='$quantity',price='$price' WHERE id='$id' ";


$ch=mysqli_query($db,$up);
if ($ch) {
	 echo "completed";
  // header('location:orderedproduct.php');
}

else
{
    echo "no".mysqli_error($db);
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>buy</title>
</head>
<body>
<form action="" method="post">
	<table border="1">
		<tr>
			<td colspan="5" style="font-size: 30px; text-align: center; text-transform: uppercase;">fill the input and buy</td>
		</tr>
		<tr>
			<td>product name</td>
			<td><input type="text" name="product" placeholder="enter product"></td>
		</tr>
		<tr>
			<td>quantity</td>
			<td><input type="text" name="quantity" placeholder="enter quantity"></td>
		</tr>
		<tr>
			<td>price</td>
			<td><input type="text" name="price" placeholder="enter price"></td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit" name="sub">buy</button></td>
		</tr>
	
	</table>
</form>
</body>
</html>
<style type="text/css">
	
	table
	{
		width: 44%;
		font-family: sans-serif;
		text-transform: capitalize;
border: none;
background-color: cadetblue;



	}
	input
	{
		padding: 10px;
		width: 94%;

	}
	button
	{
		padding: 10px;
		width: 100%;
	}
	
	
</style>