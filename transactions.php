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
  <link rel="stylesheet" href="../Hotel/CSS/transactions.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-Transactions</title>
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
        <div class="account">transaction</div>
      </div>
    </div>
  </div>

  <div class="start-forms">
    <div class="forms">
      <div class="container">
        <div class="img">
          <div class="overlay">
            <h1>Please complete the transaction...</h1>
          </div>
        </div>
        <div class="transaction">
          <form action="../Hotel/index.php" method="post">
            <div class="member">transaction</div>
            <p>payment</p>
            <div class="saved">
              <p>saved cards: </p>
              <div class="saved_cards">
                <div class="number">
                  <img src="../Hotel/images/visa.png" alt="">
                  <div class="card_number">xxxx xxxx xxxx XXXX</div>
                </div>
                <button class="remove">Remove card</button>
              </div>
            </div>
            <div class="add">
              <p>add new card: </p>
              <div class="icons">
                <img src="../Hotel/images/visa.png" alt="">
                <img src="../Hotel/images/mastercard.png" alt="">
              </div>
              <div class="card_name">
                <label for="#name">card holder name</label>
                <input type="text" id="name" name="name-transaction">
              </div>
              <div class="card_details">
                <div class="card_number">
                  <label for="#card_number">card number</label>
                  <input type="text" id="card_number" name="card_number-transaction" placeholder="xxxx xxxx xxxx xxxx">
                </div>
                <div class="cvc">
                  <label for="#cvc">CVC</label>
                  <input type="text" id="cvc" name="cvc-transaction" placeholder="CVC">
                </div>
                <div class="exp">
                  <label for="#exp">Exp.date</label>
                  <input type="text" id="exp" name="exp-transaction" placeholder="MM/YY">
                </div>
              </div>
            </div>
            <input type="submit" value="book" name="submit-booking">
          </form>
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
          <p>+20 1274892442</p>
        </div>
        <div class="text">
          <p>Booking</p>
          <p>+20 1558342004</p>
        </div>
      </div>
      <div class="drop box">
        <img src="../Hotel/images/drop.png" />
        <h2>Drop a Line</h2>
        <div class="text">
          <p>Information: </p>
          <p>info@hotel.com</p>
        </div>
        <div class="text">
          <p>Reception: </p>
          <p>book@hotel.com</p>
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
          <a href="../Hotel/services.php">
            <li>services</li>
          </a>
          <a href="#header">
            <li class="active">account</li>
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
        <a href="tel:+201274892442">+20 1274892442</a>
      </div>
      <div class="footer-content">
        <h2>Newsletter</h2>
        <p>24 hours a day</p>
        <div class="subscribe">
          <input type="email" placeholder="Insert your email" required>
          <button type="submit">subscribe</button>
        </div>
      </div>
    </div>
  </div>
  <!-- main JS file -->
  <script src="../Hotel/JS/hotel.js"></script>
</body>

</html>