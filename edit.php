<?php
	include('connect.php');
  
	if (isset($_POST['submit'])) {
    $report_id=$_POST['report_id'];
    $name_victim = $_POST['name_victim'];
    $abuse_victim=$_POST['abuse_victim'];
    $age_victim=$_POST['age_victim'];
    $gender_victim=$_POST['gender_victim'];
    $date_victim=$_POST['date_victim'];
    $address_victim=$_POST['address_victim'];

    $name_suspect=$_POST['name_suspect'];
    $gender_suspect=$_POST['gender_suspect'];
    $address_suspect=$_POST['address_suspect'];





    $sql= "UPDATE report set name_victim='$name_victim',abuse_victim='$abuse_victim',age_victim='$age_victim',gender_victim='$gender_victim',date_victim='$date_victim',address_victim='$address_victim',name_suspect='$name_suspect',gender_suspect='$gender_suspect',address_suspect='$address_suspect' where report_id='$report_id'";



		$query = mysqli_query($con, $sql);

		if ($query) {
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('Edited successfully');
        window.location.href='adminview.php';
         </script>");
		}else{
			echo "<script>alert('Oops! An error occured!');</script>";

		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

	<?php
		$eid = $_GET['eid'];
		$get_emp_edit = "SELECT * FROM report WHERE report_id='$eid'";
		$get_emp_edit_exec = mysqli_query($con, $get_emp_edit);
		$result = mysqli_fetch_array($get_emp_edit_exec);
	?>
<div  class="holyreport">
	<h2>Edit Info</h2>
<form action="edit.php" method="POST">
  <input type="hidden" name="report_id" value="<?php echo $result['report_id']?>">
  
  <h1>Victim Info</h1>
  <label>Name of Victim: </label>
  <input type="text" name="name_victim"  value="<?php echo $result['name_victim']?>"><br><br>

  <label>Type of Abuse : </label>
  Physical<input type="radio" value="physical" name="abuse_victim">
  Mental<input type="radio" value="mental" name="abuse_victim">
  Sexual<input type="radio" value="sexual" name="abuse_victim">
  Neglect<input type="radio" value="Male" name="abuse_victim"><br><br>

   <label>Age of Victim: </label>
  <input type="text" name="age_victim"  value="<?php echo $result['age_victim']?>"><br><br>

  <label>Gender of Victim: </label>
  Male<input type="radio" value="Male" name="gender_victim" >
  Female<input type="radio" value="Female" name="gender_victim"><br><br>


  <label>When did it Happened</label>
  <input type="date" name="date_victim" value="<?php echo $result['date_victim']?>"><br><br>
  <label>Where did it happen</label>
  <input type="text" name="address_victim" value="<?php echo $result['address_victim']?>"><br><br>


  <h1> Suspect Info </h1>
  <label>Suspect Name</label><br>
  <input type="text" name="name_suspect" value="<?php echo $result['name_suspect']?>"><br><br>
  <label>Gender of Suspect: </label>
  Male<input type="radio" value="Male" name="gender_suspect" >
  Female<input type="radio" value="Female" name="gender_suspect"><br><br>
  <label>Suspect Address</label>
  <input type="text" name="address_suspect" value="<?php echo $result['address_suspect']?>"><br><br>


   <input type="submit" value="Submit" name="submit">
	</form>
</div>
</body>
</html>
