<?php 
    include("header.php");
?>

<?php 

if(isset($_POST['sendreport']))
{

    $con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
    if(!$con)
    {
        die("Connection Failed");
    }

    $title=$_POST['title'];
    $msg=$_POST['message'];

    $user=$_SESSION['patient'];

    $query="insert into report(username,title,message,datesend) values('$user','$title','$msg',NOW())";

    $result=mysqli_query($con,$query);

    if($result){
            echo"<script>alert('Report Sent, Thank you🤝!');</script>";
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
    <title>Patient | Dashboard</title>
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
        <div>
           <a href="patientinvoice.php"> <h3>Invoice</h3></a>
        </div>
        <div>
           <a href="patientrecs.php"> <h3>My Records</h3></a>
        </div>

    </section>

    <main>
    <section  class="head">
        <h1>PATIENT | DASHBOARD</h1>
    </section>
    <section class="dashboard">
        <div class="info" id="admin">
            <div class="num">
                <h1>
                </h1>
                <h3> My <br/> Profile </h3>
            </div>
            <div class="icon">
             <a href="patientprofile.php"> <img src="../Admin/pat-icon.jpg" alt=""></a>
            </div>
        </div>
        <div class="info" id="patient">
            <div class="num">
                <h1>
                </h1>
                <h3>Book <br/> Appointment</h3>
            </div>
            <div class="icon">
                <a href="bookapp.php"> <img src="../Doctor/app-icon.png" alt=""></a>
            </div>
        </div>
        <div class="info" id="doctor">
            <div class="num">
                <h1>
                </h1>
                <h3>My <br/> Invoice</h3>
            </div>
            <div class="icon">
                <a href="patientinvoice.php"> <img src="../Admin/income-icon.webp" alt=""></a>
            </div>
        </div>
       <div class="info" id="recs">
            <div class="num">
                <h1>
                </h1>
                <h3>My <br/> Records</h3>
            </div>
            <div class="icon">
                <a href="patientrecs.php"> <img src="rec-icon.webp" alt=""></a>
            </div>
        </div>
    </section>

    <section class="report">
        <h3>Send A Feedback Report</h3>
        <form method="post"  action="<?php echo $_SERVER['PHP_SELF']?>">
        <label>Title : </label><br/>
        <input type="text" name="title" required placeholder="Enter Title">
        <br/><br/>
        <label>Message : </label><br/>
        <textarea type="text" name="message" required placeholder="Enter Your Message"></textarea>
        <br/><br/><br/>
        <input type="submit" name="sendreport" value="SEND" id="btn">
        </form>
    </section>
    </main>
  </body>
</html>