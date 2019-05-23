<?php
include('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	
<form action="upload.php" method="post" enctype="multipart/form-data">
		<div  class="holy">
		<div class="reportable">

	
		<input type="hidden" name="report_id"  required autocomplete="off"><br><br>
		
		<h1>Victim Info</h1>
		<input type="text" name="name_victim"  placeholder="Name of Victim"><br><br>
		<label>Type of Abuse : </label>
		Physical<input type="radio" value="physical" name="abuse_victim">
		Mental<input type="radio" value="mental" name="abuse_victim">
		Sexual<input type="radio" value="sexual" name="abuse_victim">
		Neglect<input type="radio" value="neglect" name="abuse_victim"><br><br>
		
		<input type="number" name="age_victim" placeholder="Age of Victim"><br><br> 
		<label>Gender of Victim:  </label>
		Male<input type="radio" value="Male" name="gender_victim">
		Female<input type="radio" value="Female" name="gender_victim"><br><br>
		<label>When did it happen?</label>
		<input type="date" name="date_victim" ><br><br>
		<input type="text" name="address_victim" placeholder="Where did it Happen"><br><br>
		<label> Upload Picture of Victim</label><br>
    	<input type="file" name="fileToUpload" id="fileToUpload"><br><br> 

		<h1> Suspect Info </h1>
		<input type="text" name="name_suspect" placeholder="Name of Suspect"><br><br>
		<label>Gender of Suspect: </label>
		Male<input type="radio" value="Male" name="gender_suspect">
		Female<input type="radio" value="Female" name="gender_suspect">
		Gayshit<input type="radio" value="gayshit" name="gender_suspect"><br><br>
		
		<input type="text" name="address_suspect" placeholder="Address of Suspect"><br><br>
		<img src="captcha_code.php"><br>
		<input name="captcha_code" type="text" placeholder="Input Captcha above" autocomplete="off"><br>
		

   	 <input type="submit" value="Submit" name="submit">
   	</div>
</div>
</form>
</body>
</html>
