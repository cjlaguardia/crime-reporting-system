<?php
include('connect.php');
 

        
        $eid = $_GET['eid'];
        
        $sql="UPDATE report set status='accepted' where report_id=$eid ";
        $query = mysqli_query($con, $sql);
        if ($query) {

    $get_emp_edit = "SELECT * FROM (report a INNER JOIN reporter b ON a.reporter_id=b.reporter_id) WHERE report_id=$eid";
    $get_emp_edit_exec = mysqli_query($con, $get_emp_edit);
    $result = mysqli_fetch_array($get_emp_edit_exec);

    $today = date("Y/m/d");
    $mailto = $result['email_reporter'];
    $name =  $result['name_reporter'];
    $mailSub = "WCC Report Update";
    $mailMsg = "<h1><b><center>Women And Children Center</b></center></h1><br><br>
            $today

            <h3>Dear Sir/Madam<b> $name<b><br><br></h3>

           <center><h2>Your Report Has Been Accepted and is now ready to view in the website.<br>
           Thankyou For Reporting and we hope to solve the problem ASAP<br><br>
           <a href='http://wcc.epizy.com/viewreportlist.php'> Click Here to go to our website </a>
           <br><br><br></h2></center>
          

           <hr/>

                                                                       WCC Staff <br>
                                                                  <b>-Master Clem</b> ";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "philhealth666@gmail.com";
   $mail ->Password = "keepit123";
   $mail ->SetFrom("philhealth666@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

 
   if(!$mail->Send())
   {
       error_reporting(E_ALL);
   }
   else
   {
       echo ("<script LANGUAGE='JavaScript'>
                window.alert('Accepted and Mail Sent');
                window.location.href='adminviewreportlist.php';
                 </script>");
   }

               
                 }
                


                else{
                        echo "<script>alert('Oops! An error occured!');</script>";
                        
                        
                }

                ?>
