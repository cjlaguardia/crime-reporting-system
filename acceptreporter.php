<?php
include('connect.php');
 

        
        $eiz = $_GET['eiz'];
        
        $sql="UPDATE reporter set account_status='verified' where reporter_id=$eiz ";
        $query = mysqli_query($con, $sql);
        if ($query)
         {

    
       echo ("<script LANGUAGE='JavaScript'>
                window.alert('Verify Succesfully');
                window.location.href='pendingaccounts.php';
                 </script>");
         }

               
                 
                


                else{
                        echo "<script>alert('Oops! An error occured!');</script>";
                        
                        
                }

                ?>
