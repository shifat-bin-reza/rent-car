<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>RENT A CAR</title>
  </head>

  <body>
    <div>
      <div class="container">
        <nav>
          <h1 class="logo">RENT A CAR</h1>
          <ul class="nav-items">
            <div id="inside-nav-items" class="inside-nav-items">
              <li><a href="#">Home</a></li>
              <li><a href="#header-banner">About</a></li>
              <li><a href="#popular-collection">Collection</a></li>
              <li><a href="#footer-container">Contact</a></li>
            </div>
          </ul>
          <button class="admin"><a href="admin.php">Admin Login</a></button>
        </nav>

        <div id="header-banner" class="header-banner">
          <div class="header-banner-left">
            <h1>Start your journey as influencer</h1>
            <p class="header-banner-left-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem
              vestibulum sed scelerisque eros. Lectus faucibus. 
            </p>
            <button>
              <a id="btn-preebook" href="#popular-collection">Preebook now</a>
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div class="header-banner-right">
            <img src="./images/car1.jpg" alt="" />
          </div>
        </div>
        <main>
          
          <div class="company-brands">
            <img src="./logos/Alibaba.svg" alt="" />
            <img src="./logos/Amazon.svg" alt="" />
            <img src="./logos/Daraz.pk Logo.svg" alt="" />
            <img src="./logos/Ebay.svg" alt="" />
            <img src="./logos/Rakuten.svg" alt="" />
            <img src="./logos/Target.svg" alt="" />
            <img src="./logos/Walmart.svg" alt="" />
          </div>

          <div id="popular-collection" class="popular-collection">
            <h1>Popular Collection</h1>
            <div class="popular-collection-items">
              <div class="card">
                <img src="./images/car2.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">Blue Jeep</h2>
                  <p class="card-text">$5500.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img src="./images/car3.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">Black Sport Car</h2>
                  <p class="card-text">$5000.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img src="./images/car4.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">Sedan</h2>
                  <p class="card-text">$6000.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img src="./images/car5.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">White Modern Sport Car</h2>
                  <p class="card-text">$4500.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img src="./images/car6.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">White Offroader Jeep</h2>
                  <p class="card-text">$5000.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img src="./images/car7.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">Tesla</h2>
                  <p class="card-text">$7000.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img
                  src="./images/car8.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h2 class="card-title">Marcities</h2>
                  <p class="card-text">$5500.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img src="./images/car9.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">Sedan V2</h2>
                  <p class="card-text">$5000.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>

              <div class="card">
                <img src="./images/car3.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h2 class="card-title">Toyota</h2>
                  <p class="card-text">$4000.48</p>
                  <div class="collection-item-ratings">
                    <div class="stars">
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                      <img src="./images/star.png" alt="" />
                    </div>
                    <div class="star-number">
                      <p>5.00</p>
                    </div>
                  </div>
                  <p class="collection-item-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Numquam, dolorum.
                  </p>
                  <button class="button-booknow">Book Now</button>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <footer id="footer-container">
      <div class="footer-container">
        <div>
          <h2>RENT A CAR</h2>
          <p>Copyright © Team Outliers All rights reserved</p>
          <div class="footer-icons">
            <a href="https://github.com/shifat-bin-reza" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/md-shifat-bin-reza/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.facebook.com/md.rudro.33886/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.youtube.com/channel/UC10fMvJs--GM_QMNFBzuuRw" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/script.js"></script>
    <!-- Bootstrap -->
    <script rel="stylesheet" href="node_modules/bootstrap/dist/js/bootstrap.bundle.js"> </script>
  </body>
</html>
