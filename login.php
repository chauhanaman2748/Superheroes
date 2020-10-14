<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>LOGIN</title>

	<link rel="stylesheet" href="log.css">
</head>
<body style="background-image: url('n.jpg');">

<form class="box" action="login.php"
 method="post">
	<h1>LOGIN</h1>
	<input type="text" name="n1" placeholder="username">
	<input type="password" name="n2" placeholder="password">
	<input type="submit" name="s" value="Login" >
</form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","mrh");
if(   isset($_POST['s'])  )
{
$username=$_POST['n1'];
$password=$_POST['n2'];
$sql1="SELECT * FROM login WHERE username='$username' && password='$password'";
$sa=mysqli_query($conn,$sql1);
$t=mysqli_num_rows($sa);
if($t>0)
{
	echo "<font size='20' color='blue'>You Have Successfully logged in</font>";
}

else
{
	echo "<font size='20' color='blue'>Invalid Login</font>";
}

}
?>


