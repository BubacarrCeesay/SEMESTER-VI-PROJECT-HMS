<?php

session_start();

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

if(isset($_POST['reset']))
{

  $username=$_POST['username'];
    $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  $error=array();

  $query="select * from patient where username='$username' and email='$email'";

  $result=mysqli_query($con, $query);

    if($cpassword != $password){
        $error['pat']="⚠️ Both Password Did Not Match";
    }

   else if(mysqli_num_rows($result)==1){

        $q="update patient set password='$password' where username='$username'";

        $r=mysqli_query($con, $q);

        if($r){
            $error['pat']="⚠️ Your Password Reset Successfully";
            echo "<script>alert('Your Password Reset Successfully..!');</script>";      
        }

        else{
            echo"<script>alert('Oops😑! Something Went Wrong...');</script>";
        }
  }
  else{
    $error['pat']="⚠️ Invalid Username or Email";
  }


}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient | Forgetpassword</title>
    <link rel="website icon" type="png" href="../Home/Logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="logindex.css" />
  </head>
  <body>

    <main class="plogin">
        <section class="container" id="reset">
            <div class="up">
               <img src="unlock.webp" alt="">
                &nbsp; <span>|</span> <h1>&nbsp; RESET YOUR PASSWORD </h1>
            </div>
            <div class="error">
              <p>
                <?php
                  if(isset($error['pat'])){
                    $show=$error['pat'];
                  }
                  else{
                    $show="";
                  }

                  echo $show;

                ?>
              </p>
            </div>            
            <div class="form">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <label>
                    <i class="fa-solid fa-user"></i><input type="text" name="username" placeholder="Enter Your Username" required></input>
                    </label>
                    <br/>
                    <label>
                    <i class="fa-regular fa-envelope"></i><input type="email" name="email" placeholder="Enter Your Email" required></input>
                    </label>
                    <br/>
                    <label>
                    <i class="fa-solid fa-lock"></i><input type="password" name="password" placeholder="Enter New Password" required>
                    </label>
                    <br/>
                    <label>
                    <i class="fa-solid fa-key"></i><input type="password" name="cpassword" placeholder="Enter Confirm Password" required>
                    </label>
                    <br/>
                        <input id="btn" type="submit" name="reset" value="RESET">

                        <a href="patientlogin.php"><input id="backbtn" type="button" name="back" value="BACK TO LOGIN"></a>
                </form>

            </div>

        </section>

    </main>

  </body>
</html>
