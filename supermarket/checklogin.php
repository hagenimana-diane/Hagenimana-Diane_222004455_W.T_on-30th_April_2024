<?php
if (isset($_POST['login'])) {
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$con=new mysqli('localhost','root','','hagenimana_diane_sms');
	$sql= mysqli_query($con,"SELECT * FROM users WHERE email='$uname' AND password='$pass'");
	session_start();
	if($row=mysqli_num_rows($sql)==0){
		// <script>document.write('Worng password or username)</script>
		echo "Worng password or username";
	}
	else{
		$_SESSION['password']=$pass;
		header("location:index.php");
	}
}
?>