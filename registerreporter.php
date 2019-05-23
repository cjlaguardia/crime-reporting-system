<?php
if(isset($_POST['signup-submit']))
{
    require 'connect.php';

    $username=$_POST['username'];
    
    $password=$_POST['password'];
    

    if (empty($username) || empty($password))
    {
        //header("Location:../signup.php?error=emptyfields");
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Empty Fields');
        window.location.href='../registeradmin.php?error';
         </script>");
        exit();
    }

 

   
   
    // check password
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {

        //header("Location: ../signup.php?error=invaliduid");
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Invalid UID);
        window.location.href='../registeradmin.php?error';
         </script>");
        exit();
    }

   

//check duplicate username
    else {
        $sql="SELECT username from reporter where username=?";
        $stmt = mysqli_stmt_init($con);

        if (!mysqli_stmt_prepare($stmt,$sql))
        {
            //header("Location: ../signup.php?error=sqlerror");
            echo ("<script LANGUAGE='JavaScript'>
        window.alert('SQL Error');
        window.location.href='../registeradmin.php?error';
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
            window.location.href='../registeradmin.php?error';
         </script>");
                exit();
            }
            else {

                 $name_reporter = $_POST['name_reporter'];
        $contact_reporter=$_POST['contact_reporter'];
        $email_reporter=$_POST['email_reporter'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $reporter_id = $_POST['reporter_id'];
        $status = 'pending';
        $hashedpwd= password_hash($password,PASSWORD_DEFAULT);
        $file_name = basename($_FILES['fileToUpload']['name']);
       
       
        
         $sql = "INSERT INTO reporter(name_reporter,contact_reporter,email_reporter,username,password,account_status,account_file_name) VALUES ('$name_reporter','$contact_reporter','$email_reporter','$username','$hashedpwd','$status','$file_name')";


        $query = mysqli_query($con, $sql);
    

        if ($query) {
            echo ("<script LANGUAGE='JavaScript'>
        window.alert('Register Success!');
        window.location.href='index.php';
         </script>");

         }



            $target_dir = "reporteruploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);






        $project =$name_reporter;
$dirname = "reporteruploads/";
mkdir($dirname.$project, 0777, true);


if (isset($_FILES["fileToUpload"]["name"]))
    {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$dirname/$project/" . $_FILES["fileToUpload"]["name"]);
        $image = "uploads/$project/" . $_FILES["fileToUpload"]["name"];
    }

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
       
                
    } else {
        echo "File is not an image.";
         echo "<script>alert('File Is Not an Image!);</script>";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";


// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
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