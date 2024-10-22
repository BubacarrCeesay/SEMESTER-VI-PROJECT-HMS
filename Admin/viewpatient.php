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
            <a href="adminindex.php"><h3>Dashboard</h3></a>
        </div>
        <div>
            <a href="adminprofile.php"><h3>Profile</h3></a>
        </div>
        <div>
            <a href="admininfo.php"><h3>Administrator</h3></a>
        </div>
        <div>
           <a href="admindoctor.php"> <h3>Doctor</h3></a>
         </div>
        <div class="active">
           <a href="adminpatient.php"> <h3>Patient</h3></a>
        </div>
        <div>
           <a href="adminreport.php"> <h3>Report</h3></a>
        </div>
        <div>
           <a href="jobrequest.php"> <h3>Job Request</h3></a>
        </div>
        <div>
           <a href="adminincome.php"> <h3>Income</h3></a>
        </div>
        <div>
           <a href="adminwebsite.php"> <h3>Website Form</h3></a>
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
            <h4>ID : <i><?php echo $row['id'] ?></i></h4>
        </div>
        <div>
            <h4>FULL NAME : <i><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></i></h4>
        </div>  
        <div>
            <h4>EMAIL : <i><?php echo $row['email'] ?></i></h4>
        </div>
        <div>
            <h4>PHONE NUMBER : <i><?php echo $row['phonenumber'] ?></i></h4>
        </div>
        <div>
            <h4>AGE : <i><?php echo $row['age'] ?> years</i></h4>
        </div> 
        <div>
            <h4>ADDRESS : <i><?php echo $row['address'] ?></i></h4>
        </div>  
        <div>
            <h4>GENDER : <i><?php echo $row['gender'] ?></i></h4>
        </div>
        <div>
            <h4>USERNAME : <i><?php echo $row['username'] ?></i></h4>
        </div>
        <div>
            <h4>REGISTRATION DATE : <i><?php echo $row['regdate'] ?></i></h4>
        </div>

    </section>

  </body>
</html>

