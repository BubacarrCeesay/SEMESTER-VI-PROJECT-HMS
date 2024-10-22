<?php 
    include("header.php");
?>

<?php

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

$query="select * from doctor where status='approved' order by apdate ASC";

$result=mysqli_query($con,$query);

$output="";

if(mysqli_num_rows($result) < 1){
    $output.="<h4>No Doctors</h4>";
}

while($row=mysqli_fetch_array($result)){
    $id=$row['id'];
    $output.="
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['phonenumber']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['apdate']."</td>
                    <td>".$row['specialization']."</td>
                    <td><a href='editdoc.php?id=$id'><button id='app'>Edit  <i class='fa-regular fa-pen-to-square'></i></button></a><a href='admindoctor.php?delid=$id'><button id='rej'>Remove<i class='fa-regular fa-trash-can'></i></button></a></td>
                </tr>
            ";

}

?>

<?php 

if(isset($_GET['delid'])){

    $del=$_GET['delid'];

$q="delete from doctor where id='$del'";

$r=mysqli_query($con,$q);

if($r){
        echo"<script>alert('Doctor Deleted Successfully...');</script>";

      header("Location: admindoctor.php");
      exit();
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
    <title>Admin | Doctor</title>
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
        <div class="active">
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

    <main class="jobrequest">
        <div class="head">
        <h2>Doctors</h2>
        </div>
        <div class="info">
            <table border="1">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Phone Number</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Application Date</th>
                <th>Specialization</th>
                <th>Action</th>

                <?php echo $output ?>

             </table>

        </div>

        <div class="adddoc">
           <a href="addoc.php"><button>ADD DOCTOR</button></a>
        </div>
    </main>
  </body>
</html>

