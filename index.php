<?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $mail = $_POST['mail'];
        $contact = $_POST['contact'];
        $text = $_POST['purpose'];

        $sql = "insert into inbox (Fname, Mail, Contact, Purpose) values ('$fullname','$mail','$contact','$text')";

        $result = mysqli_query($con,$sql);
        if($result){
          $sendsuccessfully[] = 'Messages Sent.';
        }else{
          $sendsuccessfully[] = 'Messages not send';
        }
      }mysqli_close($con);


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>MyPortfolio</title>

    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"!-->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  </head>
  <body>
 
    <header>
      <!--nav class="navbar navbar-expand-lg bg-dark"-->
        <a class="navbar-brand text-light" href="#">Dev<span>eloper</span></a>
        <!--button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button-->
          <ul class="navbar-nav">
            <li><a href="#home" class="active" id="active" onclick="homeRed()">Home</a></li>
            <li><a href="#about" class="activeAbout" onclick="aboutRed()">About Me</a></li>
            <!--li><a href="#service">My Services</a></li-->
            <li><a href="#portfolio" class="activePortfolio" onclick="portRed()">Portfolio</a></li>
            <li><a href="#contact" class="activeContact" onclick="conRed()">Contact</a></li>
          </ul>
    
          <div class="bx bx-menu" id="menu-icon"></div>
          <!--div class="box-menu"><span><ion-icon name="menu"></ion-icon></span></div-->

    </header>

  
   <!---- home design ---->
   <section class="home" id="home">
    <div class="home-text">
      <div class="slide">
        <span class="two">Hello</span>
        <span class="two">I'm</span>
      </div>
        <h1>Paul Argie</h1>
        <h3>Graphic <span>Designer.</span></h3>
        <p>A graphic artist with valuable insight 
          and services that costumers keep coming back for 
          good and high quality Project!</p>
        <div class="button">
          <!--a href="" class="btn">Dowload My CV <i class='bx bxs-download'></i></a-->
          <!--a href="" class="btn2"><span><i class='bx bx-play'></i></span>Watch My Work</a-->
        </div>
    </div>
   </section>
    
    <!---- about design ---->
    <section class="about" id="about">
        <div class="about-img">
          <img src="about.jpg" alt="">
        </div>
  
        <div class="about-text">
          <h2>About <span>Me</span></h2>
          <h4>Creative Design!</h4>
          <div class="about-me-text">
            <h3>Hi, I'm <span>Paul!</span></h3>
              <p>My mission is to helped small and medium-sized businesses grow 
                thier audience and brand recognition through social media. 
                Project Types: Logo Design, E-Certificate Design, Shirt Design etc...
                My goal is to provide valuable insights and services that costumers 
                keep coming back for good and high quality designs. 
              </p>
          </div>
          <a href="" class="btn">More About</a>
        </div>
   
    </section>

     <!---- services design >
     <section class="service" id="service">
      <div class="main-text">
        <p>What I am Expert In</p>
        <h2><span>My</span> Services</h2>
      </div>

      <div class="services-content">
        <div class="box">
          <div class="s-icons"--->
            <!--i class='bx bx-mobile-alt'></i>
            <i class='bx bxl-adobe'></i-->
            <!--i class='bx bxs-devices'></i>
          </div>
          <h3>Graphic Design</h3>
          <p>One way to create appropriate design provide a useful resources for your design and engage in some aspect of practices.</p>
          <a href="https://targetjobs.co.uk/careers-advice/job-descriptions/graphic-designer-job-description" target="_blank" class="read">Read More</a>
        </div>
      
        <div class="box">
          <div class="s-icons">
            <i class='bx bx-code-alt' ></i>
          </div>
          <h3>Web Development</h3>
          <p>
            When designing any type of information system, such as a web site,
            it develops of major automatic information sharing and various international organizations.</p>
          <a href="https://www.webfx.com/web-development/glossary/what-is-web-development/" target="_blank" class="read">Read More</a>
        </div>
     
        <div class="box">
          <div class="s-icons">
            <i class='bx bx-edit-alt' ></i>
          </div>
          <h3>Creative Design</h3>
          <p>A creative designer creates artwork concepts and designs that result in many different forms based on a designer's skills.</p>
          <a href="https://in.indeed.com/career-advice/career-development/what-is-creative-design" target="_blank" class="read">Read More</a>
        </div>

      </div>
     </section-->
     
     <!---- portfolio design ---->
     <section class="portfolio" id="portfolio">
      <div class="main-text">
        <p>Portfolio</p>
        <h2><span>Sample</span> Project</h2>
      </div>

      <div class="portfolio-content">
        <div class="row">
          <img src="E-CERTIFICATE.png" alt="">
          <div class="layer">
            <h5></h5>
            <p></p>
            <a href="LOGO.php#4"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="row">
          <img src="PS.png" alt="">
          <div class="layer">
            <h5></h5>
            <p></p>
            <a href="LOGO.php#6"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="row">
          <img src="MT2.png" alt="">
          <div class="layer">
            <h5></h5>
            <p></p>
            <a href="LOGO.php#2"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="row">
          <img src="portfolio3.png" alt="">
          <div class="layer">
            <h5></h5>
            <p></p>
            <a href="LOGO.php#5"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="row">
          <img src="MT.png" alt="">
          <div class="layer">
            <h5></h5>
            <p></p>
            <a href="LOGO.php#1"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="row">
          <img src="CHECKED.png" alt="">
          <div class="layer">
            <h5></h5>
            <p></p>
            <a href="LOGO.php#3"><i class='bx bx-link-external'></i></a>
          </div>
        </div>


      </div>
     </section>

      <!---- contact design ---->
      <section class="contact" id="contact">
        <div class="contact-text">
          <h2>Contact <span>Me!</span></h2>
          <h4>Get in touched.</h4>
          <p>I'm flexible to handle your Project and <!--brave interface--> 
          athletic design for companies all accross the world.</p>
            <div class="list">
              <li><a href="">09517369044</a></li>
              <li><a href="">paulargiepurisima@gmail.com</a></li>
              <li><a href="">Like & Share</a></li>
            </div>
            <div class="contact-icon">
              <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fm.me%2Fpaulrj.prado%3Ffbclid%3DIwAR2hdbpsbh_Jt1d13RLkQ8h-deoxFlauZ1Lu-VI1tnRSHJMFrdtH2DUBfww&h=AT0PXs8OMyIDduejwTQsno1-Xvbm6UwdrjvS9QZtEJXyUmsHz-FGVoKpEfLdDrGuWmsQJ9sf3e3KgXs-OsLhYZMK0FVkOssZR_0HA3V97rVgJw0yejA2Qdw_fuH7T8lrNP11mg"><i class='bx bxl-facebook-square' ></i></a>
              <a href="" id="dis"><i class='bx bxl-twitter' ></i></a>
              <a href="" id="dis"><i class='bx bxl-instagram-alt' ></i></a>
            </div>
        </div>

        <div class="contact-form">
          <div class="sending" for="">
          <?php
            if(isset($sendsuccessfully)){
              foreach($sendsuccessfully as $sendsuccessfully){
                echo '<span class="send-msg">'.$sendsuccessfully.'</span>';
              };
            };
          ?></div>
          <form action="#" method="post">
            <input id="caps" oninput="capitalized()" type="name" placeholder="Your Company Name" name="fullname" required>
            <input id="caps1" oninput="capitalized()" type="email" placeholder="Your Email Address" name="mail" required>
            <input type="" placeholder="Your Mobile Number" name="contact" required>
            <textarea id="caps2" oninput="capitalized()" cols="30" rows="10" placeholder="How Can I Help You?" name="purpose" required></textarea>
            <input type="submit" value="Send Messege" class="submit" name="submit" required>
          </form>
          <div class="b-home">
            <a href="#home"><i class='bx bx-chevrons-up'></i></a>
          </div>
        </div>

        <!--div class="b-home">
          <a href="#home"><i class='bx bx-chevrons-up'></i></a>
        </div-->
       
      </section>
     
            <!---- footer design ---->
      <footer class="footer">
        <div class="footer-text">
          <p>Copyright@2023</p>
        </div>

        
      </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>