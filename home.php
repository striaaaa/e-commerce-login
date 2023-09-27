<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/home.css" />
    <title>Web E-Commerce</title>
  </head>
  <body>
    <!-- <div class="header__bar">Free Shipping on Orders Over $50</div> -->
    <nav class="section__container nav__container">
      <a href="#" class="nav__logo"
        ><img
          src="assets/Cuplikan_layar_2023-08-16_234236-removebg-preview.png"
          alt=""
      /></a>
      <ul class="nav__links">
        <li class="link"><a href="home.php">HOME</a></li>
        <li class="link"><a href="shops.php">SHOP</a></li>
        <li class="link"><a href="profile.php">ACCOUNT</a></li>
        <!-- <li class="link"><a href="#">BLOG</a></li> -->
        <li class="link"><a href="logout.php">LOGOUT</a></li>
      </ul>
      <div class="nav__icons">
        <span><i class="ri-search-line"></i></span>
        <span><i class="ri-shopping-cart-2-line"></i></span>
      </div>
    </nav>

    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <header>
      <div class="section__container header__container">
        <div class="header__content">
          <p>EXTRA 55% OFF IN SPRING SALE</p>
          <h1>Discover & Shop<br />The Trend Now</h1>
          <a href="Shops.html"><button class="btn">SHOP NOW</button></a>
        </div>
        <div class="header__image">
          <img src="assets/org1.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container collection__container">
      <img src="assets/7242580251_2_5_8.jpg" alt="collection" />
      <div class="collection__content">
        <h2 class="section__title">New Collection</h2>
        <p>#35 ITEMS</p>
        <h4>Available on Store</h4>
        <a href="detail4.html"><button class="btn">SHOP NOW</button></a>
      </div>
    </section>

    <section class="section__container sale__container">
      <h2 class="section__title">On Sale</h2>
      <div class="sale__grid">
        <div class="sale__card">
          <img src="assets/sale-1.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">MAN OUTERWEAR</p>
            <h4 class="sale__title">sale <span>40%</span> off</h4>
            <p class="sale__subtitle">- DON'T MISS -</p>
            <button class="btn sale__btn">SHOP NOW</button>
          </div>
        </div>
        <div class="sale__card">
          <img src="assets/sale-2.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">WOMAN T-SHIRT</p>
            <h4 class="sale__title">sale <span>25%</span> off</h4>
            <p class="sale__subtitle">- DON'T MISS -</p>
            <button class="btn sale__btn">SHOP NOW</button>
          </div>
        </div>
        <div class="sale__card">
          <img src="assets/sale-3.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">JACKETS</p>
            <h4 class="sale__title">sale <span>20%</span> off</h4>
            <p class="sale__subtitle">- DON'T MISS -</p>
            <button class="btn sale__btn">SHOP NOW</button>
          </div>
        </div>
      </div>
    </section>
    <!-- SHOPS -->

    <section id="shops">
      <div class="wrapper">
        <!-- filter Items -->
        <div class="tittle_shops">
          <a href="Shops.html"><h2 class="section__title">Shops</h2></a>
        </div>
        <nav>
          <div class="items">
            <span class="item active" data-name="all">All</span>
            <span class="item" data-name="MAN">MAN</span>
            <span class="item" data-name="WOMEN">WOMEN</span>
            <span class="item" data-name="BAG">BAG</span>
            <span class="item" data-name="SHOES">SHOES</span>
            <span class="item" data-name="WATCH">WATCH</span>
          </div>
        </nav>
        <!-- filter Images -->
        <div class="gallery">
          <div class="image" data-name="MAN">
            <span><img src="assets/man1.png" alt="" /></span>
            <h4><a href="">Basic long sleeve T-shirt</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="WOMEN">
            <span><img src="assets/women-1.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$54.00</del> $75.00</p>
          </div>
          <div class="image" data-name="BAG">
            <span><img src="assets/bag1.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="SHOES">
            <span><img src="assets/shoes1.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="WATCH">
            <span><img src="assets/watch-1.jpg" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="WOMEN">
            <span><img src="assets/women-2.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="MAN">
            <span><img src="assets/man2.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="BAG">
            <span><img src="assets/bag2.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="SHOES">
            <span><img src="assets/shoes2.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="WATCH">
            <span><img src="assets/watch-2.jpg" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="WOMEN">
            <span><img src="assets/women-3.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="MAN">
            <span><img src="assets/man3.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <!-- <div class="image" data-name="WOMEN">
            <span><img src="assets/women-4.png" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div> -->
          <!-- <div class="image" data-name="WATCH">
            <span><img src="assets/" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div>
          <div class="image" data-name="WATCH">
            <span><img src="assets/watch-5.jpg" alt="" /></span>
            <h4><a href="">Ribbed T-shirt with buttons</a></h4>
            <p><del>$45.00</del> $75.00</p>
          </div> -->
        </div>
      </div>

      <!-- fullscreen img preview box -->
      <div class="preview-box">
        <div class="details">
          <span class="title"
            >Image Category:
            <p></p
          ></span>
          <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box"><img src="" alt="" /></div>
      </div>
      <div class="shadow"></div>

      <script src="js/script-galleryshops.js"></script>
    </section>
    <!-- AKHIR SHOPS -->

    <section class="news">
      <div class="section__container news__container">
        <h2 class="section__title">Latest News</h2>
        <div class="news__grid">
          <div class="news__card">
            <img src="assets/news-1.jpg" alt="news" />
            <div class="news__details">
              <p>
                FASHION <i class="ri-checkbox-blank-circle-fill"></i>
                <span>JAMES SIMSON</span>
                <i class="ri-checkbox-blank-circle-fill"></i> FEB 2, 2019
              </p>
              <h4>Seasonal Trends</h4>
              <hr />
              <p>
                Discuss the latest fashion trends for the current season and
                offer tips and ideas on how to incorporate these trends into
                your wardrobe.
              </p>
              <a href="#"><i class="ri-arrow-right-line"></i></a>
            </div>
          </div>
          <div class="news__card">
            <img src="assets/news-2.jpg" alt="news" />
            <div class="news__details">
              <p>
                TRENDS <i class="ri-checkbox-blank-circle-fill"></i>
                <span>JAMES SIMSON</span>
                <i class="ri-checkbox-blank-circle-fill"></i> APR 15, 2019
              </p>
              <h4>Fashion Tips and Advice</h4>
              <hr />
              <p>
                Provide your readers with practical tips and advice on how to
                dress for different occasions, body types, or style preferences.
              </p>
              <a href="#"><i class="ri-arrow-right-line"></i></a>
            </div>
          </div>
          <div class="news__card">
            <img src="assets/news-3.jpg" alt="news" />
            <div class="news__details">
              <p>
                STYLE <i class="ri-checkbox-blank-circle-fill"></i>
                <span>JAMES SIMSON</span>
                <i class="ri-checkbox-blank-circle-fill"></i> JUL 22, 2019
              </p>
              <h4>Sustainable Fashion</h4>
              <hr />
              <p>
                Cover the growing trend of eco-conscious fashion and explore the
                various ways to be sustainable in your fashion choices.
              </p>
              <a href="#"><i class="ri-arrow-right-line"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container brands__container">
      <div class="brand__image">
        <img src="assets/brand-1.png" alt="brand" />
      </div>
      <div class="brand__image">
        <img src="assets/brand-2.png" alt="brand" />
      </div>
      <div class="brand__image">
        <img src="assets/brand-3.png" alt="brand" />
      </div>
      <div class="brand__image">
        <img src="assets/brand-4.png" alt="brand" />
      </div>
      <div class="brand__image">
        <img src="assets/brand-5.png" alt="brand" />
      </div>
      <div class="brand__image">
        <img src="assets/brand-6.png" alt="brand" />
      </div>
    </section>

    <hr />

    <footer class="section__container footer__container">
      <div class="footer__col">
        <h4 class="footer__heading">CONTACT INFO</h4>
        <a href="https://www.instagram.com/_satria.s/"
          ><p><i class="ri-instagram-fill"></i>@_satria.s</p></a
        >
        <p><i class="ri-mail-fill"></i>satriasahrul2@gmail.com</p>
        <p><i class="ri-phone-fill"></i> (+62) 877 7366 0568</p>
      </div>
      <!-- <div class="footer__col">
        <h4 class="footer__heading">COMPANY</h4>
        <p>Home</p>
        <p>About Us</p>
        <p>Work With Us</p>
        <p>Our Blog</p>
        <p>Terms & Conditions</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">USEFUL LINK</h4>
        <p>Help</p>
        <p>Track My Order</p>
        <p>Men</p>
        <p>Women</p>
        <p>Shoes</p>
      </div>
      <div class="footer__col">
        <h4 class="footer__heading">INSTAGRAM</h4>
        <div class="instagram__grid">
          <img src="assets/instagram-1.jpg" alt="instagram" />
          <img src="assets/instagram-2.jpg" alt="instagram" />
          <img src="assets/instagram-3.jpg" alt="instagram" />
          <img src="assets/instagram-4.jpg" alt="instagram" />
          <img src="assets/instagram-5.jpg" alt="instagram" />
          <img src="assets/instagram-6.jpg" alt="instagram" />
        </div>
      </div> -->
    </footer>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
