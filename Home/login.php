<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
  <body>
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

    <main>
      <section class="login-section" id="logpage">
        <h1>Login As</h1>
        <div class="logins">
          <div class="log-div">
            <img class="log-image" src="patient-img.jpg" alt="" />
            <h2>Patient Login</h2>
            <a href="../Patient/patientlogin.php"><button>Click Here</button></a>
          </div>
          <div class="log-div">
            <img class="log-image" src="doctor-img.jpeg" alt="" />
            <h2>Doctor Login</h2>
            <a href="../Doctor/doctorlogin.php"><button>Click Here</button></a>
          </div>
          <div class="log-div">
            <img class="log-image" src="admin-img.jpg" alt="" />
            <h2>Admin Login</h2>
            <a href="../Admin/adminlogin.php"><button>Click Here</button></a>
          </div>
        </div>
      </section>
      <hr />
      <section class="hiring">
        <div class="hir">
          <img class="img" src="pat-reg.jpg" alt="" />
          <h2>Patient Sign Up</h2>
          <a href="patientsignup.php"><button>Click Here</button></a>
        </div>
        <div class="hir">
          <img class="img" src="doctor-hiring.jpg" alt="" />
          <h2>We Are Hiring Doctors</h2>
          <a href="doctorapply.php"><button>Apply Now</button></a>
        </div>
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
