<?php

session_start();

if(isset($_SESSION['doctor']))
{
    unset($_SESSION['doctor']);

    header("Location: doctorlogin.php");
    exit();
}
else{
    echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
}


?>