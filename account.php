<?php 
  include "db.php";
  if(isset($_POST['book'])){
    header("Location: rooms.php");
  }
  include "login.php";
  include "register.php";
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
  <link rel="stylesheet" href="../Hotel/CSS/account.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-Account</title>
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
            
              <li><a href="../Hotel/index.php">home</a></li>
            
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
          <form action="account.php" method="post">
            <button style="background-color: transparent; border:none" type="submit" name="book">book now</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="start-landing-page">
    <div class="landing-page">
      <div class="overlay">
        <div class="account">account</div>
      </div>
    </div>
  </div>
<!-- *************************************** -->
  <div class="start-forms">
    <div class="forms">
      <div class="container">
        <div class="log-in">
          <form action="account.php" method="post">
            <div class="member">already a member</div>
            <p>log in</p>
            <div class="user_name">
              <label for="username">username</label>
              <input type="text" id="username" name="username-login"  value="<?php echo $username_login ?>">
              <span style="color: red;"><?php echo $usernameErr_login ?></span>
            </div>
            <div class="password">
              <label for="password">password</label>
              <input type="password" id="password" name="password-login" value="<?php echo $password_login ?>">
              <span style="color: red;"><?php echo $passwordErr_login ?></span>
            </div>
            <div class="remember">
              <input type="checkbox" id="remember">
              <label for="remember">Remember me</label>
            </div>
            <input type="submit" value="log in" name="log_in">
          </form>
          <span style="color: red;"><?php echo $special_login;  ?></span>
        </div>

<!-- ***************************************************** -->
        

        <div class="registration">
          <form action="account.php" method="post">
            <div class="member">not a member</div>
            <p>registration</p>
            <div class="user_name">
              <label for="#username">username</label>
              <input type="text" id="username" name="username_signup" value="<?php echo $name_signup ?>" >
              <span style="color: red;"><?php echo $nameErr_signup; ?></span>
            </div>

            <div class="na-id">
              <label for="na-id">national id</label>
              <input type="text" id="na-id" name="na-id-signup" value="<?php echo $na_id_signup ?>" >
              <span style="color: red;"><?php echo $na_idErr_signup; ?></span>
            </div>

            <div class="phone">
              <label for="phone">phone number</label>
              <input type="text" id="phone" name="phone-signup" placeholder="+20" value="<?php echo $phone_signup ?>" >
              <span style="color: red;"><?php echo $phoneErr_signup; ?></span>
            </div>

            <div class="email">
              <label for="email">email</label>
              <input type="email" id="email" name="email-signup" value="<?php echo $email_signup ?>" >
              <span style="color: red;"><?php echo $emailErr_signup; ?></span>
            </div>

            <div class="password">
              <label for="password">password</label>
              <input type="password" id="password" name="password-signup" value="<?php echo $password_signup ?>" >
              <span style="color: red;"><?php echo $passwordErr_signup; ?></span>
            </div>

            <div class="password">
              <label for="confirm-password">confirm password</label>
              <input type="password" id="confirm-password" name="confirm-password-signup" value="<?php echo $confirm_password_signup ?>">
              <span style="color: red;"><?php echo $confirm_passwordErr_signup; ?></span>
            </div>

            <input type="submit" name="sign_up" value="sign up">
          </form>
          <span style="color: green;"><?php echo $special;  ?></span>
        </div>
      </div>
    </div>
  </div>


  <div class="start_footer">
    <div class="footer" id="contact">
      <div class="map">
        <iframe title="myframe" frameborder="0">
          <img src="src = https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3416.4930600850025!2d30.94704917559463!3d31.09602527441098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ac7babd0bb6f%3A0xc34bf4bea853836a!2sFaculty%20of%20Computers%20and%20Information!5e0!3m2!1sen!2seg!4v1700268595705!5m2!1sen!2seg" >
        </iframe>
      </div>
      <div class="contact box">
        <img title="img" src="../Hotel/images/contact.png" />
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
        <img title="img" src="../Hotel/images/drop.png" />
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
          <li> <a href="../Hotel/index.php">home</a></li>
          
            <li><a href="../Hotel/about.php">about</a></li>
        
          
            <li><a href="../Hotel/rooms.php">rooms</a></li>
          
          
            <li><a href="../Hotel/services.php">services</a></li>
          
          
            <li class="active"><a href="../Hotel/account.php">account</a></li>
          
            <li><a href="../Hotel/contact.php">contact</a></li>
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
      </div>
    </div>
  </div>
  <!-- main JS file -->
  <script src="../Hotel/JS/hotel.js"></script>
</body>

</html>