<?php 
    include("header.php");
?>


<?php

if(isset($_POST['adddoc'])){

    $con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
    if(!$con)
    {
        die("Connection Failed");
    }
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $uname=$_POST['username'];
    $pwd=$_POST['psword'];
    $pnum=$_POST['pnum'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $add=$_POST['address'];
    $spec=$_POST['spec'];
    $sal=$_POST['sal'];



        $query="INSERT INTO doctor(id,firstname,lastname,email,username,password,phonenumber,age,gender,address,apdate,specialization,salary,status) 
        VALUES ('$id','$fname','$lname','$email','$uname','$pwd','$pnum','$age','$gender','$add',NOW(),'$spec','$sal','approved')";

        $result=mysqli_query($con,$query);

        if($result){

            echo"<script>alert('New Doctor Added Successfully...!');</script>";
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

    <main class="adminprof">
        <section class="head">
            <h2>ADD DOCTOR</h2>
        </section>
        <section class="form">
            <div class="left">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <div class="group">
                <label>Enter Doctor ID : </label>
                <input id="change" type="text" name="id" required placeholder="Enter ID">           
                </div>
                <br/><br/>      
                <div class="group">
                <label>Enter First Name : </label>
                <input id="change" type="text" name="fname" required placeholder="Enter First Name">           
                </div>
                <br/><br/>    
                <div class="group">
                <label>Enter Last Name : </label>
                <input id="change" type="text" name="lname" required placeholder="Enter Last Name">           
                </div>
                <br/><br/>  
                <div class="group">
                <label>Enter Email : </label>
                <input id="change" type="text" name="email" required placeholder="Enter Email">           
                </div>
                <br/><br/>  
                <div class="group">
                <label>Enter Username : </label>
                <input id="change" type="text" name="username" required placeholder="Enter Username">           
                </div>
                <br/><br/> 
                <div class="group">
                <label>Enter Password : </label>
                <input id="change" type="password" name="psword" required placeholder="Enter Password">           
                </div>
                <br/><br/>           
            
            </div>

            <div class="right">

                <div class="group">
                <label>Enter Phone Number : </label>
                <input id="change" type="text" name="pnum" required placeholder="Enter Phone Number">           
                </div>
                <br/><br/> 
                <div class="group">
                <label>Enter Age : </label>
                <input id="change" type="number" name="age" required placeholder="Enter Age">           
                </div>
                <br/><br/>
                <div class="group">
                <label>Gender : </label>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
                <br/><br/> 
                <div class="group">
                <label>Enter Address : </label><br/>
                <textarea cols=20  name="address" required placeholder="Enter Address"></textarea>          
                </div>
                <br/><br/>
                <div class="group">
                <label>Enter Specialization : </label>
                <input id="change" type="text" name="spec" required placeholder="Enter Specialization">          
                </div>
                <br/><br/> 
                <div class="group">
                <label>Enter Salary : </label>
                <input id="change" type="text" name="sal" required placeholder="Enter Salary">           
                </div>
                <br/><br/>            
                <input type="submit" value="ADD" id="btnu" name="adddoc">
            </div>

            <form>
        </section>
    </main>
  </body>
</html>

