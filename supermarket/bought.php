<?php

$db= new mysqli('localhost','root','','hagenimana_diane_sms');
$select="SELECT * FROM orders";
$checks= mysqli_query($db,$select);

?>


<table border="1" cellspacing="0">
	<tr>
		<td colspan="7" style="text-transform: uppercase; font-size: 25px; font-weight: bold; font-family: sans-serif;">bought product</td>
	</tr>
	<tr>
		<td>id</td>
		<td>productname</td>
		<td>quantity</td>

	     <td>price</td>
		<td>date</td>
		<td>update</td>
		<td>delete</td></tr>
		<tr>
			<?php
             while ($rows=mysqli_fetch_assoc($checks)) {
              ?>

              <td><?php  echo $rows['id']; ?></td>
              <td><?php  echo $rows['productname']; ?></td>
              <td><?php  echo $rows['quantity']; ?></td>
              <td><?php  echo $rows['price']; ?></td>
              <td><?php  echo $rows['date']; ?></td>
              <td><a href="updates.php?edits=<?php  echo $rows['id']; ?>">edit/update</a></td>
              <form action="deletes.php" method="post">
              	<td>
              		<input type="hidden" name="id" value="<?php  echo $rows['id']; ?>">
              		<input type="submit" name="submit" value="delete">
              	</td>

              </form>

		</tr>
	<?php } ?>
</table>
<style type="text/css">
	table{
	background-color:skyblue;
	width: 50%;
	text-align: center;
	margin-left:450px;
	text-transform: capitalize;

}
a{
	text-decoration: none;
	color: white;

}
input{
	padding: 10px;
}
</style>





