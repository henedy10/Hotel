<?php 
session_start();
include "db.php";
$username_booking=$usernameErr_booking="";
$password_booking=$passwordErr_booking="";
$email_booking=$emailErr_booking="";
$roomid_booking=$roomidErr_booking="";
$checkin_booking=$checkinErr_booking="";
$checkout_booking=$checkoutErr_booking="";
$special_booking="";

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

    if($usernameErr_booking=="" && $passwordErr_booking=="" && $emailErr_booking=="" && $roomidErr_booking=="" && $checkinErr_booking=="" && $checkoutErr_booking==""){
      $sql_booking="SELECT *FROM account WHERE password = '$password_booking' AND name = '$username_booking' AND email='$email_booking'";
      $result_booking= mysqli_query($connect,$sql_booking);
      if(mysqli_num_rows($result_booking)>0){
        $_SESSION['username']=$username_booking;
        $_SESSION['check-in-booking']=$checkin_booking;
        $_SESSION['check-out-booking']=$checkout_booking;
        $_SESSION['roomid']=$roomid_booking;
          header("Location:transactions.php");
      }
      else{
          $special_booking="This account is not exist! Check your info ";
      }
      }

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
                <select name="room-id-booking" id="room-id" style="width: 214px;">
                  <option value="">Select one of them</option>

                  <optgroup label="* Small Rooms">
                      <?php for($i=1;$i<7;$i++):
                          $sql_small_rooms="SELECT *FROM smallrooms WHERE id='$i'";
                          $result_small_rooms=mysqli_query($connect,$sql_small_rooms);
                          $products_small_rooms = mysqli_fetch_assoc($result_small_rooms);
                          if(!$products_small_rooms["booked"]):
                      ?>
                      
                      <option value="<?php echo $products_small_rooms["id_room"] .$products_small_rooms["id"]?>"><?php echo $products_small_rooms["id_room"] .$products_small_rooms["id"]." price (".$products_small_rooms["price"]."$)"?></option>
                      <?php endif; ?>
                      <?php endfor;?>
                  </optgroup>

                  <optgroup label="* Double Rooms">
                      <?php for($i=1;$i<4;$i++):
                              $sql_double_rooms="SELECT *FROM doublerooms WHERE id='$i'";
                              $result_double_rooms=mysqli_query($connect,$sql_double_rooms);
                              $products_double_rooms = mysqli_fetch_assoc($result_double_rooms);
                              if(!$products_double_rooms["booked"]):
                      ?>
                      
                      <option value="<?php echo $products_double_rooms["id_room"] .$products_double_rooms["id"]?>"><?php echo $products_double_rooms["id_room"] .$products_double_rooms["id"]." price (".$products_double_rooms["price"]."$)"?></option>
                      <?php endif;?>
                      <?php endfor;?>
                  </optgroup>

                  <optgroup label="* Luxury Rooms">
                      <?php for($i=1;$i<4;$i++):
                              $sql_luxury_rooms="SELECT *FROM luxuryrooms WHERE id='$i'";
                              $result_luxury_rooms=mysqli_query($connect,$sql_luxury_rooms);
                              $products_luxury_rooms = mysqli_fetch_assoc($result_luxury_rooms);
                              if(!$products_luxury_rooms["booked"]):
                      ?>
                      
                      <option value="<?php echo $products_luxury_rooms["id_room"] .$products_luxury_rooms["id"]?>"><?php echo $products_luxury_rooms["id_room"] .$products_luxury_rooms["id"]." price (".$products_luxury_rooms["price"]."$)"?></option>
                      <?php endif;?>
                      <?php endfor;?>
                  </optgroup>

                  <optgroup label="* Rooms With View">
                      <?php for($i=1;$i<4;$i++):
                              $sql_view_rooms="SELECT *FROM viewrooms WHERE id='$i'";
                              $result_view_rooms=mysqli_query($connect,$sql_view_rooms);
                              $products_view_rooms = mysqli_fetch_assoc($result_view_rooms);
                              if(!$products_view_rooms["booked"]):
                      ?>
                      
                      <option value="<?php echo $products_view_rooms["id_room"] .$products_view_rooms["id"]?>"><?php echo $products_view_rooms["id_room"] .$products_view_rooms["id"]." price (".$products_view_rooms["price"]."$)"?></option>
                      <?php endif;?>
                      <?php endfor;?>
                  </optgroup>

                  <optgroup label="* Family Rooms">
                      <?php for($i=1;$i<4;$i++):
                              $sql_family_rooms="SELECT *FROM familyrooms WHERE id='$i'";
                              $result_family_rooms=mysqli_query($connect,$sql_family_rooms);
                              $products_family_rooms = mysqli_fetch_assoc($result_family_rooms);
                              if(!$products_family_rooms["booked"]):
                      ?>
                      
                      <option value="<?php echo $products_family_rooms["id_room"] .$products_family_rooms["id"]?>"><?php echo $products_family_rooms["id_room"] .$products_family_rooms["id"]." price (".$products_family_rooms["price"]."$)"?></option>
                      <?php endif;?>
                      <?php endfor;?>
                  </optgroup>

                  <optgroup label="* Apartments">
                      <?php for($i=1;$i<4;$i++):
                              $sql_apartments="SELECT *FROM apartments WHERE id='$i'";
                              $result_apartments=mysqli_query($connect,$sql_apartments);
                              $products_apartments = mysqli_fetch_assoc($result_apartments);
                              if(!$products_apartments["booked"]):
                      ?>
                      
                      <option value="<?php echo $products_apartments["id_room"] .$products_apartments["id"]?>"><?php echo $products_apartments["id_room"] .$products_apartments["id"]." price (".$products_apartments["price"]."$)"?></option>
                      <?php endif;?>
                      <?php endfor;?>
                  </optgroup>

                </select>
                <span style="color: red;"><?php echo $roomidErr_booking?></span>
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
            <span style="color: red;"><?php echo $special_booking; ?></span>
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