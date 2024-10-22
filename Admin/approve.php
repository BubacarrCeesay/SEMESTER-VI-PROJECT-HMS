<?php

if(isset($_GET['id'])){

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
    if(!$con)
    {
        die("Connection Failed");
    }

    $did=$_GET['id'];

    $qr="update doctor set status='approved' where id='$did' ";

    $r=mysqli_query($con,$qr);

    if($r){
            echo"<script>alert('Job Approved...!✔️');</script>";
            header("Location: jobrequest.php");
            exit();       
    }

    else{
    echo"<script>alert('Oops😑! Something Went Wrong...');</script>";        
    }
}

?>