<?php 
    include("header.php");
?>

<?php 

if(isset($_POST['book']))
{

  $con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
    if(!$con)
    {
        die("Connection Failed");
    }

    $apdate=$_POST['appdate'];
     $aptime=$_POST['apptime'];
      $apreason=$_POST['appreason'];

    $user=$_SESSION['patient'];

    $q="select * from patient where username ='$user'";
    $r=mysqli_query($con,$q);

    while($row=mysqli_fetch_array($r)){

    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $uname=$row['username'];
    $email=$row['email'];
    $pnum=$row['phonenumber'];
    $age=$row['age'];
    $gender=$row['gender'];
    $add=$row['address'];

    }

    $query="INSERT INTO appointment(firstname,lastname,email,username,phonenumber,age,gender,address,appdate,apptime,apreason,datebook) 
    VALUES ('$fname','$lname','$email','$uname','$pnum','$age','$gender','$add','$apdate','$aptime','$apreason',NOW())";

    $result=mysqli_query($con,$query);

    if($result){
          echo"<script>alert('Appointment Booked Succesfuly...!');</script>";
    }
    else{
            echo"<script>alert('Oops😑! Something Went Wrong...');</script>";

    }


}


?>


<?php

$qry="select * from appointment where username ='$user' order by status desc";

$rslt=mysqli_query($con,$qry);

$output="";

if(mysqli_num_rows($rslt) < 1){
    $output.="<h4 align='center' style='color:red'>No Appointment Record</h4>";
}

while($rw=mysqli_fetch_array($rslt)){
    $id=$rw['id'];
    $output.="
                <tr>
                    <td>".$rw['id']."</td>
                    <td>".$rw['appdate']."</td>
                    <td>".$rw['apptime']."</td>
                    <td>".$rw['apreason']."</td>
                    <td>".$rw['datebook']."</td>
                    <td>".$rw['status']."</td>
                    <td>".$rw['doctor']."</td>
                    <td><a href='bookapp.php?del=$id'><button id='rej'>Delete <i class='fa-regular fa-trash-can'></i></button></a></td>
                </tr>
            ";
}


?>

<?php

if(isset($_GET['del'])){
  $del=$_GET['del'];
  $qy=mysqli_query($con,"delete from appointment where id='$del'");

  if($qy){
    echo"<script>alert('Appointment Deleted');</script>";
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
    <title>Patient | Book Appointment</title>
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
        <div class="active">
           <a href="bookapp.php"> <h3>Appointment</h3></a>
        </div>
        <div>
           <a href="patientreport.php"> <h3>Report</h3></a>
        </div>
        <div>
           <a href="patientinvoice.php"> <h3>Invoice</h3></a>
        </div>
        <div>
           <a href="patientrecs.php"> <h3>My Records</h3></a>
        </div>

    </section>

    <main class="adminprof">

    <section class="report" id="bapp">
        <h3>Book An Appointment</h3> 
        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']?>">
        <label>Appointment Date : </label><br/>
        <input type="date" name="appdate" required>
        <br/><br/>
        <label>Appointment Time : </label><br/>
        <input type="time" name="apptime" required>
        <br/><br/>
        <label>Appointment Reason (Symptoms): </label><br/>
        <textarea name="appreason" placeholder="Appiontment Reason (Medical Conditon)" required></textarea>
        <br/><br/><br/>
        <input type="submit" name="book" value="BOOK" id="btn">
        </form>
    </section>

    <section class="yourprof" id="prevapp">
      <h3>APPOINTMENT HISTORY</h3>
        <div class="info">
            <table border="1">
                <th>Appointment ID</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Appointment Reason</th>
                <th>Date Book</th>
                <th>Status</th>
                <th>With Doctor</th>
                <th>Action</th>

                <?php echo $output ?>

             </table>
        </div>
    </section>
    </main>
  </body>
</html>