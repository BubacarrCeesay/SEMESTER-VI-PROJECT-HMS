<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor | Apply</title>
    <link rel="website icon" type="png" href="Logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body style="background-color: rgb(15, 15, 62);">
    <header class="page-header">
      <a class="tohome" href="home.php"><img class="logo-image" src="Logo.png" /></a>
<div id="headernav">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="appointment.php">Appointment</a></li>
          <li><a class="activeh" href="login.php">LOGIN</a></li>
          <i id="close" class="fa-solid fa-xmark"></i>
        </ul>
      </div>
      <div id="bar">
          <i id="iconbar" class="fa-solid fa-bars"></i>
      </div>
    </header>

    <main class="appointment">
        <h2>Apply Now!</h2>
        <p>Please Note Your Username and Password For Further Login</p>
        <section class="form">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <br/>
            <span>First Name : </span><br/>
            <label>
              <i class="fa-solid fa-user"></i> <input type="text" name="fname" placeholder="Enter Your First Name" required>
            </label>
            <br/><br/><br/>
            <span>Last Name : </span><br/>
            <label>
               <i class="fa-regular fa-user"></i>  <input type="text" name="lname" placeholder="Enter Your Last Name" required>
            </label>
            <br/><br/><br/>
            <span>Email : </span><br/>
            <label>
                <i class="fa-regular fa-envelope"></i> <input type="email" name="email" placeholder="Enter Your Email" required>
            </label>
            <br/><br/><br/>
            <span>Username : </span><br/>
            <label>
              <i class="fa-solid fa-circle-user"></i>  <input type="text" name="username" placeholder="Enter Username" required>
            </label>
            <br/><br/>
            <span>Password : </span><br/>
            <label>
              <i class="fa-solid fa-lock"></i> <input type="password" name="psword" placeholder="Enter Your Password" required>
            </label>
            <br/><br/>
            <span>Confirm Password : </span><br/>
            <label>
              <i class="fa-solid fa-lock"></i> <input type="password" name="cpsword" placeholder="Enter Confirm Password" required>
            </label>
            <br/><br/><br/>
            <span>Phone Number : </span><br/>
            <label>  
              <i class="fa-solid fa-phone"></i>  <input type="text" name="pnum" placeholder="Enter Your Phone Number" required>
            </label>
            <br/><br/><br/>
            <span>Age : </span><br/>
            <label>  
              <i class="fa-solid fa-hashtag"></i>  <input id="numval" type="number" name="age" placeholder="Enter Age" min="0" required>
            </label>
            <br/><br/><br/>
            <span>Gender : </span><br/>
                <i class="fa-solid fa-person-half-dress"></i> <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            <br/><br/><br/>
            <span>Address : </span><br/>
              <textarea name="address" placeholder="Enter Your Email" required></textarea>
            <br/><br/><br/>
            <span>Specialization : </span><br/>
            <label>
              <i class="fa-solid fa-user-doctor"></i><input type="text" name="spec" placeholder="Enter Your Specialixation" required>
            </label>
            <br/><br/><br/>
            <input id="subapp" type="submit" name="submitdocapp" value="APPLY">
          </form>

          <h4>Already have an account <a href="../Doctor/doctorlogin.php">Click Here To Login</a></h4>
        </section>
    </main>

    <footer>
     <section class="up">
        <div class="follow-us">
          <h3>Follow Us</h3>
          <div class="sm-icons">
            <a href="https://www.facebook.com/" target="_blank">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://twitter.com/?lang=en-in" target="_blank">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/?hl=en" target="_blank">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/" target="_blank">
              <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="https://web.telegram.org/" target="_blank">
              <i class="fa-brands fa-telegram"></i>
            </a>
          </div>
        </div>
        <div class="useful-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="about.php">About Us</a></li>
            <hr />
            <li><a href="contact.php">Contact Us</a></li>
            <hr />
            <li><a href="login.php">Login</a></li>
            <hr />
            <li><a href="appointment.php">Book Appointment</a></li>
            <hr />
          </ul>
        </div>
        <div class="contact-footer">
          <h3>Quick Contact</h3>
          <p>
            <i class="fa-solid fa-location-dot"></i>No.4 Dumos Street,
            Fajikunda, KMC ,The Gambia
          </p>
          <p class="loc">
            <i class="fa-regular fa-envelope"></i
            ><a href="mailto:BobzeHospital@gmail.com"
              >BobzeHospital@gmail.com</a
            >
          </p>
          <p><i class="fa-solid fa-phone"></i>+220 3122713 / +1 7459915614</p>
        </div>
      </section>
      <section class="down">
        <p class="copyright-info">
          &copy;Bobze Medical Hospital,2024. All rights reserved.
        </p>
      </section>
    </footer>
<script src="jsfile.js"></script>
  </body>
</html>


<?php

if(isset($_POST['submitdocapp'])){

    $con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
    if(!$con)
    {
        die("Connection Failed");
    }

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $uname=$_POST['username'];
    $pwd=$_POST['psword'];
    $cpwd=$_POST['cpsword'];
    $pnum=$_POST['pnum'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $add=$_POST['address'];
    $spec=$_POST['spec'];

    if($pwd != $cpwd){
        echo"<script>alert('Both Password Should Match ...!');</script>";
    }
    else{

        $query="INSERT INTO doctor(firstname,lastname,email,username,password,phonenumber,age,gender,address,apdate,specialization,salary,status) 
        VALUES ('$fname','$lname','$email','$uname','$pwd','$pnum','$age','$gender','$add',NOW(),'$spec','0','pending')";

        $result=mysqli_query($con,$query);

        if($result){

            echo"<script>alert('Application Successful...!');</script>";
            echo"<script>alert('You Can Login To Know Your Application Status...!');</script>";
        }

        else{
            echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
        }
    }


}



?>