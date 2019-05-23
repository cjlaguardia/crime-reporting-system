<?php
session_start();
session_unset();
session_destroy();
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Goodbye');
    window.location.href='index.php';
     </script>");
?>
