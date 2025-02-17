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
  <link rel="stylesheet" href="../Hotel/CSS/rooms.css">
  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Gilda+Display&family=Jomhuria&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <title>Continental-Rooms</title>
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
            <a href="#header">
              <li class="active">rooms</li>
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
        <div class="account">Rooms</div>
      </div>
    </div>
  </div>

  <div class="start_selectors">
    <div class="selectors">
      <div class="container">
        <span>
          <ul class="filter">
            <li data-type=".all" class="active">all rooms</li>
            <li data-type=".small" >small room</li>
            <li data-type=".double">double room</li>
            <li data-type=".luxury">luxury room</li>
            <li data-type=".view">room with view</li>
            <li data-type=".family">family room</li>
            <li data-type=".apartment">apartment</li>
          </ul>
      </div>
    </div>
  </div>
  </div>

  <div class="start_rooms">
    <div class="rooms">
      <div class="container">
          <?php for($i=1;$i<7;$i++):
            $sql_small_rooms="SELECT *FROM smallrooms WHERE id='$i'";
            $result_small_rooms=mysqli_query($connect,$sql_small_rooms);
            $products_small_rooms = mysqli_fetch_assoc($result_small_rooms);
            if(!$products_small_rooms["booked"]):
          ?>
          <div class="box all small">
            <div class="img">
              <img src="<?php echo $products_small_rooms["image"] ?>" alt="">
              <div class="text">
                <p>room rate</p>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="cont">
              <h2>small room</h2>
              <div class="details">
                <i class="fa-regular fa-circle-user"></i>
                <p><?php echo  $products_small_rooms["capacity"]  ?> guest</p>
                <img src="../Hotel/images/ft-room.svg" alt="">
                <p><?php echo  $products_small_rooms["area"] ?> ft</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
              <a href="../Hotel/booking.php" id="<?php echo $products_small_rooms["id_room"] .$products_small_rooms["id"]?>">
                <div class="book brown">
                  <p>book now for <?php echo $products_small_rooms["price"] ?>$</p>
                  <div class="i"><?php echo $products_small_rooms["id_room"] .$products_small_rooms["id"]?></div>
                </div>
              </a>
              <hr>
              <div class="icons">
                <img src="../Hotel/images/details.png" alt="">
                <img src="../Hotel/images/details2.png" alt="">
                <img src="../Hotel/images/details3.png" alt="">
                <img src="../Hotel/images/details4.png" alt="">
              </div>
            </div>

          </div>
          <?php endif;?>
          <?php endfor; ?>

<!-- ******************************************************* -->


      <?php for($i=1;$i<4;$i++):
                    $sql_double_rooms="SELECT *FROM doublerooms WHERE id='$i'";
                    $result_double_rooms=mysqli_query($connect,$sql_double_rooms);
                    $products_double_rooms = mysqli_fetch_assoc($result_double_rooms);
                    if(!$products_double_rooms["booked"]):
        ?>
        <div class="box all double">
          <div class="img">
            <img src="<?php echo $products_double_rooms["image"] ?>" alt="">
            <div class="text">
              <p>room rate</p>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="cont">
            <h2>double room</h2>
            <div class="details">
              <i class="fa-regular fa-circle-user"></i>
              <p><?php echo $products_double_rooms["capacity"]?> guest</p>
              <img src="../Hotel/images/ft-room.svg" alt="">
              <p><?php echo $products_double_rooms["area"]?> ft</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
            <a href="../Hotel/booking.php" id="<?php echo $products_double_rooms["id_room"].$products_double_rooms["id"]?>">
              <div class="book brown">
                <p>book now for <?php echo $products_double_rooms["price"]?>$</p>
                <div class="i"><?php echo $products_double_rooms["id_room"].$products_double_rooms["id"]?></div>
              </div>
            </a>
            <hr>
            <div class="icons">
              <img src="../Hotel/images/details.png" alt="">
              <img src="../Hotel/images/details2.png" alt="">
              <img src="../Hotel/images/details3.png" alt="">
              <img src="../Hotel/images/details4.png" alt="">
            </div>
          </div>
        </div>
        <?php endif; ?>
      <?php endfor; ?>

<!-- ************************************************************************ -->

      <?php 
        for($i=1;$i<4;$i++):
          $sql_luxury_rooms="SELECT *FROM luxuryrooms WHERE id='$i'";
          $result_luxury_rooms=mysqli_query($connect,$sql_luxury_rooms);
          $products_luxury_rooms = mysqli_fetch_assoc($result_luxury_rooms);
          if(!$products_luxury_rooms["booked"]):
      ?>
          <div class="box all luxury">
            <div class="img">
              <img src="<?php echo $products_luxury_rooms["image"] ?>" alt="">
              <div class="text">
                <p>room rate</p>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="cont">
              <h2>luxury room</h2>
              <div class="details">
                <i class="fa-regular fa-circle-user"></i>
                <p><?php echo $products_luxury_rooms["capacity"] ?> guest</p>
                <img src="../Hotel/images/ft-room.svg" alt="">
                <p><?php echo $products_luxury_rooms["area"] ?> ft</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
              <a href="../Hotel/booking.php" id="<?php echo $products_luxury_rooms["id_room"].$products_luxury_rooms["id"] ?>">
                <div class="book brown">
                  <p>book now for <?php echo $products_luxury_rooms["price"] ?>$</p>
                  <div class="i"><?php echo $products_luxury_rooms["id_room"].$products_luxury_rooms["id"] ?></div>
                </div>
              </a>
              <hr>
              <div class="icons">
                <img src="../Hotel/images/details.png" alt="">
                <img src="../Hotel/images/details2.png" alt="">
                <img src="../Hotel/images/details3.png" alt="">
                <img src="../Hotel/images/details4.png" alt="">
              </div>
            </div>
          </div>
          <?php endif ;?>
        <?php endfor; ?>

