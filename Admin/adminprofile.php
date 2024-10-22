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

$query="select * from admin where username ='$ad'";

$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
    $id=$row['adID'];
    $fname=$row['name'];
    $uname=$row['username'];
    $profiles=$row['profile'];

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Profile</title>
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
        <div class="active">
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
        <div>
           <a href="adminincome.php"> <h3>Income</h3></a>
        </div>
        <div>
           <a href="adminwebsite.php"> <h3>Website Form</h3></a>
        </div>
    </section>

    <main class="adminprof">
        <section class="head">
            <h2><?php echo $fname ?> PROFILE</h2>
        </section>

        <section class="form">
            <div class="left">
                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                        <?php
                        echo"<img src='img/$profiles' alt='' />";
                        ?>
                        <br/>

                        <div class="group">
                        <label>Update Profile Picture : </label>
                        <input type="file" name="profile" required>
                        
                        <br/><br/>
                        <input type="submit" value="UPDATE" id="btnu" name="update">
                        </div>

                        <?php
                                if(isset($_POST['update'])){

                                    $profile=$_FILES['profile']['name'];

                                    $qr="update admin set profile='$profile' where username='$ad'";

                                    $res=mysqli_query($con,$qr);

                                    if($res){

                                        move_uploaded_file($_FILES['profile']['tmp_name'], "img/$profile");
                                        echo "<script>alert('Profile updated successfully!');</script>";

                                        header("Location: redirect.php");
                                        exit();
                                    }
                                    else{
                                        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
                                    }

                                }
                        
                        
                        
                        ?>
        
                </form>

                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                        <div class="group">
                        <label>Change Your Full Name : </label>
                        <input id="change" type="text" name="fname" required placeholder="Enter New Name">
                        
                        <br/><br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chname">
                        </div>
        
                </form>
            
            </div>

            <div class="right">
                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                        <div class="group">
                        <label>Change Username : </label>
                        <input id="change" type="text" name="uname" required placeholder="Enter New Username">
                        
                        <br/><br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chuser">
                        </div>
        
                </form>

                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <p>Change Password</p>
                        <div class="group">
                        <label>Old Password : </label>
                        <input id="change" type="password" name="oldpass" required placeholder="Enter Old Password">

                        <br/> <br/> <br/>

                        <label>New Password : </label>
                        <input id="change" type="password" name="newpass" required placeholder="Enter New Password">

                        <br/> <br/> <br/>
                        <label>Confirm New Password : </label>
                        <input id="change" type="password" name="cnewpass" required placeholder="Enter Confirm Password">
                        
                        <br/><br/> <br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chpass">
                        </div>
        
                </form>
                
            </div>
        </section>
    </main>
  </body>
</html>

<?php 


if(isset($_POST['chname'])){

    $newfname=$_POST['fname'];

    $qr="update admin set name='$newfname' where username='$ad'";

    $res=mysqli_query($con,$qr);

    if($res){

        $fname=$newfname;
        echo "<script>alert('Name updated successfully!');</script>";

        header("Location: adminprofile.php");
        exit();
    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }

}


if(isset($_POST['chuser'])){

    $newuser=$_POST['uname'];

    $qr="update admin set username='$newuser' where username='$ad'";

    $res=mysqli_query($con,$qr);

    if($res){

        $_SESSION['admin']=$newuser;

        echo "<script>alert('Username updated successfully!');</script>";      
    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }

}




if(isset($_POST['chpass'])){

    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $cnewpass=$_POST['cnewpass'];

    $fetchpass=mysqli_query($con,"select * from admin where username='$ad'");

    $rw=mysqli_fetch_array($fetchpass);

    $old=$rw['password'];


    if($oldpass != $old){
        echo "<script>alert('Invalid Old Password!');</script>";
    }

    else if($newpass != $cnewpass){
        echo "<script>alert('New Password Not Equal..!');</script>";
    }
    else{

        $qr="update admin set password='$newpass' where username='$ad'";

         $res=mysqli_query($con,$qr);

        if($res){

            echo "<script>alert('Password Updated Successfully!');</script>";      
        }
        else{
            echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
        }

    }

}


mysqli_close($con);
?>

