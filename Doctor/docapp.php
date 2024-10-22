<?php 
    include("header.php");
?>

<?php

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

$query="select * from appointment where status='pending'";

$result=mysqli_query($con,$query);

$output="";

if(mysqli_num_rows($result) < 1){
    $output.="<h4>No Appointments Yet</h4>";
}

while($row=mysqli_fetch_array($result)){
    $id=$row['id'];
    $output.="
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phonenumber']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['appdate']."</td>
                    <td>".$row['apptime']."</td>
                    <td>".$row['apreason']."</td>
                    <td>".$row['status']."</td>
                    <td>".$row['datebook']."</td>
                    <td><a href='docapp.php?app=$id'><button id='app'>Approve <i class='fa-regular fa-square-check'></i></button></a></td>
                </tr>
            ";

}

?>

<?php

if(isset($_GET['app'])){

    $app=$_GET['app'];

    $doc=$_SESSION['doctor'];

    $qr=mysqli_query($con,"update appointment set status='approve', doctor='$doc' where id='$app'");

    if($qr){
        
            echo"<script>alert('Appointment Approved');</script>";
    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }
}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor | Appointment</title>
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
        <div>
           <a href="doctorpatient.php"> <h3>Patient</h3></a>
        </div>
        <div class="active">
           <a href="docapp.php"> <h3>All Appointment</h3></a>
        </div>
        <div>
           <a href="approve.php"> <h3>Approved Patient</h3></a>
        </div>
        <div>
           <a href="docreport.php"> <h3>Report</h3></a>
        </div>

    </section>

    <main class="jobrequest">
        <div class="head">
        <h2>Patient Appiontments</h2>
        </div>
        <div class="info" id="app">
            <table border="1">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Appointment Reason</th>
                <th>Status</th>
                <th>Date Book</th>
                <th>Action</th>

                <?php echo $output ?>

             </table>

        </div>
    </main>
  </body>
</html>

