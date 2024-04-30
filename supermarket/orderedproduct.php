<?php
$db= new mysqli('localhost','root','','hagenimana_diane_sms');
$select="SELECT * FROM order1";
$checks= mysqli_query($db,$select);

?>
<!DOCTYPE html>
<html>
<head>
	<title>odering product</title>
</head>
<body>
	<div>
		
		<table border="1" cellspacing="0">
			<tr>
				<td colspan="7"><h1>table showing ordering product</h1></td>
			</tr>
			<tr>
				<td>orderID</td>
				<td>items</td>
				<td>quantity</td>
				<td>customerID</td>
				<td>orderDate</td>
				<td>update</td>
				<td>delete</td>
			</tr>
			<tr>
            <?php 
           while ($rows=mysqli_fetch_assoc($checks)) {
                      ?>
				<td><?php echo $rows['OrderID']; ?></td>
				<td><?php echo $rows['item']; ?></td>
				<td><?php echo $rows['quantity']; ?></td>
				<td><?php echo $rows['CustomerID']; ?></td>
				<td><?php echo $rows['OrderDate']; ?></td>
				<td><a href="update.php?edit=<?php echo $rows['OrderID']; ?>">
				<button type="submit" style="width: 80px; color: white; background-color: blue; border: none;">
				|edit|</button></a></td>				
				</form>

				<form action="delete.php" method="POST">
					<td>
	<input type="hidden" name="OrderID" value="<?php echo $rows['OrderID']; ?>">
    <input type="submit" name="delete" value="delete" style="width: 80px;
		
		background-color: red; border: none;"></td>	</div>				
				</form>

			</tr>
		<?php } ?>
		</table>
	</div>

</body>
</html>
<style type="text/css">
	table
	{
		width: 50%;
		text-align: center;
		margin-left: 300px;
	}
	
</style>