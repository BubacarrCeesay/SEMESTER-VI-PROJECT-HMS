<?php 
    include("header.php");
?>

<?php

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

$query="select * from income";

$result=mysqli_query($con,$query);

$output="";

if(mysqli_num_rows($result) < 1){
    $output.="<h4>No Discharge Patients Yet</h4>";
}

while($row=mysqli_fetch_array($result)){
    $output.="
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['doctor']."</td>
                    <td>".$row['patient']."</td>
                    <td>".$row['apfee']."</td>
                    <td>".$row['labfee']."</td>
                    <td>".$row['medfee']."</td>
                    <td>".$row['bedfee']."</td>
                    <td>".$row['totalamount']."</td>
                    <td>".$row['mode']."</td>
                    <td>".$row['datedischarge']."</td>
                </tr>
            ";

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Income</title>
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
        <div>
           <a href="adminpatient.php"> <h3>Patient</h3></a>
        </div>
        <div>
           <a href="adminreport.php"> <h3>Report</h3></a>
        </div>
        <div>
           <a href="jobrequest.php"> <h3>Job Request</h3></a>
        </div>
        <div class="active">
           <a href="adminincome.php"> <h3>Income</h3></a>
        </div>
        <div>
           <a href="adminwebsite.php"> <h3>Website Form</h3></a>
        </div>
    </section>

    <main class="jobrequest">
        <div class="head">
        <h2>Bill Details</h2>
        </div>
        <div class="info">
            <table border="1">
                <th>ID</th>
                <th>Doctor</th>
                <th>Patient</th>
                <th>Appointment Fee</th>
                <th>Lab Fee</th>
                <th>Medicine Fee</th>
                <th>Bed Fee</th>
                <th>Total</th>
                <th>Mode</th>
                <th>Discharged Date</th>

                <?php echo $output ?>

             </table>

        </div>
    </main>
  </body>
</html>

