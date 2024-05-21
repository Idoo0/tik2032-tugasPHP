<?php
  require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <section id="home" class="full-height">
    <div class="profile-image">
      <img src="assets/photo.png" alt="Foto Profil">
    </div>
    <div class="profile-text">
      <h1>Hallooo!</h1>
      <p>Hai, saya Ridho Aditya, your favorite engginer 😎</p>
      <div class="button-down">
        <div class="button-down-cv">
          <button>Download CV</button>
        </div>
        <div class="button-contact-me">
          <button>Contact Me</button>
        </div>
      </div>
    </div>
  </section>
  <section id="gallery" class="full-height">
    <section class="carousel" aria-label="Gallery">
      <ol class="carousel__viewport">
        <li id="carousel__slide1" tabindex="0" class="carousel__slide">
          <div class="carousel__snapper">
            <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
            <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
          </div>
        </li>
        <li id="carousel__slide2" tabindex="0" class="carousel__slide">
          <div class="carousel__snapper"></div>
          <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
        </li>
        <li id="carousel__slide3" tabindex="0" class="carousel__slide">
          <div class="carousel__snapper"></div>
          <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
        </li>
        <li id="carousel__slide4" tabindex="0" class="carousel__slide">
          <div class="carousel__snapper"></div>
          <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
        </li>
      </ol>
      <aside class="carousel__navigation">
        <ol class="carousel__navigation-list">
          <li class="carousel__navigation-item">
            <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
          </li>
        </ol>
      </aside>
    </section>
  </section>

  <section id="blog" class="full-height">
    <div class="container">
      <?php
        $query = "SELECT * FROM blogs";;
        $result = mysqli_query($conn, $query); 
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) { 
      ?>

      <div class="card">
        <div class="card__header">
          <img src="https://source.unsplash.com/600x400/?<?= $row['tag'] ?>" alt="card__image" class="card__image" width="600">
        </div>
        <div class="card__body">
          <span class="tag tag-blue"><?= $row['tag'] ?></span>
          <h4>
            <a
              href="<?= $row['link'] ?>" style="text-decoration: none;">Devin
              <?= $row['title'] ?>
            </a>
          </h4>
          <p><?= $row['description'] ?></p>
        </div>
        <div class="card__footer">
          <div class="user">
            <img src="<?= $row['author_photo'] ?>" a="user__image" class="user__image">
            <div class="user__info">
              <h5><?= $row['author'] ?></h5>
              <small>wrtter</small>
            </div>
          </div>
        </div>
      </div>

      <?php
            };
          };  
      ?>
    </div>
  </section>

  <section id="contact" class="full-height">
    <div class="landing_page">
      <div class="responsive-container-block big-container">
        <div class="responsive-container-block container">
          <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 left-one">
            <div class="content-box">
              <p class="text-blk section-head">
                Get in Touch
              </p>
              <p class="text-blk section-subhead">
                Lets reach me out for further deal
                and collaboration
              </p>
              <div class="icons-container">
                <a class="share-icon">
                  <img class="img"
                    src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
                </a>
                <a class="share-icon">
                  <img class="img"
                    src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
                </a>
                <a class="share-icon">
                  <img class="img"
                    src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
                </a>
                <a class="share-icon">
                  <img class="img"
                    src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6 right-one" id="i1zj">
            <form class="form-box">
              <div class="container-block form-wrapper">
                <p class="text-blk contactus-head">
                  <a class="link" href="">
                  </a>
                  Get a quote
                </p>
                <p class="text-blk contactus-subhead">
                  We will get back to you in 24 hours
                </p>
                <div class="responsive-container-block">
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-7">
                    <input class="input" id="ijowk-7" name="FirstName" placeholder="First Name">
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i1ro7">
                    <input class="input" id="indfi-5" name="Last Name" placeholder="Last Name">
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-6 wk-ipadp-6 emial" id="ityct">
                    <input class="input" id="ipmgh-7" name="Email" placeholder="Email">
                  </div>
                  <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                    <input class="input" id="imgis-6" name="PhoneNumber" placeholder="Phone Number">
                  </div>
                </div>
                <button class="submit-btn">
                  Get quote
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<script src="script.js"></script>cr
</body>

</html>