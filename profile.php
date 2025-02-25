<?php 

session_start();
include "db.php" ;
$name=$_SESSION['username-login'];
$sql="SELECT *FROM account WHERE name='$name'";
$result = mysqli_query($connect,$sql);
$rows=mysqli_fetch_assoc($result);
$sql_booking="SELECT *FROM booking WHERE name='$name'";
$result_booking = mysqli_query($connect,$sql_booking);
$rows_booking=mysqli_fetch_assoc($result_booking);

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
  <link rel="stylesheet" href="../Hotel/CSS/profile.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-Profile</title>
</head>

<body>
<div class="blur">
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
                <li class="active">profile</li>
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
          <div class="account">profile</div>
        </div>
      </div>
    </div>
    
    <div class="start_prifile">
      <div class="profile">
        <div class="container">
          <div class="user">
            <div class="img">
              <img src="../Hotel/images/me.JPG" alt="">
              <div class="edit">
                <button class="change">change</button>
                <button class="delete">delete</button>
              </div>
            </div>
            <div class="text">
              <div class="user_name">
                <div class="name"><?php echo  $rows['name'];?></div>
              </div>
              <div class="log_out">
                <button>log out <i class="fa-solid fa-right-from-bracket"></i></button>
              </div>
            </div>
          </div>
          <div class="filter">
            <ul>
              <li data-type="table" class="active">settings</li>
              <li data-type="dashboard">dashboard</li>
            </ul>
          </div>
          <div class="table box">
            <table>
              <tbody>
                <tr>
                  <td>email</td>
                  <td><?php echo $rows['email']; ?></td>
                  <td>
                    <button data-tab="email_tab" type="submit">edit</button>
                  </td>
                </tr>
                <tr>
                  <td>username</td>
                  <td><?php echo $rows['name']; ?></td>
                  <td>
                    <button data-tab="username_tab">edit</button>
                  </td>
                </tr>
                <tr>
                  <td>user id</td>
                  <td><?php echo $rows['id']; ?></td>
                  <td></td>
                </tr>
                <tr>
                  <td>phone number</td>
                  <td><?php echo $rows['phone']; ?></td>
                  <td>
                    <button data-tab="phone_tab">edit</button>
                  </td>
                </tr>
                <tr>
                  <td>national id</td>
                  <td><?php echo $rows['national_id']; ?></td>
                  <td></td>
                </tr>
                <tr>
                  <td>password</td>
                  <td><input type="password" name="password" value="<?php echo $rows['password']; ?> " disabled style="background-color:transparent; border:none;"></tdtyle=>
                  <td>
                    <button data-tab="password_tab">edit</button>
                  </td>
                </tr>
                <tr>
              </tbody>
            </table>
            <div class="delete_acc">
              <button>delete account</button>
            </div>
          </div>
          <div class="dashboard box">
            <table>
              <thead>
                <tr>
                  <td>user id</td>
                  <td>room id</td>
                  <td>check in</td>
                  <td>check out</td>

                </tr>
              </thead>
              <tbody>
                <?php for($i=0;$i< mysqli_num_rows($result_booking);$i++):?>
                <tr>
                  <td><?php echo $rows['id']; ?></td>
                  <td><?php echo $rows_booking['room']; ?></td>
                  <td><?php echo $rows_booking['checkin']; ?></td>
                  <td><?php echo $rows_booking['checkout']; ?></td>
                </tr>
                <?php endfor;?>
              </tbody>
            </table>
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
              <li class="active">profile</li>
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

    <div class="start_quick_links">
      <div class="quick_links">
      
      </div>
    </div>
</div>

  <div class="start_tabs">
    <div class="edit_tabs">
      <div class="email_tab tab">
        <form action="../Hotel/profile.php" method="post">
          <label for="username">Username</label>
          <input type="text" name="username" id="username">
          <label for="new_email">new email</label>
          <input type="text" name="new_email" id="new_email">
          <div class="btns">
            <input type="submit" name="edit_email" value="edit">
            <div class="button" data-close="email_tab">close</div>
          </div>
        </form>
      </div>
      <div class="phone_tab tab">
        <form action="#">
          <label for="phone">new phone number</label>
          <input type="text" name="phone" id="phone">
          <label for="password_tab">password</label>
          <input type="password" name="password_tab" id="password_tab">
          <div class="btns">
            <input type="submit" value="edit"></input>
            <div class="button" data-close="phone_tab">close</div>
          </div>
        </form>
      </div>
      <div class="username_tab tab">
        <form action="#">
          <label for="new_username">new username</label>
          <input type="text" name="new_username" id="new_username">
          <label for="password_tab">password</label>
          <input type="password" name="password_tab" id="password_tab">
          <div class="btns">
            <input type="submit" value="edit"></input>
            <div class="button" data-close="username_tab">close</div>
          </div>
        </form>
      </div>
      <div class="password_tab tab">
        <form action="#">
          <label for="old_password">old password</label>
          <input type="text" name="old_password" id="old_password">
          <label for="new_password">new password</label>
          <input type="password" name="new_password" id="new_password">
          <label for="confirm_new_password">confirm new password</label>
          <input type="password" name="confirm_new_password" id="confirm_new_password">
          <div class="btns">
            <input type="submit" value="edit"></input>
            <div class="button" data-close="password_tab">close</div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- main JS file -->
  <script src="../Hotel/JS/profile.js"></script>
</body>

</html>