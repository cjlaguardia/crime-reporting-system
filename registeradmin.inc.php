<?php
if(isset($_POST['signup-submit']))
{
	require 'connect.php';

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$passwordrepeat=$_POST['password-repeat'];

	if (empty($username) || empty($password) || empty($email) || empty($passwordrepeat))
	{
		//header("Location:../signup.php?error=emptyfields");
		echo ("<script LANGUAGE='JavaScript'>
    	window.alert('Empty Fields');
    	window.location.href='../signup.php?error';
   		 </script>");
		exit();
	}

	else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
	{
		//header("Location: ../signup.php?error=invaliduid=");
		echo ("<script LANGUAGE='JavaScript'>
    	window.alert('Invalid username');
    	window.location.href='../signup.php?error';
   		 </script>");
		exit();
	}

	//Check email validity
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		//header("Location: ../signup.php?error=invalidemail");
		echo ("<script LANGUAGE='JavaScript'>
    	window.alert('Invalid Email');
    	window.location.href='../signup.php?error';
   		 </script>");
		exit();
	}
	// check password
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
	{

		//header("Location: ../signup.php?error=invaliduid");
		echo ("<script LANGUAGE='JavaScript'>
    	window.alert('Invalid UID);
    	window.location.href='../signup.php?error';
   		 </script>");
		exit();
	}

	else if ($password !== $passwordrepeat)
	{
		//header("Location: ../signup.php?error=passwordcheck&uid");
		echo ("<script LANGUAGE='JavaScript'>
    	window.alert('Password does not match');
    	window.location.href='../signup.php?error';
   		 </script>");
		exit();
	}

//check duplicate username
	else {
		$sql="SELECT username from admin where username=?";
		$stmt = mysqli_stmt_init($con);

		if (!mysqli_stmt_prepare($stmt,$sql))
		{
			//header("Location: ../signup.php?error=sqlerror");
			echo ("<script LANGUAGE='JavaScript'>
    	window.alert('SQL Error');
    	window.location.href='../signup.php?error';
   		 </script>");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);

			$resultcheck = mysqli_stmt_num_rows($stmt);

			if ($resultcheck > 0) {
				//header("Location: ../signup.php?error=usernametaken");
				echo ("<script LANGUAGE='JavaScript'>
    		window.alert('Username Taken');
    		window.location.href='../signup.php?error';
   		 </script>");
				exit();
			}
			else {

				$sql="INSERT INTO admin (username,password,email) VALUES (?,?,?)";
				$stmt = mysqli_stmt_init($con);

				if (!mysqli_stmt_prepare($stmt,$sql))
				{
				header("Location: ../signup.php?error=sqlerror");
				exit();
				}

				else {

					$hashedpwd= password_hash($password,PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt,"sss",$username,$hashedpwd,$email);
					mysqli_stmt_execute($stmt);
					//header("Location: ../signup.php?signup=success");
					echo ("<script LANGUAGE='JavaScript'>
    				window.alert('Signup Success');
    				window.location.href='../index.php';
   					 </script>");
					exit();


				}
			}

			}

		}
		mysqli_stmt_close($stmt);
		mysqli_close($con);


}

else
{
	header("Location: ../signup.php");
	exit();

}
?>