<!-- *********************************************************** -->
      <?php 
        for($i=1;$i<4;$i++):
          $sql_view_rooms="SELECT *FROM viewrooms WHERE id='$i'";
          $result_view_rooms=mysqli_query($connect,$sql_view_rooms);
          $products_view_rooms = mysqli_fetch_assoc($result_view_rooms);
          if(!$products_view_rooms["booked"]):
      ?>
          <div class="box all view">
            <div class="img">
              <img src="<?php echo $products_view_rooms["image"] ?>" alt="">
              <div class="text">
                <p>room rate</p>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="cont">
              <h2>room with view</h2>
              <div class="details">
                <i class="fa-regular fa-circle-user"></i>
                <p><?php echo $products_view_rooms["capacity"] ?> guest</p>
                <img src="../Hotel/images/ft-room.svg" alt="">
                <p><?php echo $products_view_rooms["area"] ?> ft</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
              <a href="../Hotel/booking.php" id="<?php echo $products_view_rooms["id_room"].$products_view_rooms["id"] ?>">
                <div class="book black">
                  <p>book now for <?php echo $products_view_rooms["price"] ?>$</p>
                  <div class="i"><?php echo $products_view_rooms["id_room"].$products_view_rooms["id"] ?></div>
                </div>
              </a>
              <hr>
              <div class="icons">
                <img src="../Hotel/images/details.png" alt="">
                <img src="../Hotel/images/details2.png" alt="">
                <img src="../Hotel/images/details3.png" alt="">
                <img src="../Hotel/images/details4.png" alt="">
              </div>
            </div>
          </div>

        <?php endif; ?>
        <?php endfor; ?>

<!-- ************************************* -->
      <?php 
        for($i=1;$i<4;$i++):
          $sql_family_rooms="SELECT *FROM familyrooms WHERE id='$i'";
          $result_family_rooms=mysqli_query($connect,$sql_family_rooms);
          $products_family_rooms = mysqli_fetch_assoc($result_family_rooms);
          if(!$products_family_rooms["booked"]):
      ?>

          <div class="box all family">
            <div class="img">
              <img src="<?php echo $products_family_rooms["image"] ?>" alt="">
              <div class="text">
                <p>room rate</p>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="cont">
              <h2>family room</h2>
              <div class="details">
                <i class="fa-regular fa-circle-user"></i>
                <p><?php echo $products_family_rooms["capacity"] ?> guest</p>
                <img src="../Hotel/images/ft-room.svg" alt="">
                <p><?php echo $products_family_rooms["area"] ?> ft</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
              <a href="../Hotel/booking.php" id="<?php echo $products_family_rooms["id_room"].$products_family_rooms["id"] ?>">
                <div class="book brown">
                  <p>book now for <?php echo $products_family_rooms["price"] ?>$</p>
                  <div class="i"><?php echo $products_family_rooms["id_room"].$products_family_rooms["id"] ?></div>
                </div>
              </a>
              <hr>
              <div class="icons">
                <img src="../Hotel/images/details.png" alt="">
                <img src="../Hotel/images/details2.png" alt="">
                <img src="../Hotel/images/details3.png" alt="">
                <img src="../Hotel/images/details4.png" alt="">
              </div>
            </div>
          </div>
        <?php endif;?>
        <?php endfor;?>

<!-- ************************************************* -->
    <?php 
        for($i=1;$i<4;$i++):
          $sql_apartments="SELECT *FROM apartments WHERE id='$i'";
          $result_apartments=mysqli_query($connect,$sql_apartments);
          $products_apartments = mysqli_fetch_assoc($result_apartments);
          if(!$products_apartments["booked"]):
    ?>
        <div class="box all apartment">
          <div class="img">
            <img src="<?php echo $products_apartments["image"] ?>" alt="">
            <div class="text">
              <p>room rate</p>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
          <div class="cont">
            <h2>apartment</h2>
            <div class="details">
              <i class="fa-regular fa-circle-user"></i>
              <p><?php echo $products_apartments["capacity"] ?> guest</p>
              <img src="../Hotel/images/ft-room.svg" alt="">
              <p><?php echo $products_apartments["area"] ?> ft</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
            <a href="../Hotel/booking.php" id="<?php echo $products_apartments["id_room"].$products_apartments["id"] ?>">
              <div class="book brown">
                <p>book now for <?php echo $products_apartments["price"] ?>$</p>
                <div class="i"><?php echo $products_apartments["id_room"].$products_apartments["id"] ?></div>
              </div>
            </a>
            <hr>
            <div class="icons">
              <img src="../Hotel/images/details.png" alt="">
              <img src="../Hotel/images/details2.png" alt="">
              <img src="../Hotel/images/details3.png" alt="">
              <img src="../Hotel/images/details4.png" alt="">
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php endfor; ?>
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
          <a href="#header">
            <li class="active">rooms</li>
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
          <a href="https://instagram.com/se_abdelrahman?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
            <i class="fa-brands fa-instagram instagram"></i></a>
          <a href="https://x.com/se_abdelrahman?t=AIBsLyexGZbXCF_dAkPPgQ&s=09" target="_blank">
            <i class="fa-brands fa-x-twitter x"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100089165432104&mibextid=ZbWKwL" target="_blank">
            <i class="fa-brands fa-facebook-f facebook"></i></a>
          <a href="https://pin.it/rBq2URl" target="_blank">
            <i class="fa-brands fa-pinterest-p pinterest"></i></a>
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
  <script src="../Hotel/JS/rooms.js"></script>
</body>

</html>
