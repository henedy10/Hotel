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
  <link rel="stylesheet" href="../Hotel/CSS/about.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-About</title>
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
            <a href="#header">
              <li class="active">about</li>
            </a>
            <a href="../Hotel/rooms.php">
              <li>rooms</li>
            </a>
            <a href="../Hotel/services.php">
              <li>services</li>
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

  <div class="start-landing-page">
    <div class="landing-page">
      <div class="overlay">
        <div class="account">about us</div>
      </div>
    </div>
  </div>

  <div class="start_bay_view">
    <div class="bay_view about" id="bay_view">
      <div class="container">
        <div class="view">
          <img src="../Hotel/images/about.jpeg" alt="">
          <div class="box">
            <div class="number">
              <span>+</span>
              <div class="numm" data-num="30">0</div>
            </div>
            <p>FACILITIES</p>
          </div>
        </div>
        <div class="text">
          <p>DRINKS & BREAKFAST</p>
          <h2>Al Inclusive</h2>
          <div class="parag">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et metus augue. Mauris ut libero eget.
            </p>
          </div>
          <div class="signature">
            <div class="me">
              <img src="../Hotel/images/me.JPG" alt="">
              <div class="text">
                <h3>Abdelrahman</h3>
                <p>Hotel Manager</p>
              </div>
            </div>
            <div class="signature-img">
              <img src="../Hotel/images/signature.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_offers">
    <div class="offers">
      <div class="container">
        <p>all offers</p>
        <h2>Relax on Vacation</h2>
        <div class="boxs">
          <div class="box">
            <div class="num">1</div>
            <h3>Swimming Pool</h3>
            <p>Quisque eu euismod arcu. Morbi dapibus diam, sed interdum velit. Proin tempor nunc vel nisl condim.</p>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>In sit amet augue non dui</p>
            </div>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>Proin quis elit lacinia arcu</p>
            </div>
          </div>
          <div class="box">
            <div class="num">2</div>
            <h3>Meeting Area</h3>
            <p>Mauris vel quam vel felis maximus bibendum vel quis erat. Duis accumsan posuere felis maximus.</p>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>In sit amet augue non dui</p>
            </div>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>Proin quis elit lacinia arcu</p>
            </div>
          </div>
          <div class="box">
            <div class="num">3</div>
            <h3>Mini Club</h3>
            <p>Phasellus mattis arcu ut ante hendrerit faucibus. Sed tristique justo sed nunc sagittis, nec.</p>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>In sit amet augue non dui</p>
            </div>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>Proin quis elit lacinia arcu</p>
            </div>
          </div>
          <div class="box">
            <div class="num">4</div>
            <h3>Indoor Gym</h3>
            <p>Vivamus quis interdum neque. Aenean convallis urna at sapien dignissim, quis fringilla ipsum.</p>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>In sit amet augue non dui</p>
            </div>
            <div class="srv">
              <i class="fa-solid fa-check"></i>
              <p>Proin quis elit lacinia arcu</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_reception">
    <div class="reception">
      <div class="overlay">
        <div class="content">
          <h2>Lunch & Dinner</h2>
          <p>Mauris vel quam vel felis maximus bibendum vel quis erat. Duis accumsan posuere est quis egestas. Donec nec
            odio non tellus convallis mattis a nec purus. Duis quis tortor elit.</p>
          <button style="background-color: transparent; border:none"><a href="contact.php">contact us</a></button>
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
          <a href="#header">
            <li class="active">about</li>
          </a>
          <a href="../Hotel/rooms.php">
            <li>rooms</li>
          </a>
          <a href="../Hotel/services.php">
            <li>services</li>
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
  <script src="../Hotel/JS/about.js"></script>
</body>

</html>