<?php 
    include("header.php");
?>

<?php 

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

$ad=mysqli_query($con,"select * from admin");
$msg=mysqli_query($con,"select * from contact");
$job=mysqli_query($con,"select * from doctor where status='pending'");
$doc=mysqli_query($con,"select * from doctor where status='approved'");
$tpat=mysqli_query($con,"select * from patient");
$trp=mysqli_query($con,"select * from report");
$tin=mysqli_query($con,"select * from income");

$totaladmin=mysqli_num_rows($ad);
$totalmsg=mysqli_num_rows($msg);
$totaljob=mysqli_num_rows($job);
$totaldoc=mysqli_num_rows($doc);
$totalpat=mysqli_num_rows($tpat);
$totalrp=mysqli_num_rows($trp);
$totalin=mysqli_num_rows($tin);

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Dashboard</title>
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
        <div>
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

    <main>
    <section  class="head">
        <h1>ADMIN | DASHBOARD</h1>
    </section>
    <section class="dashboard">
        <div class="info" id="admin">
            <div class="num">
                <h1>
                    <?php echo $totaladmin ?>
                </h1>
                <h3>Total <br/> Admin</h3>
            </div>
            <div class="icon">
             <a href="admininfo.php"> <img src="admin-icon.jpg" alt=""></a>
            </div>
        </div>
        <div class="info" id="doctor">
            <div class="num">
                <h1>
                    <?php echo $totaldoc ?>
                </h1>
                <h3>Total <br/> Doctor</h3>
            </div>
            <div class="icon">
             <a href="admindoctor.php"> <img src="doct-icon.jpeg" alt=""> </a>
            </div>
        </div>
        <div class="info" id="patient">
            <div class="num">
                <h1>
                    <?php echo $totalpat ?>
                </h1>
                <h3>Total <br/> Patient</h3>
            </div>
            <div class="icon">
                <a href="adminpatient.php"> <img src="pat-icon.jpg" alt=""></a>
            </div>
        </div>
        <div class="info" id="report">
            <div class="num">
                <h1>
                    <?php echo $totalrp ?>
                </h1>
                <h3>Total <br/> Report</h3>
            </div>
            <div class="icon">
               <a href="adminreport.php">  <img src="report-icon.png" alt=""></a>
            </div>
        </div>
        <div class="info" id="job">
            <div class="num">
                <h1>
                    <?php echo $totaljob ?>
                </h1>
                <h3>Total <br/> Job Request</h3>
            </div>
            <div class="icon">
               <a href="jobrequest.php">  <img src="job-icon.png" alt=""></a>
            </div>
        </div>
        <div class="info" id="income">
            <div class="num">
                <h1>
                     <?php echo $totalin ?>
                </h1>
                <h3>Total <br/> Income</h3>
            </div>
            <div class="icon">
                <a href="adminincome.php"> <img src="income-icon.webp" alt=""></a>
            </div>
        </div>
        <div class="info" id="msg">
            <div class="num">
                <h1>
                    <?php echo $totalmsg ?>
                </h1>
                <h3>Total Website<br/>Messages</h3>
            </div>
            <div class="icon">
               <a href="adminwebsite.php">  <img src="msg-icon.jpg" alt=""></a>
            </div>
        </div>
        <div class="info" id="dis">
            <div class="num">
                <h1>
                </h1>
                <h3>Discharged<br/>Patient<br/>Records</h3>
            </div>
            <div class="icon">
               <a href="admindis.php">  <img src="../Patient/rec-icon.webp" alt=""></a>
            </div>
        </div>
       
    </section>
    </main>
  </body>
</html>