<?php
require "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

	

				
				<br><br>
				<center><h1>Create New User</h1></center>
				<form action="registerreporter.php" method="POST" enctype="multipart/form-data">
				
				<br>
				<input type="hidden" name="reporter_id"  required autocomplete="off"><br><br>
				<center><input type="text" name="name_reporter" placeholder="Name of Reporter"  required autocomplete="off"><br><br>
				<input type="number" name="contact_reporter" placeholder="Your Contact Number"><br><br>
				<input type="email" name="email_reporter" placeholder="Your Email"><br><br>
				<input type="text" name="username" placeholder="Username"><br><br>
				
				<input type="password" name="password" placeholder="Password"><br><br>
				<label> Upload ID picture</label><br>
    			<input type="file" name="fileToUpload" id="fileToUpload"><br><br> 
				
				<button type="submit" name="signup-submit">Submit</button>

			</center>
			</form>
		


</body>
