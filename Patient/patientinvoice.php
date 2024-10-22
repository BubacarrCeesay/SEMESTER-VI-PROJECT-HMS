<?php 
    include("header.php");
?>

<?php 

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");

if(!$con)
{
    die("Connection Failed");
}

$pat=$_SESSION['patient'];

$query="select * from income where patient ='$pat'";

$result=mysqli_query($con,$query);

$output="";

if(mysqli_num_rows($result) < 1){
    $output.="<h4>No Invoice Yet</h4>";
}


while($row=mysqli_fetch_array($result)){

    $id=$row['id'];
    $doc=$row['doctor'];
    $apfee=$row['apfee'];
    $labfee=$row['labfee'];
    $medfee=$row['medfee'];
    $bfee=$row['bedfee'];
     $total=$row['totalamount'];
      $mode=$row['mode'];
      $dis=$row['datedischarge'];

    $output.="
                <tr>
                    <td>".$id."</td>
                    <td>".$doc."</td>
                    <td>".$apfee."</td>
                    <td>".$labfee."</td>
                    <td>".$medfee."</td>
                    <td>".$bfee."</td>
                    <td>".$total."</td>
                    <td>".$mode."</td>
                    <td>".$dis."</td>
                </tr>
            ";
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient | Invoice</title>
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
            <a href="patientindex.php"><h3>Dashboard</h3></a>
        </div>
        <div>
            <a href="patientprofile.php"><h3>Profile</h3></a>
        </div>
        <div>
           <a href="bookapp.php"> <h3>Appointment</h3></a>
        </div>
        <div>
           <a href="patientreport.php"> <h3>Report</h3></a>
        </div>
        <div class="active">
           <a href="patientinvoice.php"> <h3>Invoice</h3></a>
        </div>
        <div>
           <a href="patientrecs.php"> <h3>My Records</h3></a>
        </div>

    </section>

    <main class="adminprof">
        <section class="head" id="inhead">
            <h2>Invoice</h2>
        </section>

        <section class="yourprof">
        <div class="info">
            <table border="1">
                <th>ID</th>
                <th>Doctor</th>
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
        </section>
    </main>
  </body>
</html>

