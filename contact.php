<?php 
  include "db.php";
  $name_contact=$nameErr_contact="";
  $email_contact=$emailErr_contact="";
  $message_contact=$messageErr_contact="";
  $special_contact=$success_contact="";
  if(isset($_POST['send'])){
    if(empty($_POST["user_name_contact"])){
      $nameErr_contact="*Your name is required,please!";
      }

    else{
        $name_contact=test_input_contact($_POST["user_name_contact"]);
        if(!preg_match("/^[a-zA-Z-0-9' ]*$/",$name_contact)){
            $nameErr_contact="*Your name is Invalid!";
        }
    }

    if(empty($_POST["email_contact"])){
      $emailErr_contact="*Your email is required,please!";
      }
    else{
        $email_contact=test_input_contact($_POST["email_contact"]);
        if(!filter_var($email_contact,FILTER_VALIDATE_EMAIL)){
            $emailErr_contact="*Your email is Invalid!";
        }
      }

    if(empty($_POST["message_contact"])){
      $messageErr_contact="*Your message is required,please!";
      }
    else{
        $message_contact=$_POST["message_contact"];
      }

      if($nameErr_contact==""&&$emailErr_contact==""&&$messageErr_contact==""){
        $sql_contact="SELECT name,email FROM account WHERE name='$name_contact' AND email='$email_contact'";
        $result_contact=mysqli_query($connect,$sql_contact);
        if(mysqli_num_rows($result_contact)>0){
          $sql_contact="SELECT name,email FROM contact WHERE name='$name_contact' AND email='$email_contact'";
          $result_contact=mysqli_query($connect,$sql_contact);
          if(mysqli_num_rows($result_contact)>0){
            $special_contact="You already sent a message before";
          }
          else{
            $sql_contact="INSERT INTO contact (name,email,message) VALUES('$name_contact','$email_contact','$message_contact')";
            $result_contact=mysqli_query($connect,$sql_contact);
            if($result_contact){
              $success_contact="Your message sent successfully";
            }
          }
        }

        else{
          $special_contact="This account is not exist, you must create an account!";
        }
      }
  }

  function test_input_contact($data){
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
  <link rel="stylesheet" href="../Hotel/CSS/contact.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-Contact</title>
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
            <a href="#header">
              <li class="active">contact</li>
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
        <div class="account">contact</div>
      </div>
    </div>
  </div>

  <div class="start_contact">
    <div class="contact_body">
      <div class="container">
        <div class="reservation">
          <div class="box">
            <img src="../Hotel/images/srv1.png" alt="">
            <h2>Reception 24h / 7 Days</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec</p>
          </div>
          <div class="box">
            <img src="../Hotel/images/srv2.png" alt="">
            <h2>Reservation Online</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec</p>
          </div>
        </div>
        <div class="content">
          <div class="in_touch">
            <p>contact us</p>
            <h2>Get In Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor tellus vel mauris scelerisque
              accumsan. Maecenas quis nunc sed sapien dignissim pulvinar. Se d at gravida.</p>
            <button style="background-color: transparent; border:none;"><a href="rooms.php">view prices</a></button>
          </div>
          <!-- *********************************** -->
          <div class="form">
            <form action="contact.php" method="post">
              <span style=" color : red; font-weight: bolder;">* You can send one message only!</span>
              <div class="name">
                <input type="text" name="user_name_contact" placeholder="Username" value="<?php echo $name_contact?>">
                <span style="color: red;"><?php echo $nameErr_contact; ?></span>
              </div>
              
              <div class="email">
                <input type="email" name="email_contact" placeholder="Email"  value="<?php echo $email_contact?>">
                <span style="color: red;"><?php echo $emailErr_contact; ?></span>
              </div>

              <div class="message">
                <textarea name="message_contact" placeholder="Message"  ><?php echo $message_contact?></textarea>
                <span style="color: red;"><?php echo $messageErr_contact; ?></span> 
              </div> <br>
              
              <div class="input">
                <input type="submit" name="send" value="SEND">
                <span style=" color: red;"><?php echo  $special_contact; ?></span>
              </div>
              <span style="color: green; font-weight:bolder;"><?php echo $success_contact ?></span>
            </form>
          </div>
          <!-- ************************************ -->
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
        <h2>Hotel Info</h2>
        <div class="text">
          <i class="fa-solid fa-location-dot"></i>
          <p>FCI-KFU-KFS-EGY</p>
        </div>
        <div class="text">
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+201274892442">
            <p>+20 127 489 2442</p>
          </a>
        </div>
        <div class="text">
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:abdelrahman2004@gmail.com">
            <p>info@hotel.com</p>
          </a>
        </div>
        <button><a href="#">CONTACT US</a></button>
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
          <a href="../Hotel/account.php">
            <li>account</li>
          </a>
          <a href="#header">
            <li class="active">contact</li>
          </a>
        </ul>
      </div>
      <div class="footer-content">
        <h2>Connect With Us</h2>
        <p>social media channels</p>
        <div class="icons">
          <a href="https://instagram.com/se_abdelrahman?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" rel="noopener noreferrer" title="...."><i
              class="fa-brands fa-instagram instagram"></i></a>
          <a href="https://x.com/se_abdelrahman?t=AIBsLyexGZbXCF_dAkPPgQ&s=09" target="_blank" rel="noopener noreferrer" title="...."><i
              class="fa-brands fa-x-twitter x"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100089165432104&mibextid=ZbWKwL" target="_blank"rel="noopener noreferrer" title="...."><i
              class="fa-brands fa-facebook-f facebook" rel="noopener"></i></a>
          <a href="https://pin.it/rBq2URl" target="_blank" rel="noopener"><i class="fa-brands fa-pinterest-p pinterest"rel="noopener noreferrer" title="...."></i></a>
          <a href="https://www.linkedin.com/in/abdelrahman-haroun-61858325b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
            target="_blank"  rel="noopener noreferrer" title="...."><i class="fa-brands fa-linkedin-in linkedin"></i></a>
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