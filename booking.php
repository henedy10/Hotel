<?php 
include "db.php";
$username_booking=$usernameErr_booking="";
$password_booking=$passwordErr_booking="";
$email_booking=$emailErr_booking="";
$roomid_booking=$roomidErr_booking="";
$checkin_booking=$checkinErr_booking="";
$checkout_booking=$checkoutErr_booking="";

if(isset($_POST['submit-booking'])){
      if(empty($_POST["username-booking"])){
        $usernameErr_booking="*Your name is required,please!";
    }
      else{
        $username_booking=test_input_booking($_POST["username-booking"]);
        if(!preg_match("/^[a-zA-Z-0-9' ]*$/",$username_booking)){
            $usernameErr_booking="*Your name is Invalid!";
        }
    }

      if(empty($_POST["password-booking"])){
        $passwordErr_booking="*Your password is required,please!";
    }
      else{
        $password_booking=test_input_booking($_POST["password-booking"]);
    }

      if(empty($_POST["email-booking"])){
        $emailErr_booking="*Your email is required,please!";
    }
      else{
        $email_booking=test_input_booking($_POST["email-booking"]);
        if(!filter_var($email_booking,FILTER_VALIDATE_EMAIL)){
            $emailErr_booking="*Your email is Invalid!";
        }
    }

      if($_POST["room-id-booking"]==""){
        $roomidErr_booking="*This field is required!";
    }
      else{
        $roomid_booking=$_POST["room-id-booking"];
    }
    
      if(empty($_POST["check-in-booking"])){
        $checkinErr_booking="*This field is required!";
    }
      else{
        $checkin_booking=$_POST["check-in-booking"];
    }
    
      if(empty($_POST["check-out-booking"])){
        $checkoutErr_booking="*This field is required!";
    }
      else{
        $checkout_booking=$_POST["check-out-booking"];
    }

    // if($usernameErr_booking==""&&$passwordErr_booking==""&&$emailErr_booking==""&&$roomidErr_booking==""&&$checkinErr_booking==""&&$checkout_booking==""){

    // }

  }
    function test_input_booking($data){
      $data=htmlspecialchars($data);
      $data=trim($data);
      $data=stripslashes($data);
      return $data;
  }

















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
  <link rel="stylesheet" href="../Hotel/CSS/booking.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-Booking</title>
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
          <button>book now</button>
        </div>
      </div>
    </div>
  </div>

  <div class="start-landing-page">
    <div class="landing-page">
      <div class="overlay">
        <div class="account">booking</div>
      </div>
    </div>
  </div>

  <div class="start-forms">
    <div class="forms">
      <div class="container">
        <div class="img">
          <div class="overlay">
            <h1>Please Fill This Form...</h1>
          </div>
        </div>
        <!-- *************************** -->
        <div class="booking">
          <form action="booking.php" method="post">
            <div class="member">book a room</div>
            <p>booking</p>
            <div class="user_name">
              <label for="#username">username</label>
              <input type="text" id="username" name="username-booking" value="<?php echo $username_booking;?>" >
              <span style="color: red;"><?php echo $usernameErr_booking?></span>
            </div>
            <div class="password">
              <label for="#password">password</label>
              <input type="password" id="password" name="password-booking" value="<?php echo $password_booking  ?>">
              <span style="color: red;"><?php echo $passwordErr_booking?></span>
            </div>
            <div class="email">
              <label for="#email">email</label>
              <input type="email" id="email" name="email-booking" value="<?php echo $email_booking;?>">
              <span style="color: red;"><?php echo $emailErr_booking ?></span>
            </div>
            <div class="room_details">
              <div class="room-id">
                <label for="#room-id">room id</label>
                <select name="room-id-booking" id="room-id">
                  <option value="">Select one of them</option>
                  <optgroup label="* Small Rooms">
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="S4">S4</option>
                    <option value="S5">S5</option>
                    <option value="S6">S6</option>
                  </optgroup>
                  <optgroup label="* Double Rooms">
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="D5">D5</option>
                    <option value="D6">D6</option>
                  </optgroup>
                  <optgroup label="* Luxury Rooms">
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                  </optgroup>
                  <optgroup label="* Rooms With View">
                    <option value="V1">V1</option>
                    <option value="V2">V2</option>
                    <option value="V3">V3</option>
                  </optgroup>
                  <optgroup label="* Family Rooms">
                    <option value="F1">F1</option>
                    <option value="F2">F2</option>
                    <option value="F3">F3</option>
                    <option value="F4">F4</option>
                    <option value="F5">F5</option>
                    <option value="F6">F6</option>
                  </optgroup>
                  <optgroup label="* Apartments">
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                  </optgroup>
                </select>
                <span style="color: red;"><?php echo $roomidErr_booking?></span>
              </div>
              <div class="price">
                <label for="room_price">price</label>
                <input type="text" name="" id="room_price" value="20$" disabled>
              </div>
            </div>
            <div class="check">
              <div class="check-in">
                <label for="#check-in">check in</label>
                <input type="date" id="check-in" name="check-in-booking" value="<?php echo $checkin_booking; ?>">
                <span style="color: red;"><?php echo $checkinErr_booking ?></span>
              </div>
              <div class="check-out">
                <label for="#check-out">check out</label>
                <input type="date" id="check-out" name="check-out-booking" value="<?php echo $checkout_booking; ?>">
                <span style="color: red;"><?php echo $checkoutErr_booking ?></span>
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
      </div>
    </div>
  </div>
  <!-- main JS file -->
  <script src="../Hotel/JS/hotel.js"></script>
</body>

</html>