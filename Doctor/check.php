<?php 
    include("header.php");
?>



<?php

if(isset($_GET['pat'])){

    $pat=$_GET['pat'];

    $doc=$_SESSION['doctor'];

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

$query="select * from appointment where id='$pat'";

$result=mysqli_query($con,$query);

if($result){

    $row=mysqli_fetch_assoc($result);

$id=$row['id'];
$user=$row['username'];
$fname=$row['firstname'];
$lname=$row['lastname'];
$age=$row['age'];
$gender=$row['gender'];
$apd=$row['appdate'];
$apt=$row['apptime'];
$apr=$row['apreason'];

}

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor | Approved Patient</title>
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
        <div>
           <a href="docapp.php"> <h3>All Appointment</h3></a>
        </div>
        <div class="active">
           <a href="approve.php"> <h3>Approved Patient</h3></a>
        </div>
        <div>
           <a href="docreport.php"> <h3>Report</h3></a>
        </div>

    </section>

    <main class="check">

        <div class="left">
            <table border="1">
                <tr>
                    <td colspan="2"><h3 style="text-align:center">Appiontment Details</h3></td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td><?php echo $id ?></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $fname ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $lname ?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?php echo $age ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo $gender ?></td>
                </tr>
                <tr>
                    <td>Appointment Date</td>
                    <td><?php echo $apd ?></td>
                </tr>
                <tr>
                    <td>Appointment Time</td>
                    <td><?php echo $apt ?></td>
                </tr>
                <tr>
                    <td>Appointment Reason</td>
                    <td><?php echo $apr ?></td>
                </tr>
             </table>

        </div>

        <div class="right">
            <form method="post">
            <div class="treatment">
                <h2>Treatment Section</h2>
                <div class="group">
                    <label>Description <span>*</span>&nbsp;:</label><br/>
                    <textarea name="des" placeholder="Treatement Description" required></textarea>
                </div>
                <div class="group">
                    <label>Lab Test (<span>If Any</span>):</label><br/>
                    <input type="text" name="lab" placeholder="Lab Test Performed">
                                <div class="mini">
                                <label><span>Result </span>:</label>
                                <select name="result">
                                    <option value="">Select</option>
                                    <option value="positive">Positive</option>
                                    <option value="negative">Negative</option>
                                </select>
                                </div>
                </div>
                <div class="group">
                    <label>Medicine Prescription <span>*</span>&nbsp;:</label><br/>
                    <textarea name="med" placeholder="Prescribe Medicine" required></textarea>
                </div>
                <div class="group">
                    <label>Allocated Bed (<span>If Allocated</span>) :</label><br/>
                    <input type="text" name="ab" placeholder="Enter Bed Number">
                </div>           

            </div>

            <div class="invoice">
                <h2>Invoice</h2>
                <div class="group">
                    <label>Appointment Fee <span>*</span>&nbsp;: &nbsp;$</label>
                    <input id="small" type="text" name="apfee" required>
                </div>
                <div class="group">
                    <label>Medicine Fee <span>*</span>&nbsp;: &nbsp;$</label>
                    <input id="small" type="text" name="mfee" required>
                </div>
                <div class="group">
                    <label>Lab Fee : &nbsp;$</label>
                    <input id="small" type="text" name="labfee">
                </div>
                <div class="group">
                    <label>Bed Fee (<span>If Allocated</span>): &nbsp;$</label>
                    <input id="small" type="text" name="bfee">
                </div>
                <div class="group">
                    <label><span id="bill">Total</span> : &nbsp;$</label>
                    <input id="small" type="text" name="total" required>                
                </div>

                <div class="group">
                <label>Mode Of Payement <span>*</span>&nbsp;:</label>
                <select name="mode" required>
                    <option value="">Mode</option>
                    <option value="Cash">Cash</option>
                    <option value="UPI">UPI</option>
                    <option value="Net Banking">Net Banking</option>
                </select>
                </div>
                <div class="group">
                    <input id="btn" type="submit" value="DISCHARGE" name="send">
                </div>
            </div>
            </form>
        </div>
    </main>
  </body>
</html>


<?php


if(isset($_POST['send'])){

    $do=$_SESSION['doctor'];

    $apfee=$_POST['apfee'];
    $mfee=$_POST['mfee'];
    $lfee=$_POST['labfee'];
    $bfee=$_POST['bfee'];
    $total=$_POST['total'];
    $mode=$_POST['mode'];


    $des=$_POST['des'];
    $lab=$_POST['lab'];
    $rslt=$_POST['result'];
    $med=$_POST['med'];
    $ab=$_POST['ab'];

    $qr="INSERT INTO income(doctor,patient,apfee,labfee,medfee,bedfee,totalamount,mode,datedischarge) 
    VALUES ('$do','$user','$apfee','$lfee','$mfee','$bfee','$total','$mode',NOW())";

    $res=mysqli_query($con,$qr);

    if($res){

        $q="INSERT INTO discharge(patient,doctor,date,description,labtest,result,prescription,bed) 
        VALUES ('$user','$do',NOW(),'$des','$lab','$rslt','$med','$ab')";

       $r=mysqli_query($con,$q);

       if($r){
            mysqli_query($con,"Update appointment set status='discharged' where id='$id'");
            echo"<script>alert('Patient Successfully Discharged');</script>";
       }
       else{
            echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
       }

    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }



} 
                
?>