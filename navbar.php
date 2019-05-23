<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <style>
 </style>
</head>
<body>
<div class="navwrapper">	
<div class="logo">
<img src="picture\wcc.png" >


</div>
 <div class="navbar"> 
<ul>

<li><a href="index.php">Home</a></li>
<li><a href="viewreportlist.php"> View Reports </a></li>
<li><a href="aboutus.php">About us</a></li> 
<li><a href="location.php">Location</a></li>
<li><a href="registeradmin.php">Register</a></li>
<li><a href="graph.php">Statistical Graph</a></li>
<div class="loginlogin">
<?php

  if(isset($_SESSION['username']))
  	{
  		echo'Welcome '.$_SESSION['username'],' <form action="logout.php" method="post">
  			<button type="submit" name="logout-submit">logout</button>';
  	
  		

  	}
  	else
  	{
  	echo'

  				<form action="login.php" method="post">
          <li><a href="reporterlogin.php">Reporter Login</a></li>
  				<li><a href="adminlogin.php">Admin Login</a></li>
          
  				</form>

       
  				

  				';
  	}

  ?> 
</div>


  <?php
    if(isset($_SESSION['username']) && $_SESSION['username']=='admin'  )
    {
    echo "<li><a href='adminviewreportlist.php'> Pending Reports </a></li>";
    echo "<li><a href='adminview.php'> AdminUpdateReports</a></li>";
    echo "<li><a href='pendingaccounts.php'> Pending Accounts</a></li>";
    }

    else if (isset($_SESSION['username']) && $_SESSION['username']!='admin')
    {
       echo "<li><a href='report.php'> Report a Crime </a></li>";
    }
    ?>
   </div> 
</ul>
</div>
</body>
</html>
