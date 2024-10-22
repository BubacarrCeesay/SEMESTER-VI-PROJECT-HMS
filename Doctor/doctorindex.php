<?php 
    include("header.php");
?>

<?php 

$doc=$_SESSION['doctor'];

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

$tap=mysqli_query($con,"select * from appointment where status='pending'");
$tmya=mysqli_query($con,"select * from appointment where status='approve' and doctor='$doc'");
$tpat=mysqli_query($con,"select * from patient");
$totalpat=mysqli_num_rows($tpat);
$totalapp=mysqli_num_rows($tap);
$totalmyapp=mysqli_num_rows($tmya);
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor | Dashboard</title>
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
        <div class="active">
            <a href="doctorindex.php"><h3>Dashboard</h3></a>
        </div>
        <div>
            <a href="doctorprofile.php"><h3>Profile</h3></a>
        </div>
        <div>
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

    <main>
    <section  class="head">
        <h1>DOCTOR | DASHBOARD</h1>
    </section>
    <section class="dashboard">
        <div class="info" id="admin">
            <div class="num">
                <h1>
                </h1>
                <h3> My <br/> Profile </h3>
            </div>
            <div class="icon">
             <a href="doctorprofile.php"> <img src="../Admin/doct-icon.jpeg" alt=""></a>
            </div>
        </div>
        <div class="info" id="doctor">
            <div class="num">
                <h1>
                    <?php echo $totalpat ?>
                </h1>
                <h3>Total <br/> Patient </h3>
            </div>
            <div class="icon">
             <a href="doctorpatient.php"> <img src="../Admin/pat-icon.jpg" alt=""> </a>
            </div>
        </div>
        <div class="info" id="patient">
            <div class="num">
                <h1>
                    <?php echo $totalapp ?>
                </h1>
                <h3>Total <br/> Appointment</h3>
            </div>
            <div class="icon">
                <a href="docapp.php"> <img src="app-icon.png" alt=""></a>
            </div>
        </div>
        <div class="info" id="patient">
            <div class="num">
                <h1>
                    <?php echo $totalmyapp ?>
                </h1>
                <h3>My Approved <br/> Appointment</h3>
            </div>
            <div class="icon">
                <a href="approve.php"> <img src="app-app.png" alt=""></a>
            </div>
    </section>
    </main>
  </body>
</html>