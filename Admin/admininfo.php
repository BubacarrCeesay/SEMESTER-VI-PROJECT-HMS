<?php 
    include("header.php");
?>

<?php

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

$ad=$_SESSION['admin'];

$query="select * from admin where username !='$ad'";

$result=mysqli_query($con,$query);

$output="";

if(mysqli_num_rows($result) < 1){
    $output.="<h6>No Other Admins Found</h6>";
}

while($row=mysqli_fetch_array($result)){
    $id=$row['adID'];
    $fname=$row['name'];
    $uname=$row['username'];

    $output.="
    <tr>
    <td>$id</td>
    <td>$fname</td>
    <td>$uname</td>
    <td><a href='admininfo.php?idr=$id'><button>Remove<i class='fa-regular fa-trash-can'></i></button></a></td>
    </tr>
    ";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Administrator</title>
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
        <div class="active">
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

    <main class="admininfo">
    <section  class="alladmin">
        <h1>OTHER ADMINS</h1>

        <div class="table">
            <table border="1">
                <th>ID</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Action</th>

                <?php echo $output ?>

            </table>
        </div>
    </section>
    <section class="addadmin">
        <h1>ADD ADMIN</h1>
        <div class="form">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="group">
                <label>ID :</label>
                <input type="number" name="id" required>
                </div>
                <div class="group">
                <label>Full Name :</label>
                <input type="text" name="fname" required>
                </div>
                <div class="group">
                <label>Username :</label>
                <input type="text" name="uname" required>
                </div>
                <div class="group">
                <label>Password :</label>
                <input type="password" name="pwd" required>
                </div>
                <div class="group">
                <input id="btn" type="submit" name="subadm" value="ADD">
                </div>
            </form>
        </div>
    </section>
    </main>
  </body>
</html>

<?php

if(isset($_POST['subadm'])){

    $adid=$_POST['id'];
    $adname=$_POST['fname'];
    $aduname=$_POST['uname'];
    $pswd=$_POST['pwd'];


$q="insert into admin(adId,name,username,password) values('$adid','$adname','$uname','$pswd')";

$res=mysqli_query($con,$q);

if($res){
   echo"<script>alert('Admin Added...!✔️');</script>";
   header("Location: admininfo.php");
   exit();
}
else{
    echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
}

}

//Removing....

if(isset($_GET['idr'])){

    $did=$_GET['idr'];
    $qr="delete from admin where adID='$did'";

    $r=mysqli_query($con,$qr);

    if($r){
   echo"<script>alert('Admin Removed...!✔️');</script>";
   header("Location: admininfo.php");
    exit();       
    }

    else{
    echo"<script>alert('Oops😑! Something Went Wrong...');</script>";        
    }
}

mysqli_close($con);
?>

