<?php
	include('connect.php');
	
	require "navbar.php";





?>
<!DOCTYPE html>
<html>
<head>
	<title>Pending Accounts</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>

<div class="adminview">

	<table id="t01" border=1  style="border-collapse: collapse;">

		<th>Reporter ID</th>
		<th>Name of Reporter</th>
		<th>Reporter Contactr</th>
		<th>Reporter Email</th>
		<th>Reporter Username</th>
		<th>Reporter Pictures</th>
		<th>Action</th>


		<?php
			$status='pending';
			$get_emp = "SELECT * FROM reporter WHERE account_status!='verified'";
			$get_emp_exec = mysqli_query($con, $get_emp);
			while ($data = mysqli_fetch_array($get_emp_exec)) {
				echo "<tr>";
				echo "<td>".$data['reporter_id']."</td>";
				echo "<td>".$data['name_reporter']."</td>";
				echo "<td>".$data['contact_reporter']."</td>";
				echo "<td>".$data['email_reporter']."</td>";
				echo "<td>".$data['username']."</td>";
				echo "<td><img height='100' width='100' src='uploads/".$data['name_reporter']."/".$data['account_file_name']."' />";
				$eiz=$data['reporter_id'];
				echo "<td><a href='acceptreporter.php?eiz=$eiz'>Accept</a><br><a href='rejectreporter.php?eiz=$eiz'>Reject</a></td>";
				echo "</tr>";
			}

		?>


</table>
</div>

</body>
</html>
