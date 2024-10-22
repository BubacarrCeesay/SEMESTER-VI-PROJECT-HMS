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

$query="select * from patient where username ='$pat'";

$result=mysqli_query($con,$query);

$output="";

while($row=mysqli_fetch_array($result)){
    $id=$row['id'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $uname=$row['username'];
    $profiles=$row['profile'];

    $output.="
                <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phonenumber']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['password']."</td>
                </tr>
            ";
}


if(isset($_POST['update'])){

    $profile=$_FILES['profile']['name'];

    $qr="update patient set profile='$profile' where username='$pat'";

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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient | Profile</title>
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
        <div class="active">
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

    <main class="adminprof">
        <section class="head">
            <h2><?php echo $fname ?> <?php echo $lname ?> PROFILE</h2>
        </section>

        <section class="yourprof">
        <div class="info">
            <table border="1">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Username</th>
                <th>Password</th>

                <?php echo $output ?>

             </table>
        </div>
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

        
                </form>

                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                        <div class="group">
                        <label>Change Your First Name : </label>
                        <input id="change" type="text" name="fname" required placeholder="Enter New First Name">
                        
                        <br/><br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chname">
                        </div>
        
                </form>

                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                        <div class="group">
                        <label>Change Your Last Name : </label>
                        <input id="change" type="text" name="lname" required placeholder="Enter New Last Name">
                        
                        <br/><br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chlname">
                        </div>
        
                </form>

                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                        <div class="group">
                        <label>Change Email: </label>
                        <input id="change" type="email" name="email" required placeholder="Enter New Email">
                        
                        <br/><br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chemail">
                        </div>
        
                </form>

                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                        <div class="group">
                        <label>Change Phone Number : </label>
                        <input id="change" type="text" name="pnum" required placeholder="Enter New Phone Number">
                        
                        <br/><br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chpnum">
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
                        <br/><br/><br/>
                </form>

                <form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                        <div class="group">
                        <label>Change Address : </label><br/>
                        <textarea cols=20  name="address" required placeholder="Enter New Address"></textarea>
                        
                        <br/><br/>
                        <input type="submit" value="CHANGE" id="btnu" name="chaddress">
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

    $qr="update patient set firstname='$newfname' where username='$pat'";

    $res=mysqli_query($con,$qr);

    if($res){

        $fname=$newfname;
        echo "<script>alert('FirstName Updated Successfully!');</script>";
    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }

}

if(isset($_POST['chlname'])){

    $newlname=$_POST['lname'];

    $qr="update patient set lastname='$newlname' where username='$pat'";

    $res=mysqli_query($con,$qr);

    if($res){

        $lname=$newlname;
        echo "<script>alert('LastName Updated Successfully!');</script>";
    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }

}

if(isset($_POST['chemail'])){

    $email=$_POST['email'];

    $qr="update patient set email='$email' where username='$pat'";

    $res=mysqli_query($con,$qr);

    if($res){

     echo "<script>alert('Email Updated Successfully!');</script>";

    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }

}

if(isset($_POST['chpnum'])){

    $pnum=$_POST['pnum'];

    $qr="update patient set phonenumber='$pnum' where username='$pat'";

    $res=mysqli_query($con,$qr);

    if($res){

        echo "<script>alert('PhoneNumber Updated Successfully!');</script>";
    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }

}


if(isset($_POST['chuser'])){

    $newuser=$_POST['uname'];

    $qr="update patient set username='$newuser' where username='$pat'";

    $res=mysqli_query($con,$qr);

    if($res){

        $_SESSION['patient']=$newuser;

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

    $fetchpass=mysqli_query($con,"select * from patient where username='$pat'");

    $rw=mysqli_fetch_array($fetchpass);

    $old=$rw['password'];


    if($oldpass != $old){
        echo "<script>alert('Invalid Old Password!');</script>";
    }

    else if($newpass != $cnewpass){
        echo "<script>alert('New Password Not Equal..!');</script>";
    }
    else{

        $qr="update patient set password='$newpass' where username='$pat'";

         $res=mysqli_query($con,$qr);

        if($res){

            echo "<script>alert('Password Updated Successfully!');</script>";      
        }
        else{
            echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
        }

    }

}

if(isset($_POST['chaddress'])){

    $add=$_POST['address'];

    $qr="update patient set address='$add' where username='$pat'";

    $res=mysqli_query($con,$qr);

    if($res){

        echo "<script>alert('Address Updated Successfully!');</script>";

    }
    else{
        echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
    }

}

mysqli_close($con);

?>

