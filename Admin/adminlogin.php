<?php 

session_start();

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");
if(!$con)
{
    die("Connection Failed");
}

if(isset($_POST['login']))
{

  $username=$_POST['username'];
  $password=$_POST['password'];

  $error=array();

  $query="select * from admin where username='$username' and password='$password'";

  $result=mysqli_query($con, $query);

  if(mysqli_num_rows($result)==1){
      $_SESSION['admin']=$username;
      header("Location: adminindex.php");
      exit();
  }
  else{
    $error['admin']="⚠️ Invalid Username or Password";
  }

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Login</title>
    <link rel="website icon" type="png" href="../Home/Logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../Patient/logindex.css" />
  </head>
  <body>

    <main class="dlogin">
        <section class="container">
            <div class="up">
              <a href="../Home/login.php">  <img src="../Home/Logo.png" alt=""></a>
                &nbsp; <span>|</span> <h1>&nbsp; ADMIN LOGIN </h1>
            </div>
            <div class="error">
              <p>
                <?php

                  if(isset($error['admin'])){
                    $show=$error['admin'];
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
                    <i class="fa-solid fa-user"></i><input type="text" name="username" placeholder="Username" required></input>
                    </label>
                    <br/>
                    <label>
                    <i class="fa-solid fa-lock"></i><input type="password" name="password" placeholder="Password" required>
                    </label>
                    <br/>
                        <input id="btn" type="submit" name="login" value="LOGIN">
                </form>

                <p class="fp"><a href="forgetpassword.php" >Forgot Password</a></p>

            </div>

        </section>

    </main>

  </body>
</html>
