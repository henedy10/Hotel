<?php 
  include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- normalize -->
  <link rel="stylesheet" href="../Hotel/CSS/normalize.css">
  <!-- webfonts -->
  <link rel="stylesheet" href="../Hotel/CSS/all.min.css">
  <!-- main css file -->
  <link rel="stylesheet" href="../Hotel/CSS/services.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-Services</title>
</head>

<body>

  <div class="start_header">
    <div class="header" id="header">
      <div class="container">
        <div class="logo">
          <h3>Continental</h3>
          <p>team name</p>
        </div>
        <span><i class="fa-solid fa-bars" onclick="openmenu()"></i></span>
        <div class="nav">
          <ul id="menu">
            <i class="fa-regular fa-circle-xmark" onclick="closemenu()"></i>
            <a href="../Hotel/index.php">
              <li>home</li>
            </a>
            <a href="../Hotel/about.php">
              <li>about</li>
            </a>
            <a href="../Hotel/rooms.php">
              <li>rooms</li>
            </a>
            <a href="#header">
              <li class="active">services</li>
            </a>
            <a href="../Hotel/account.php">
              <li>account</li>
            </a>
            <a href="../Hotel/contact.php">
              <li>contact</li>
            </a>
          </ul>
          <form action="account.php" method="post">
            <button style="background-color: green; border:none; padding : 10px; border-radius:5px; color:white; cursor:pointer;" type="submit" name="book">book now</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="start_landing_page">
    <div class="landing-page">
      <div class="overlay">
        <div class="account">services</div>
      </div>
    </div>
  </div>

  <div class="start_hello">
    <div class="hello">
      <div class="container">
        <div class="text">
          <p>Hello. Our Hotel has been present for over 20 years in the city. We make the best.</p>
        </div>
        <div class="imgs">
          <div class="img img1">
            <div class="text">
              <h4>Mini Suite</h4>
              <p>ALL INCLUSIVE</p>
            </div>
          </div>
          <div class="img img2">
            <div class="text">
              <h4>Apartment</h4>
              <p>IN PROMO</p>
            </div>
          </div>
        </div>
        <div class="srvs">
          <div class="box">
            <img src="../Hotel/images/services1.png" alt="">
            <p>Proin at varius arcu. Sed posuere orci bibendum pharetra dapibus. Ut velit augue, imperdiet vel leo id,
              cursus vehicula urna.</p>
          </div>
          <div class="box">
            <img src="../Hotel/images/services2.png" alt="">
            <p>Proin at varius arcu. Sed posuere orci bibendum pharetra dapibus. Ut velit augue, imperdiet vel leo id,
              cursus vehicula urna.</p>
          </div>
          <div class="box">
            <img src="../Hotel/images/services3.png" alt="">
            <p>Proin at varius arcu. Sed posuere orci bibendum pharetra dapibus. Ut velit augue, imperdiet vel leo id,
              cursus vehicula urna.</p>
          </div>
          <div class="box">
            <img src="../Hotel/images/services4.png" alt="">
            <p>Proin at varius arcu. Sed posuere orci bibendum pharetra dapibus. Ut velit augue, imperdiet vel leo id,
              cursus vehicula urna.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_services">
    <div class="services">
      <div class="container">
        <div class="in_touch">
          <p>DAILY CLEANING</p>
          <h2>Our Goal is a Good Stay</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor tellus vel mauris scelerisque
            accumsan. Maecenas quis nunc sed sapien dignissim pulvinar. Se d at gravida.</p>
          <button style="background-color: transparent; border:none;"> <a href="rooms.php">view prices</a></button>
        </div>
        <div class="section slider">
          <i class="fa-solid fa-angle-right right"></i>
          <i class="fa-solid fa-angle-left left"></i>
          <div class="counter">
            <div class="box">
              <h2 class="num" data-num="3">0</h2>
              <p>meals</p>
            </div>
            <div class="box">
              <h2 class="num" data-num="4">0</h2>
              <p>mini clubs</p>
            </div>
            <div class="box">
              <h2 class="num" data-num="5">0</h2>
              <span>km</span>
              <p>metro</p>
            </div>
            <div class="box">
              <h2 class="num" data-num="30">0</h2>
              <p>rooms</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_footer">
    <div class="footer" id="contact">
      <div class="map">
        <iframe frameborder="0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3416.4930600850025!2d30.94704917559463!3d31.09602527441098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ac7babd0bb6f%3A0xc34bf4bea853836a!2sFaculty%20of%20Computers%20and%20Information!5e0!3m2!1sen!2seg!4v1700268595705!5m2!1sen!2seg">
        </iframe>
      </div>
      <div class="contact box">
        <img src="../Hotel/images/contact.png" />
        <h2>Contact Us</h2>
        <div class="text">
          <p>Reservation</p>
          <a href="tel:+201274892442">
            <p>+20 127 489 2442</p>
          </a>
        </div>
        <div class="text">
          <p>Booking</p>
          <a href="tel:+201558342004">
            <p>+20 155 834 2004</p>
          </a>
        </div>
      </div>
      <div class="drop box">
        <img src="../Hotel/images/drop.png" />
        <h2>Drop a Line</h2>
        <div class="text">
          <p>Information: </p>
          <a href="mailto:abdelrahmanharoun2004@gmail.com">
            <p>info@hotel.com</p>
          </a>
        </div>
        <div class="text">
          <p>Reception: </p>
          <a href="mailto:abdelrahmanharoun2004@gmail.com">
            <p>book@hotel.com</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer_contact">
    <div class="contact_footer">
      <div class="footer-content">
        <h2>Quick Links</h2>
        <p>move easily</p>
        <ul id="menu">
          <a href="../Hotel/index.php">
            <li>home</li>
          </a>
          <a href="../Hotel/about.php">
            <li>about</li>
          </a>
          <a href="../Hotel/rooms.php">
            <li>rooms</li>
          </a>
          <a href="#header">
            <li class="active">services</li>
          </a>
          <a href="../Hotel/account.php">
            <li>account</li>
          </a>
          <a href="../Hotel/contact.php">
            <li>contact</li>
          </a>
        </ul>
      </div>
      <div class="footer-content">
        <h2>Connect With Us</h2>
        <p>social media channels</p>
        <div class="icons">
          <a href="https://instagram.com/se_abdelrahman?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i
              class="fa-brands fa-instagram instagram"></i></a>
          <a href="https://x.com/se_abdelrahman?t=AIBsLyexGZbXCF_dAkPPgQ&s=09" target="_blank"><i
              class="fa-brands fa-x-twitter x"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100089165432104&mibextid=ZbWKwL" target="_blank"><i
              class="fa-brands fa-facebook-f facebook"></i></a>
          <a href="https://pin.it/rBq2URl" target="_blank"><i class="fa-brands fa-pinterest-p pinterest"></i></a>
          <a href="https://www.linkedin.com/in/abdelrahman-haroun-61858325b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
            target="_blank"><i class="fa-brands fa-linkedin-in linkedin"></i></a>
        </div>
      </div>
      <div class="footer-content">
        <h2>Phone Support</h2>
        <p>sign up for special offers</p>
        <a href="tel:01274892442">+20 127 489 2442</a>
      </div>
      <div class="footer-content">
        <h2>Newsletter</h2>
        <p>24 hours a day</p>
      </div>
    </div>
  </div>
  <!-- main JS file -->
  <script src="../Hotel/JS/services.js"></script>
</body>

</html>