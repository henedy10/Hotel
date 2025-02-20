<?php
include "db.php";
include "subscribe.php";
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
  <link rel="stylesheet" href="../Hotel/CSS/index.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental</title>
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
        <div class="head">
          <div class="nav">
            <ul id="menu">
              <i class="fa-regular fa-circle-xmark" onclick="closemenu()"></i>
              <a href="../Hotel/index.php">
                <li class="active">home</li>
              </a>
              <a href="../Hotel/about.php">
                <li>about</li>
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
          <div class="profile">
            <div class="img">
              <img src="../Hotel/images/profile.jpg" alt="">
            </div>
            <div class="text">
              <h4><a href="account.php">my account</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_landing_page">
    <div class="landing-page">
      <div class="container">
        <div class="overlay">
          <div class="text">
            <p>luxury hotel & best resort</p>
            <h2>enjoy a luxury<br>experience</h2>
            <button>rooms & suites</button>
          </div>
          <div class="check">
            <div class="stat">
              <div class="check-in">
                <span>check-in</span>
                <div class="content">
                  <div class="day" data-day="03"></div>
                  <div class="calender">
                    <div class="month" data-month="nov"></div>
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                </div>
              </div>
              <div class="check-out">
                <span>check-out</span>
                <div class="content">
                  <div class="day" data-day="18"></div>
                  <div class="calender">
                    <div class="month" data-month="dec"></div>
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                </div>
              </div>
              <div class="guests">
                <span>guests</span>
                <div class="content">
                  <div class="counter" data-count="1"></div>
                  <div class="arrows">
                    <i class="fa-solid fa-angle-up pos"></i>
                    <i class="fa-solid fa-angle-down neg"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="availability">check<br>availability</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_bay_view">
    <div class="bay_view" id="bay_view">
      <div class="container">
        <div class="view">
          <img src="../Hotel/images/view.jpg" alt="">
          <div class="box">
            <div class="number">
              <span>+</span>
              <div class="numm" data-num="30">0</div>
            </div>
            <p>BIG SUITES</p>
          </div>
        </div>
        <div class="text">
          <p>hotel bayview</p>
          <h2>Relax in our<br>Hotel Resort</h2>
          <div class="parag">
            <p>Quisque eu euismod arcu. Morbi et dapibus diam, sed interdum velit. Proin tempor nunc vel nisl
              condimentum, nec tempor risus.</p>
            <p>Curabitur a fringilla eros. Pellentesque eu interdum nulla. Pellentesque porttitor dui nec leo
              condimentum, et euismod mi mollis.</p>
            <p>Quisque eu euismod arcu. Morbi et dapibus diam, sed interdum velit. Proin tempor nunc vel nisl
              condimentum, nec tempor risus.</p>
            <p>Curabitur a fringilla eros. Pellentesque eu interdum nulla. Pellentesque porttitor dui nec leo
              condimentum, et euismod mi mollis.</p>
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

  <div class="start_rooms_types">
    <div class="rooms" id="rooms">
      <div class="container">
        <div class="img">
          <img src="../Hotel/images/room1.jpeg" alt="">
          <div class="price brown">from 25$</div>
          <div class="info">
            <p>Double Room</p>
            <div class="details">
              <div class="guests">
                <i class="fa-regular fa-circle-user"></i>
                <p>2 guests</p>
              </div>
              <div class="size">
                <img src="../Hotel/images/icon-size.png" alt="">
                <p>23 FT</p>
              </div>
            </div>
          </div>
        </div>
        <div class="img">
          <img src="../Hotel/images/room2.jpeg" alt="">
          <div class="price black">from 67$</div>
          <div class="info">
            <p>Family Room</p>
            <div class="details">
              <div class="guests">
                <i class="fa-regular fa-circle-user"></i>
                <p>3 guests</p>
              </div>
              <div class="size">
                <img src="../Hotel/images/icon-size.png" alt="">
                <p>50 FT</p>
              </div>
            </div>
          </div>
        </div>
        <div class="img">
          <img src="../Hotel/images/room3.jpeg" alt="">
          <div class="price brown">from 38$</div>
          <div class="info">
            <p>Luxury Room</p>
            <div class="details">
              <div class="guests">
                <i class="fa-regular fa-circle-user"></i>
                <p>2 guests</p>
              </div>
              <div class="size">
                <img src="../Hotel/images/icon-size.png" alt="">
                <p>30 FT</p>
              </div>
            </div>
          </div>
        </div>
        <div class="img">
          <img src="../Hotel/images/room4.jpeg" alt="">
          <div class="price black">from 56$</div>
          <div class="info">
            <p>Apartment</p>
            <div class="details">
              <div class="guests">
                <i class="fa-regular fa-circle-user"></i>
                <p>5 guests</p>
              </div>
              <div class="size">
                <img src="../Hotel/images/icon-size.png" alt="">
                <p>70 FT</p>
              </div>
            </div>
          </div>
        </div>
        <div class="img">
          <img src="../Hotel/images/room5.jpeg" alt="">
          <div class="price brown">from 76$</div>
          <div class="info">
            <p>Room With View</p>
            <div class="details">
              <div class="guests">
                <i class="fa-regular fa-circle-user"></i>
                <p>2 guests</p>
              </div>
              <div class="size">
                <img src="../Hotel/images/icon-size.png" alt="">
                <p>40 FT</p>
              </div>
            </div>
          </div>
        </div>
        <div class="img">
          <img src="../Hotel/images/room6.jpeg" alt="">
          <div class="price black">from 20$</div>
          <div class="info">
            <p>Small Room</p>
            <div class="details">
              <div class="guests">
                <i class="fa-regular fa-circle-user"></i>
                <p>1 guests</p>
              </div>
              <div class="size">
                <img src="../Hotel/images/icon-size.png" alt="">
                <p>15 FT</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_best_prices">
    <div class="best_prices">
      <div class="container">
        <p>our room prices</p>
        <h2>the best prices</h2>
        <div class="cards">
          <div class="card white">
            <h3>Single Room</h3>
            <div class="price">
              <p>$</p>
              <h3>45</h3>
              <p>/ night</p>
            </div>
            <p>
              Proin lacinia vehicula amet
              Lorem ipsum dolor sit amet
              Morbi lacinia sagittis acum
              consectetur adipiscing elit
            </p>
            <a href="../Hotel/rooms.php">more info</a>
          </div>
          <div class="card brown brown_card">
            <h3>Small Suite</h3>
            <div class="price">
              <p>$</p>
              <h3>55</h3>
              <p>/ night</p>
            </div>
            <p>
              Proin lacinia vehicula amet
              Lorem ipsum dolor sit amet
              Morbi lacinia sagittis acum
              consectetur adipiscing elit
            </p>
            <a href="../Hotel/rooms.php">more info</a>
          </div>
          <div class="card white">
            <h3>Apartment</h3>
            <div class="price">
              <p>$</p>
              <h3>72</h3>
              <p>/ night</p>
            </div>
            <p>
              Proin lacinia vehicula amet
              Lorem ipsum dolor sit amet
              Morbi lacinia sagittis acum
              consectetur adipiscing elit
            </p>
            <a href="../Hotel/rooms.php">more info</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="start_services">
    <div class="services" id="services">
      <div class="container">
        <div class="content">
          <div class="imgs">
            <div class="data">
              <div class="box">
                <h2 class="num" data-num="18">0</h2>
                <p>Rooms</p>
              </div>
              <div class="box">
                <h2 class="num" data-num="12">0</h2>
                <p>Suites</p>
              </div>
              <div class="box">
                <h2 class="num" data-num="24">0</h2>
                <p>Hours</p>
              </div>
              <div class="box">
                <h2 class="num" data-num="30">0</h2>
                <p>Stuff</p>
              </div>
            </div>
            <img src="../Hotel/images/services6.jpg" alt="">
            <img src="../Hotel/images/services5.jpg" alt="">
          </div>
          <div class="stracture">
            <p>HOTEL FACILITIES</p>
            <h2>The Structure</h2>
            <p>
              Quisque sollicitudin, nunc sit amet ullamcorper lobortis, lorem ante vehicula felis, non elementum dui
              magna nec leo. Quisque et sapien metus. Fusce sodales mauris a ligula aliquet tincidunt. Sed congue enim
              at tellus ullamcorper commodo quis eget dui.
            </p>
            <div class="prog-holder">
              <div class="prog-hold">
                <span style="width: 0;" data-width="82%"></span>
              </div>
              <div class="prog-hold">
                <span style="width: 0;" data-width="68%"></span>
              </div>
              <div class="prog-hold">
                <span style="width: 0;" data-width="73%"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="srv">
          <div class="box">
            <img src="../Hotel/images/services4.png" alt="">
            <div class="text">
              <h3>Smart Key</h3>
              <p>Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="box">
            <img src="../Hotel/images/services3.png" alt="">
            <div class="text">
              <h3>Store Luggage</h3>
              <p>Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="box">
            <img src="../Hotel/images/services2.png" alt="">
            <div class="text">
              <h3>Room Service</h3>
              <p>Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="box">
            <img src="../Hotel/images/services1.png" alt="">
            <div class="text">
              <h3>Disinfection</h3>
              <p>Lorem ipsum dolor</p>
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
          <a href="#header">
            <li class="active">home</li>
          </a>
          <a href="../Hotel/about.php">
            <li>about</li>
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
  <script src="../Hotel/JS/hotel.js"></script>
</body>

</html>