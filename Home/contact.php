<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
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
          <li><a class="activeh" href="contact.php">Contact Us</a></li>
          <li><a href="appointment.php">Appointment</a></li>
          <li><a href="login.php">LOGIN</a></li>
          <i id="close" class="fa-solid fa-xmark"></i>
        </ul>
      </div>
      <div id="bar">
          <i id="iconbar" class="fa-solid fa-bars"></i>
      </div>
    </header>
    <main>
        <section class="contact">
            <section class="quick-contact">
                <h1>Quick Contact</h1>
                <p class="text">Please feel free to contact our friendly staff for any medical enquiry.</p>
                <div class="details">
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
                <div>
                <div class="map">
                    <h1>Find Us👇⬇️!</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.
                        7342125542787!2d-16.67157061433412!3d13.412133615912396!2m3!1f0!2f0!3f0!
                        3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec299dd73fab1f5%3A0x242bd7aaed59fad8!2s
                        Fajikunda%20health%20center!5e0!3m2!1sen!2sin!4v1709495490363!5m2!1sen!2sin" 
                        width="90%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>

            <section class="contact-form">
                <h1>Contact Form</h1>

                <form method="post" action="redirect.php">

                    <label>
                        Full Name <br/> <input type="text" placeholder="Enter Your Name" name="name" required>
                    </label>
                    <br/>
                    </br>
                    <label>
                        Email<br/> <input type="email" placeholder="Enter Your Email" name="email" required>
                    </label>
                    <br/>
                    </br>
                    <label>
                        Phone Number<br/> <input type="text" placeholder="Enter Phone Number" name="pnumber" required>
                    </label>
                    <br/>
                    </br>
                    <label>
                        Enter Message<br/> <textarea placeholder="Enter Your Message"  rows=8 cols=35 name="message" required></textarea>
                    </label>
                    <br/>
                    </br>

                    <input class="contact-form-submit" type="submit" value="SEND" name="submit" id="consubmit"/>

                </form>
            </section>
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
