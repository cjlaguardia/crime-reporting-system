<?php

if(isset($_POST['reporterlogin-submit']))
{

	require 'connect.php';
	$mailuid=$_POST['username'];
	$password=$_POST['password'];
	$status="";
	$get_emp = "SELECT username FROM reporter where account_status!='verified'";
	$get_emp_exec = mysqli_query($con, $get_emp);
	while ($data = mysqli_fetch_array($get_emp_exec)) 
	{
		$temp=$data['username'];

		if ($mailuid==$temp)
		{
			$status='pending';
		}
		else
		{
			$status='verified';
		}
	}

if($status!='pending')
{



	if (empty($mailuid) ||empty($password) )
	{
		header("Location: index.php?error=emptyfields");
		exit();
	}
		else
		{
			$sql="SELECT * FROM reporter WHERE username=?";
			$stmt = mysqli_stmt_init($con);

			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: index.php?error=sqlerror");
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmt,"s",$mailuid);
				mysqli_stmt_execute($stmt);
				$result= mysqli_stmt_get_result($stmt);

				if ($row=mysqli_fetch_assoc($result))
				{
					$pwdcheck = password_verify($password,$row['password']);
					if ($pwdcheck==false)
					{
						header("Location: index.php?error=wrongpassword");
						exit();
					}
					else if ($pwdcheck==true)
					{
						session_start();

						$_SESSION['username']=$row['username'];
						$_SESSION['reporter_id']=$row['reporter_id'];

						echo ("<script LANGUAGE='JavaScript'>
   							 window.alert('Welcome User');
    						window.location.href='index.php?LoginSuccess';
     								</script>");


						
						exit();
					}

					else
					{
						header("Location: index.php?error=pwdcheckerror");
						exit();
					}


				}
				else
				{
					header("Location: index.php?error=nouserexist");
					exit();
				}
			}

		}

}



else
{

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Account is not verified');
    window.location.href='index.php?AccountNeedToBeVerified';
     </script>");
	exit();
}


	
}
