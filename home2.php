<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="s1.css">
	<title>HOME</title>
</head>
<body style="background-image: url('i.jpg');">
	
	<h1><center><b><font face="Lucida Console" color="red" size="60">KHALNAYAK.NET</font></b></center></h1>
	<br><br><br>
		<align="right">
		<a href='login.php' class="bt" type="button" >Sign in</a>
		<a href='signup.php' class="bt" type="button" >Sign up</a>
		</align>
		<hr>
	<br><br><br>
<div id="nav" style="width: 100%; height: 50px;">
	<h3>
		<ul>
		<li><a href="newest.html"><font color="orange">Newest</font></a></li>
		<li><a href="toprated.html"><font color="orange">Top Rated</font></a></li>
		<li><a href="contactus.html"><font color="orange">Contact Us</font></a></li>
		<li><a href="aboutus.html"><font color="orange">About Us</font></a></li>
		<li><a href="special.html"><font color="orange">Special offers</font></a></li>
		<li><a href="payment.html"><font color="orange">Payment</font></a></li>
        </ul>
	</h3>
</div>
<div id="cont" style="width: 100%; height: auto;">
	<div id="left" style="width: 50%; height: 500px; float: left;">
	<font color="blue"><h2 class="w3-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Special</h2></font>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="i2.jpg" style="height: 350px">
  <img class="mySlides" src="i3.jpg" style="height: 350px">
  <img class="mySlides" src="i4.jpg" style="height: 350px;">
  <img class="mySlides" src="i5.jpg" style="height: 350px">
  <img class="mySlides" src="i6.jpg" style="height: 350px;">
  <img class="mySlides" src="i7.png" style="height: 350px;">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

	</div>
	<div id="right" style="width: 50%; height: 500px; float: right;">
		<h1 style="color: blue;">Category</h1>
		<a href="Movies.htm"><b><font color="green">Movies</font></b></a><br><br>
		<a href="Comics.html"><b><font color="green">Comics</font></b></a><br><br>
		<a href="series.html"><b><font color="green"><b>Series</font></b></a><br><br>
	</div>
</div>
<div id="footer" style="width: 100%; height: 50px;"></div>
</body>
</html>