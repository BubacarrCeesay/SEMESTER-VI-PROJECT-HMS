<?php 
    include("header.php");
?>

<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    
    $con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
    if(!$con)
    {
        die("Connection Failed");
    }

    $query="select * from patient where id='$id'";

    $result=mysqli_query($con,$query);

    $row=mysqli_fetch_array($result);

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Patient</title>
    <link rel="website icon" type="png" href="../Home/Logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="dashindex.css" />
  </head>
  <body>
    <section class="sidenav">
        <div>
            <a href="doctorindex.php"><h3>Dashboard</h3></a>
        </div>
        <div>
            <a href="doctorprofile.php"><h3>Profile</h3></a>
        </div>
        <div class="active">
           <a href="doctorpatient.php"> <h3>Patient</h3></a>
        </div>
        <div>
           <a href="docapp.php"> <h3>All Appointment</h3></a>
        </div>
        <div>
           <a href="approve.php"> <h3>Approved Patient</h3></a>
        </div>
        <div>
           <a href="docreport.php"> <h3>Report</h3></a>
        </div>

    </section>

    <section class="view">
        <div class="head">
            <h2>Details</h2>
        </div>
        <div>
            <?php echo "<img src='../Patient/img/".$row['profile']."'>"?>
        </div>
        <div>
            <h4>ID : <?php echo $row['id'] ?></h4>
        </div>
        <div>
            <h4>FULL NAME : <?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></h4>
        </div>  
        <div>
            <h4>EMAIL : <?php echo $row['email'] ?></h4>
        </div>
        <div>
            <h4>PHONE NUMBER : <?php echo $row['phonenumber'] ?></h4>
        </div>
        <div>
            <h4>AGE : <?php echo $row['age'] ?></h4>
        </div> 
        <div>
            <h4>ADDRESS : <?php echo $row['address'] ?></h4>
        </div>  
        <div>
            <h4>GENDER : <?php echo $row['gender'] ?></h4>
        </div>
        <div>
            <h4>USERNAME : <?php echo $row['username'] ?></h4>
        </div>
        <div>
            <h4>REGISTRATION DATE : <?php echo $row['regdate'] ?></h4>
        </div>

    </section>

  </body>
</html>

