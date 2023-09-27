<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/style-profile.css" />
    <!-- Icon -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
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
        <li class="link"><a href="login.php">LOGOUT</a></li>
      </ul>
      <!-- <div class="nav__icons">
        <span><i class="ri-shield-user-line"></i></span>
        <span><i class="ri-search-line"></i></span>
        <span><i class="ri-shopping-cart-2-line"></i></span>
      </div> -->
    </nav>
    <!-- Akhir Navbar -->

    <div class="container">
      <div class="left-container">
        <div class="name-img">
          <div class="img">
            <img src="assets/profile.jpg" alt="" />
          </div>
          <div class="name-user">
            <h6>Satria</h6>
          </div>
        </div>
        <hr />
        <div class="content-1">
          <div class="purchase">
            <div class="title">
              <p>Purchase</p>
              <!-- <span>^</span> -->
            </div>
            <div class="content-purchase">
              <p>Waiting for payment</p>
              <p>Transaction List</p>
            </div>
          </div>
        </div>
        <div class="line"><hr /></div>

        <div class="content-1">
          <div class="purchase">
            <div class="title">
              <p>My Profile</p>
              <!-- <span>^</span> -->
            </div>
            <div class="content-purchase">
              <p>Wishlist</p>
              <p>Favorite Shop</p>
              <p>Setting</p>
            </div>
          </div>
        </div>
        <div class="line"><hr /></div>

        <!-- Container-kanan -->
      </div>
      <div class="right-container">
        <div class="header">
          <div class="active">
            <a href=""><p>Personal Data</p></a>
          </div>
          <a href=""><p>Address List</p></a>
          <a href=""><p>Payment</p></a>
        </div>
        <div class="line"><hr /></div>

        <div class="kocak">
          <div class="container-right-left">
            <div class="border-image">
              <div class="right-image">
                <img src="assets/profile.jpg" alt="" />
              </div>
              <button class="btn-photo"><p>Select Photo</p></button>

              <div class="terms">
                <p>
                  Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi
                  file yang diperbolehkan: .JPG .JPEG .PNG
                </p>
              </div>
            </div>

            <button class="btn-password">
              <p>Create A Password</p>
            </button>
            <button class="btn-sandi">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
              >
                <path
                  d="M18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM11 15.7324V18H13V15.7324C13.5978 15.3866 14 14.7403 14 14C14 12.8954 13.1046 12 12 12C10.8954 12 10 12.8954 10 14C10 14.7403 10.4022 15.3866 11 15.7324ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16Z "
                  fill="rgba(130,130,130,1)"
                ></path>
              </svg>
              <p>PIN Account</p>
            </button>
            <button class="btn-sandi">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
              >
                <path
                  d="M17.0003 13V14C17.0003 16.7696 16.3364 19.445 15.0853 21.8455L14.8585 22.2663L13.1116 21.2924C14.2716 19.2115 14.9211 16.8817 14.9935 14.4559L15.0003 14V13H17.0003ZM11.0003 10H13.0003V14L12.9948 14.3787C12.9153 17.1495 11.9645 19.7731 10.3038 21.928L10.073 22.2189L8.52406 20.9536C10.0408 19.0969 10.9145 16.8017 10.9943 14.3663L11.0003 14V10ZM12.0003 6C14.7617 6 17.0003 8.23858 17.0003 11H15.0003C15.0003 9.34315 13.6571 8 12.0003 8C10.3434 8 9.00025 9.34315 9.00025 11V14C9.00025 16.2354 8.1806 18.3444 6.72928 19.9768L6.51767 20.2067L5.06955 18.8273C6.23328 17.6056 6.92099 16.0118 6.99381 14.3027L7.00025 14V11C7.00025 8.23858 9.23883 6 12.0003 6ZM12.0003 2C16.9708 2 21.0003 6.02944 21.0003 11V14C21.0003 15.6979 20.7985 17.3699 20.4035 18.9903L20.2647 19.5285L18.3349 19.0032C18.726 17.5662 18.9475 16.0808 18.9919 14.5684L19.0003 14V11C19.0003 7.13401 15.8662 4 12.0003 4C10.4279 4 8.97663 4.51841 7.80805 5.39364L6.38308 3.96769C7.92267 2.73631 9.87547 2 12.0003 2ZM4.96794 5.38282L6.39389 6.8078C5.5635 7.91652 5.0543 9.27971 5.00431 10.7593L4.99961 10.999L5.00378 13C5.00378 14.1195 4.73991 15.2026 4.24263 16.1772L4.08648 16.4663L2.34961 15.4747C2.72889 14.8103 2.95077 14.0681 2.99539 13.2924L3.00378 13L3.00361 11C3.00025 8.87522 3.73656 6.92242 4.96794 5.38282Z"
                  fill="rgba(130,130,130,1)"
                ></path>
              </svg>
              <p>Verification</p>
            </button>
          </div>

          <div class="change-data">
            <div class="title-change">
              <p>Change Personal Data</p>
            </div>

            <div class="content-change">
              <p>Name : Satria Sahrul Ramadhan</p>
              <p>Date Of Birth : 22 October 2005</p>
              <p>Gender : Male</p>
            </div>

            <div class="change-contact">
              <div class="title-change">
                <p>Change Contact</p>
              </div>

              <div class="content-change">
                <p>Email : satriasahrul2@gmai.com</p>
                <p>No : 087773660568</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
