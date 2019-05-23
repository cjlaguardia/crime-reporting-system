<?php
	include('connect.php');
	
	include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>


<div class="adminview">
	<table id="t01" border=1  style="border-collapse: collapse;">

		<th>Report Number</th>
    <th>Reporter Name</th>
    
		<th>Name of Victime</th>
		<th>Gender</th>
		<th>Victim Age</th>
		<th>Type Of Abuse</th>
		<th>Date Happened</th>
		<th>Address Happened</th>
		<th>Name of Suspect </th>
		<th>Suspect Address </th>
		<th>Report Date </th>
		<th>Victim Picture </th>
    <th>Action</th>

		<?php

			$get_emp = "SELECT * FROM (report a INNER JOIN reporter b ON a.reporter_id=b.reporter_id) where status != 'pending' ";
			$get_emp_exec = mysqli_query($con, $get_emp);
			while ($data = mysqli_fetch_array($get_emp_exec)) {
				echo "<tr>";
				echo "<td>".$data['report_id']."</td>";
      		    echo "<td>".$data['name_reporter']."</td>";
        		echo "<td>".$data['name_victim']."</td>";
				echo "<td>".$data['gender_victim']."</td>";
				echo "<td>".$data['age_victim']."</td>";
				echo "<td>".$data['abuse_victim']."</td>";
				echo "<td>".$data['date_victim']."</td>";
				echo "<td>".$data['address_victim']."</td>";
				echo "<td>".$data['name_suspect']."</td>";
				echo "<td>".$data['address_suspect']."</td>";
				echo "<td>".$data['report_date']."</td>";
				echo "<td><img height='100' width='100' src='uploads/".$data['name_victim']."/".$data['file_name']."' />";
        		$eid=$data['report_id'];
				echo "<td><a href='edit.php?eid=$eid'>Edit</a> <a href='delete.php?eid=$eid'>Delete</a></td>";
				echo "</tr>";
			}

		?>


</table>
</div>

</body>
</html>
