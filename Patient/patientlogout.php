<?php

session_start();

if(isset($_SESSION['patient']))
{
    unset($_SESSION['patient']);

    header("Location: patientlogin.php");
    exit();
}
else{
    echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
}


?>