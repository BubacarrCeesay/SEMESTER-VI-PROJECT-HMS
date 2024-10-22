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

    $query="select * from doctor where id='$id'";

    $result=mysqli_query($con,$query);

    $row=mysqli_fetch_array($result);

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

    <main class="editdoc">
        <div class="details">
            <h2>Doctor Details</h2>

            <p>ID : <i><?php echo $row['id']; ?></i></p>
            <p>First Name : <i><?php echo $row['firstname']; ?></i></p>
            <p>Last Name : <i><?php echo $row['lastname']; ?></i></p>
            <p>Email : <i><?php echo $row['email']; ?></i></p>
            <p>Username : <i><?php echo $row['username']; ?></i></p>
            <p>Phone Number : <i><?php echo $row['phonenumber']; ?></i></p>
            <p>Gender : <i><?php echo $row['gender']; ?></i></p>
            <p>Age : <i><?php echo $row['age']; ?></i></p>
            <p>Specialization : <i><?php echo $row['specialization']; ?></i></p>
            <p>Salary : <i>$<?php echo $row['salary']; ?></i></p>
        </div>
        <div class="form">
            <h4>Update Salary</h4>

            <form method="post">

                <label>Enter Salary :</label>
                <input type="text" name="sal" required>
                <br/>
                <br/>
                <input type="submit" name="upsal" id="btn" value="UPDATE">
            </form>

        </div>
        
    </main>
  </body>
</html>

<?php 

if(isset($_POST['upsal'])){

    $sal=$_POST['sal'];

    $qr="update doctor set salary='$sal' where id='$id'";

    $r=mysqli_query($con,$qr);

    if($r){
        echo"<script>alert('Salary Updated');</script>";
    }

    else{
        
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }


}

?>
