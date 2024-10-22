<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
          <li><a class="activeh" href="home.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
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
      <section class="main-front">
        <div class="main-front-text">
          <p id="up">WE PROVIDE</p>
          <p id="down">TOTAL HEALTH CARE SOLUTION !</p>
          <a href="appointment.php"><button>BOOK APPOINTMENT</button></a>
        </div>
        <div id="frontimg">
        <img src="front-bg.png" alt="" />
        </div>
      </section>

      <section class="technology">
            <div class="main-technology">
                
                <div class="inner-technology">
                  
                    <i class="fi fi-tr-hands-heart"></i>
                    <h2>Expert Care</h2>
                    <p>Skilled medical professionals providing comprehensive diagnostic and treatment services with a focus on personalized patient care.</p>
                </div>

                <div class="inner-technology">
                    
                    <h2>Quality Service</h2>
                    <p>Empathetic and supportive staff delivering patient-centered care, dedicated to ensuring comfort and well-being.</p>
                </div>

                <div class="inner-technology">
                    <i class="fi fi-tr-user-md"></i>
                    <h2>Advanced Facilities</h2>
                    <p>State-of-the-art medical technology and modern infrastructure supporting efficient healthcare delivery, committed to innovation and excellence in patient services.</p>
                </div>
            </div>

      </section>

      <section class="login-section">
        <h1>Logins</h1>
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

      <section class="about-section">
        <div class="about-text">
          <h2>About Our Hospital</h2>
          <p>
            <b>Bobze Medical Hospital</b> has been dedicated to delivering
            compassionate and excellent healthcare since <i>1954</i>, since its
            establishment by the visionary <b>Bubacarr Ceesay</b>. We are deeply
            committed to advancing research in the medical field and
            implementing innovative medical practices. Our unwavering dedication
            to excellence has earned us a reputation for unparalleled medical
            expertise and a patient-centric approach to care that is synonymous
            with our hospital in the World.
          </p>
          <a href="about.php"><button>Read More...</button></a>
        </div>
        <div class="about-image">
          <img src="About-img.jpeg" alt="" />
        </div>
      </section>

      <section class="spe-section">
        <h2>Our Services</h2>
        <p>Find below few of our specialization</p>
        <div class="spec-container">
          <div class="spec-detail">
            <img src="heart.png" alt="" />
            <h5>Cardiology</h5>
          </div>

          <div class="spec-detail">
            <img src="tooth.png" alt="" />
            <h5>Dentistry</h5>
          </div>

          <div class="spec-detail">
            <img src="lungs.png" alt="" />
            <h5>Pulmonogy</h5>
          </div>

          <div class="spec-detail">
            <img src="eye.png" alt="" />
            <h5>Ophthalmology</h5>
          </div>

          <div class="spec-detail">
            <img src="liver.png" alt="" />
            <h5>Hepatology</h5>
          </div>

          <div class="spec-detail">
            <img src="stomach.png" alt="" />
            <h5>Gastroenterology</h5>
          </div>

          <div class="spec-detail">
            <img src="broken-bone.png" alt="" />
            <h5>Orthopedics</h5>
          </div>

          <div class="spec-detail">
            <img src="brain.png" alt="" />
            <h5>Neurology</h5>
          </div>
        </div>
      </section>

      <section class="patienttm">
        <h2>Patients Testimonial</h2>

        <div class="slider" id="sld1">
            <div class="info">
              <img src="pat-test1.jpg" alt=""/>
              <h3>Modou Lewis</h3>
              <p>✍️ : 02/12/2023 </p>
            </div>
            <div class="message">
                "My experience at Bobze Medical Hospital was exceptional. The dedicated healthcare 
                professionals provided compassionate care, ensuring my comfort and well-being 
                throughout my stay. The state-of-the-art facilities and commitment to patient 
                satisfaction truly set this hospital apart. I am grateful for the excellent medical 
                care and personal attention I received."
            </div>
        </div>

        <div class="slider" id="sld2">
            <div class="info">
                <img src="pat-test2.jpg" alt=""/>
                <h3>Manyima Janneh</h3>
                <p>✍️ : 05/03/2024 </p>
            </div>
            <div class="message">
                "I cannot express enough gratitude for the outstanding care I received at Bobze Medical Hospital. 
                From the skilled medical team to the warm and welcoming atmosphere, every aspect exceeded my 
                expectations. The hospital's commitment to patient-centered care made me feel valued and 
                supported. I highly recommend Bobze Medical Hospital for its commitment to excellence in healthcare."
            </div>
        </div>

        <div class="slider" id="sld3">
            <div class="info">
                <img src="ret-img.jpg" alt=""/>
                <h3>Ritesh Sharnangat</h3>
                <p>✍️ : 24/01/2024 </p>
            </div>
            <div class="message">
                "Choosing Bobze Medical Hospital was the best decision for my health. The medical staff's 
                expertise, coupled with their compassionate approach, provided me with a sense of 
                confidence and reassurance. The hospital's commitment to cutting-edge technology and 
                patient comfort made my recovery smooth and stress-free. I am thankful for the top-notch 
                care I received and would highly recommend Bobze Medical Hospital to others."
            </div>
        </div>
            
        <div class="slider" id="sld4">
            <div class="info">
                <img src="pat-test4.jpeg" alt=""/>
                <h3>Tima Leigh</h3>
                <p>✍️ : 09/03/2024 </p>
            </div>
            <div class="message">
                "My family and I are immensely grateful for the remarkable care we received at 
                Bobze Medical Hospital. The medical staff's expertise and genuine concern for patients 
                created a supportive atmosphere. The hospital's commitment to a patient-centered 
                approach was evident throughout my stay. I wholeheartedly endorse Bobze Medical Hospital for 
                their exceptional healthcare services."
            </div>
        </div>

        <div class="btns">
          <button id="btn">.</i></button>
          <button id="btn">.</i></button>
          <button id="btn">.</i></button>
          <button id="btn">.</i></button>
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

