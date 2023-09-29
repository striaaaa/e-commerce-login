<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion Template" />
    <meta name="keywords" content="Male_Fashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Satria Shop</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Link Icon -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- navbar -->
    <nav class="section__container nav__container">
      <a href="home.html" class="nav__logo"
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
        <a href="shops.php"><span><i class="ri-shopping-cart-2-line"></i></span></a>
        <a href="profile.php"><span><i class="ri-shield-user-line"></i></span></a>

      </div>
    </nav>

    <!-- akhir navbar -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="offcanvas__option">
        <div class="offcanvas__links">
          <a href="#">Sign in</a>
          <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
          <span>Usd <i class="arrow_carrot-down"></i></span>
          <ul>
            <li>USD</li>
            <li>EUR</li>
            <li>USD</li>
          </ul>
        </div>
      </div>
      <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"
          ><img src="img/icon/search.png" alt=""
        /></a>
        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
        <a href="#"><img src="img/icon/cart.png" alt="" /> <span>0</span></a>
        <div class="price">$0.00</div>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
      </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Breadcrumb Section Begin -->
    <!-- <section class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__text">
              <h4>Shop</h4>
              <div class="breadcrumb__links">
                <a href="./home.html">Home</a>
                <span>Shop</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="shop__sidebar">
              <div class="shop__sidebar__search">
                <form action="#">
                  <input type="text" placeholder="Search..." />
                  <button type="submit">
                    <span class="icon_search"></span>
                  </button>
                </form>
              </div>
              <div class="shop__sidebar__accordion">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseOne"
                        >Categories</a
                      >
                    </div>
                    <div
                      id="collapseOne"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__categories">
                          <ul class="nice-scroll">
                            <li><a href="#">Men (15)</a></li>
                            <li><a href="#">Women (15)</a></li>
                            <li><a href="#">Bags (15)</a></li>
                            <li><a href="#">Clothing (15)</a></li>
                            <li><a href="#">Shoes (10)</a></li>
                            <li><a href="#">Accessories (15)</a></li>
                            <li><a href="#">Watch (10)</a></li>
                            <li><a href="#">Jacket (15)</a></li>
                            <li><a href="#">Hoodie (15)</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseTwo"
                        >Branding</a
                      >
                    </div>
                    <div
                      id="collapseTwo"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__brand">
                          <ul>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Pull & Bear</a></li>
                            <li><a href="#">The North Face</a></li>
                            <li><a href="#">Reebok</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseThree"
                        >Filter Price</a
                      >
                    </div>
                    <div
                      id="collapseThree"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__price">
                          <ul>
                            <li><a href="#">$0.00 - $50.00</a></li>
                            <li><a href="#">$50.00 - $100.00</a></li>
                            <li><a href="#">$100.00 - $150.00</a></li>
                            <li><a href="#">$150.00 - $200.00</a></li>
                            <li><a href="#">$200.00 - $250.00</a></li>
                            <li><a href="#">250.00+</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseFour"
                        >Size</a
                      >
                    </div>
                    <div
                      id="collapseFour"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__size">
                          <label for="xs">
                            <input type="radio" id="xs" />
                          </label>
                          <label for="sm"
                            >s
                            <input type="radio" id="sm" />
                          </label>
                          <label for="md"
                            >m
                            <input type="radio" id="md" />
                          </label>
                          <label for="xl"
                            >xl
                            <input type="radio" id="xl" />
                          </label>
                          <label for="2xl"
                            >2xl
                            <input type="radio" id="2xl" />
                          </label>
                          <label for="xxl"
                            >xxl
                            <input type="radio" id="xxl" />
                          </label>
                          <label for="3xl"
                            >3xl
                            <input type="radio" id="3xl" />
                          </label>
                          <label for="4xl"
                            >4xl
                            <input type="radio" id="4xl" />
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseFive"
                        >Colors</a
                      >
                    </div>
                    <div
                      id="collapseFive"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__color">
                          <label class="c-1" for="sp-1">
                            <input type="radio" id="sp-1" />
                          </label>
                          <label class="c-2" for="sp-2">
                            <input type="radio" id="sp-2" />
                          </label>
                          <label class="c-3" for="sp-3">
                            <input type="radio" id="sp-3" />
                          </label>
                          <label class="c-4" for="sp-4">
                            <input type="radio" id="sp-4" />
                          </label>
                          <label class="c-5" for="sp-5">
                            <input type="radio" id="sp-5" />
                          </label>
                          <label class="c-6" for="sp-6">
                            <input type="radio" id="sp-6" />
                          </label>
                          <label class="c-7" for="sp-7">
                            <input type="radio" id="sp-7" />
                          </label>
                          <label class="c-8" for="sp-8">
                            <input type="radio" id="sp-8" />
                          </label>
                          <label class="c-9" for="sp-9">
                            <input type="radio" id="sp-9" />
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseSix"
                        >Tags</a
                      >
                    </div>
                    <div
                      id="collapseSix"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__tags">
                          <a href="#">Product</a>
                          <a href="#">Bags</a>
                          <a href="#">Shoes</a>
                          <a href="#">Fashio</a>
                          <a href="#">Clothing</a>
                          <a href="#">Hats</a>
                          <a href="#">Accessories</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="shop__product__option">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="shop__product__option__left">
                    <p>Showing 1–12 of 126 results</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="shop__product__option__right">
                    <p>Sort by Price:</p>
                    <select>
                      <option value="">Low To High</option>
                      <option value="">$0 - $55</option>
                      <option value="">$55 - $100</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/1.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Reebok Men Performance Polo</h6>
                    <a href="detail-product.php" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                      <label for="pc-4">
                        <input type="radio" id="pc-4" />
                      </label>
                      <label class="active black" for="pc-5">
                        <input type="radio" id="pc-5" />
                      </label>
                      <label class="grey" for="pc-6">
                        <input type="radio" id="pc-6" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/a-1.jpeg"
                  >
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Adidas Track Jacket Adicolor Classics Firebird</h6>
                    <a href="detail2.php" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$169</h5>
                    <div class="product__color__select">
                      <label for="pc-7">
                        <input type="radio" id="pc-7" />
                      </label>
                      <label class="active black" for="pc-8">
                        <input type="radio" id="pc-8" />
                      </label>
                      <label class="grey" for="pc-9">
                        <input type="radio" id="pc-9" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/b-1.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>The North Face Women MFO Travel Fleece Tri Jacket</h6>
                    <a href="detail3.php" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$349</h5>
                    <div class="product__color__select">
                      <label for="pc-10">
                        <input type="radio" id="pc-10" />
                      </label>
                      <label class="active black" for="pc-11">
                        <input type="radio" id="pc-11" />
                      </label>
                      <label class="grey" for="pc-12">
                        <input type="radio" id="pc-12" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/d-3.jpg"
                  >
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Ninja Turtles Short Sleeve T-Shirt</h6>
                    <a href="detail4.php" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$98.49</h5>
                    <div class="product__color__select">
                      <label for="pc-16">
                        <input type="radio" id="pc-16" />
                      </label>
                      <label class="active black" for="pc-17">
                        <input type="radio" id="pc-17" />
                      </label>
                      <label class="grey" for="pc-18">
                        <input type="radio" id="pc-18" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/c-1-hd.png"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Adidas Indigo Herz Fur Hoodie</h6>
                    <a href="detail5.php" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$99.00</h5>
                    <div class="product__color__select">
                      <label for="pc-19">
                        <input type="radio" id="pc-19" />
                      </label>
                      <label class="active black" for="pc-20">
                        <input type="radio" id="pc-20" />
                      </label>
                      <label class="grey" for="pc-21">
                        <input type="radio" id="pc-21" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/e-3.png"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Adidas Trefoil Essentials Hoodie</h6>
                    <a href="detail6.php" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$129</h5>
                    <div class="product__color__select">
                      <label for="pc-22">
                        <input type="radio" id="pc-22" />
                      </label>
                      <label class="active black" for="pc-23">
                        <input type="radio" id="pc-23" />
                      </label>
                      <label class="grey" for="pc-24">
                        <input type="radio" id="pc-24" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/f-1.png"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Adidas Sportswear Undeniable Pocket Tee</h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$29.64</h5>
                    <div class="product__color__select">
                      <label for="pc-25">
                        <input type="radio" id="pc-25" />
                      </label>
                      <label class="active black" for="pc-26">
                        <input type="radio" id="pc-26" />
                      </label>
                      <label class="grey" for="pc-27">
                        <input type="radio" id="pc-27" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/g-1.png"
                  >
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Adidas Samba OG Shoes</h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$129</h5>
                    <div class="product__color__select">
                      <label for="pc-28">
                        <input type="radio" id="pc-28" />
                      </label>
                      <label class="active black" for="pc-29">
                        <input type="radio" id="pc-29" />
                      </label>
                      <label class="grey" for="pc-30">
                        <input type="radio" id="pc-30" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/h-1.jpg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Pull & Bear Rubberised Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$179</h5>
                    <div class="product__color__select">
                      <label for="pc-31">
                        <input type="radio" id="pc-31" />
                      </label>
                      <label class="active black" for="pc-32">
                        <input type="radio" id="pc-32" />
                      </label>
                      <label class="grey" for="pc-33">
                        <input type="radio" id="pc-33" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item sale">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/i-1.png"
                  >
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>The North Face Men Bunker Pant</h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$21.39</h5>
                    <div class="product__color__select">
                      <label for="pc-34">
                        <input type="radio" id="pc-34" />
                      </label>
                      <label class="active black" for="pc-35">
                        <input type="radio" id="pc-35" />
                      </label>
                      <label class="grey" for="pc-36">
                        <input type="radio" id="pc-36" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/j-1.jpeg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Air Jordan 1 Mid SE Craft</h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$199</h5>
                    <div class="product__color__select">
                      <label for="pc-37">
                        <input type="radio" id="pc-37" />
                      </label>
                      <label class="active black" for="pc-38">
                        <input type="radio" id="pc-38" />
                      </label>
                      <label class="grey" for="pc-39">
                        <input type="radio" id="pc-39" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/k-1.jpg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Pull & Bear Wolf Graphic T-Shirt</h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$21.39</h5>
                    <div class="product__color__select">
                      <label for="pc-40">
                        <input type="radio" id="pc-40" />
                      </label>
                      <label class="active black" for="pc-41">
                        <input type="radio" id="pc-41" />
                      </label>
                      <label class="grey" for="pc-42">
                        <input type="radio" id="pc-42" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/l-1.png"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>
                      Adidas Essentials Fleece 3-Stripes Tapered Cuff Pants
                    </h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$27.88</h5>
                    <div class="product__color__select">
                      <label for="pc-40">
                        <input type="radio" id="pc-40" />
                      </label>
                      <label class="active black" for="pc-41">
                        <input type="radio" id="pc-41" />
                      </label>
                      <label class="grey" for="pc-42">
                        <input type="radio" id="pc-42" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/m-1.jpg"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Pull & Bear Black Label Flower Photo T-Shirt</h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$29.39</h5>
                    <div class="product__color__select">
                      <label for="pc-40">
                        <input type="radio" id="pc-40" />
                      </label>
                      <label class="active black" for="pc-41">
                        <input type="radio" id="pc-41" />
                      </label>
                      <label class="grey" for="pc-42">
                        <input type="radio" id="pc-42" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="img/detail/n-1.png"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="img/icon/compare.png" alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a href="#"><img src="img/icon/search.png" alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6>Adidas Gazelle Indoor Shoes</h6>
                    <a href="#" class="add-cart">Shop Now</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$41.39</h5>
                    <div class="product__color__select">
                      <label for="pc-40">
                        <input type="radio" id="pc-40" />
                      </label>
                      <label class="active black" for="pc-41">
                        <input type="radio" id="pc-41" />
                      </label>
                      <label class="grey" for="pc-42">
                        <input type="radio" id="pc-42" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="product__pagination">
                  <a class="active" href="#">1</a>
                  <a href="Shops2.html">2</a>
                  <a href="#">3</a>
                  <span>...</span>
                  <a href="#">21</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shop Section End -->

    <!-- Search Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search End -->

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
