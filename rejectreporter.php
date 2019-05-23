<?php
	include('connect.php');

	$eiz = $_GET['eiz'];
	$delete = "DELETE FROM reporter WHERE reporter_id='$eiz'";
	$exec = mysqli_query($con, $delete);
	if ($exec) {
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Rejected Successfully');
        window.location.href='adminview.php';
         </script>");
	}
	else{
			echo "<script>alert('Oops! An error occured!');</script>";
			
		}
?>