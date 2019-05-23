<?php

include('navbar.php');
?>

<!DOCTYPE html>
<html>

<head>
<title>HomePage</title>
<style>
.homeimage img
{
	margin: auto;
	height: auto;
	width: 100%;
	
}

.donatebutton
{
	
    position:absolute;
    transition: .5s ease;
    top: 53%;
    left: 8%;
    padding: 15px;
 
 	display: inline-block;
 	 border: none;
  	background:  #333;
  	cursor: pointer;

}

button:hover {
  background-color: #F7DC6F  ; /* Green */
  color: white;
}

.donatebutton a
{
	
    
  	color: white;
}

</style>
</head>
<body>
	<div class="homeimage">
	<img src="picture/home.jpg">

	<button class="donatebutton"><a href="https://www.facebook.com/clemarjonlaguardia">$ Donate Now</a></button>
</div>
</body>
</html>
