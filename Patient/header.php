<?php
session_start();
?>

<?php
if(isset($_SESSION['patient']))
{
  $user=$_SESSION['patient'];

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");

if(!$con)
{
    die("Connection Failed");
}

$query="select * from patient where username ='$user'";

$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
    $profile=$row['profile'];
     $fname=$row['firstname'];

}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <header class="header">       
        <div class="left">
            <img src="../Home/Logo.png" alt=""/>
            <h3>&nbsp;Hospital Management System</h3>
        </div>

        <div class="right">
          <div class="icon">
            <?php
             echo"<img src='img/$profile' alt='' />";
            ?>
            <p><?php echo $fname ?></p>
          </div>
          <div class="logout">
          <a href="patientlogout.php"><button><i class="fa-solid fa-right-from-bracket"></i> Logout</button></a>
          </div>
        </div>


    </header>

  </body>
</html>