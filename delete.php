<?php
	include('connect.php');

	$eid = $_GET['eid'];
	$delete = "DELETE FROM report WHERE report_id='$eid'";
	$exec = mysqli_query($con, $delete);
	if ($exec) {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Deleted successfully');
      window.location.href='adminview.php';
       </script>");
	}
	else{
			echo "<script>alert('Oops! An error occured!');</script>";

		}
?>
