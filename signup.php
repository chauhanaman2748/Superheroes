<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SIGN UP</title>
	<link rel="stylesheet" href="log.css">
</head>
<body style="background-image: url('n.jpg');">

<form class="box" action="signup.php"
 method="post">
	<h1>SIGN UP</h1>
	<input type="text" name="n1" placeholder="choose a username">
	<input type="password" name="n2" placeholder="choose a password">
	<input type="submit" name="s" value="Sign up" >
</form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","mrh");
if(   isset($_POST['s'])  )
{
$username=$_POST['n1'];
$password=$_POST['n2'];
$sql1="INSERT INTO login VALUES('$username','$password') ";
$sa=mysqli_query($conn,$sql1);
}
?>


