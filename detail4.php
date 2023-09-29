<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Product</title>
    <link rel="stylesheet" href="css/detail.css" />
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
        <li class="link"><a href="logout.php">LOGIN</a></li>
      </ul>
      <div class="nav__icons">
        <span><i class="ri-search-line"></i></span>
        <a href="shops.php"><span><i class="ri-shopping-cart-2-line"></i></span></a>
        <a href="profile.php"><span><i class="ri-shield-user-line"></i></span></a>
      </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- Awal Detail Product -->
    <div class="pagination">
      <a href="home.php"><p>Home ></p></a>
      <a href="Shops.php"><p>Shop</p></a>
    </div>

    <!-- product section -->
    <section class="product-container">
      <!-- left side -->
      <div class="img-card">
        <img src="img/detail/d-2.jpg" alt="" id="featured-image" />
        <!-- small img -->
        <div class="small-Card">
          <img src="img/detail/d-2.jpg" alt="" class="small-Img" />
          <img src="img/detail/d-4.jpg" alt="" class="small-Img" />
          <img src="img/detail/d-1.jpg" alt="" class="small-Img" />
          <img src="img/detail/d-3.jpg" alt="" class="small-Img" />
        </div>
      </div>
      <!-- Right side -->
      <div class="product-info">
        <h3>Ninja Turtles Short Sleeve T-Shirt</h3>
        <h5>Price: $89 <del>$169</del></h5>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa
          accusantium, aspernatur provident beatae corporis veniam atque
          facilis, consequuntur assumenda, vitae dignissimos iste exercitationem
          dolor eveniet alias eos ullam nesciunt voluptatum.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
          accusamus natus dolorum. Quaerat nulla quod doloremque, officia quis
          provident amet adipisci unde esse iure delectus, maxime inventore
          optio fuga nisi?
        </p>

        <div class="sizes">
          <p>Size:</p>
          <select name="Size" id="size" class="size-option">
            <option value="xxl">XXL</option>
            <option value="xl">XL</option>
            <option value="medium">Medium</option>
            <option value="small">Small</option>
          </select>
        </div>

        <div class="quantity">
          <input type="number" value="1" min="1" />
          <button>Add to Cart</button>
        </div>

        <div>
          <p>Delivery:</p>
          <p>
            Free standard shipping on orders over $35 before tax, plus free
            returns.
          </p>
          <div class="delivery">
            <p>TYPE</p>
            <p>HOW LONG</p>
            <p>HOW MUCH</p>
          </div>
          <hr />
          <div class="delivery">
            <p>Standard delivery</p>
            <p>1-4 business days</p>
            <p>$4.50</p>
          </div>
          <hr />
          <div class="delivery">
            <p>Express delivery</p>
            <p>1 business day</p>
            <p>$10.00</p>
          </div>
          <hr />
          <div class="delivery">
            <p>Pick up in store</p>
            <p>1-3 business days</p>
            <p>Free</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Detail Product -->

    <script src="js/detail-product.js"></script>
  </body>
</html>
