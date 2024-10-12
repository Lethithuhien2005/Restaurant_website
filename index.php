<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

     <!-- jQuery và Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font-family -->
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <title>Home</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md justify-content-end navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Other</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./bootstrap-5.3.3-dist/ABOUTUS.php">About us</a></li>
                      <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                      <li><a class="dropdown-item" href="./bootstrap-5.3.3-dist/CONTACT.php">Contact</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex search-container">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <div class="btn">
                      <i class="fa fa-search"></i>
                    </div>
                </form>
                <?php if (isset($_SESSION['email'])): ?>
                  <form  action="logout.php" method="POST">
                    <button class="button-login" type="button" onclick="window.location.href='logout.php'">
                      Log out
                    </button>
                  </form>
                <?php else: ?>
                  <form  action="login.php" method="get">
                  <button class="button-login" type="button" onclick="window.location.href='login.php'">
                    Log in
                  </button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="owl-carousel owl-theme header-container">
        <div class="item">
            <img src="./img/background4.jpg" alt="">
            <div class="content-slide1">
              <div class="line1">
                <span class="line"></span>
                <i class="fa-solid fa-bowl-rice"></i>
                <span class="line"></span>
              </div>
              <h1>SAVORY RESTAURANT</h1>
              <div class="line2">
                <span class="line2-line"></span>
                <h3>Zesty</h3>
                <span class="line2-line-dot"></span>
                <h3>Flavourful</h3>
                <span class="line2-line-dot"></span>
                <h3>Tasty</h3>
                <span class="line2-line"></span>
              </div>
            </div>
        </div>
        <div class="item">
            <img src="./img/background7.jpg" alt="">
            <div class="content-slide2">
              <h2>Discover Flavors Today</h2>
              <p>Let the journey of flavor discovery begin today.<br>Every flavor is carefully crafted to offer a rich and <br> unforgettable experience. Join us in a captivating culinary world <br> where every meal is an exciting adventure</p>
            </div>
        </div>
        <div class="item">
            <img src="./img/background11.jpg" alt="" id="background-header1">
            <div class="content-slide3">
              <h2>Where each dish tells a story</h2>
              <p>As you savor every bite, you'll discover the history<br> and passion behind the recipe, making, your dining experience <br> not just a meal, but a journey through flavors and memories</p>
            </div>
        </div>
        <div class="item">
            <img src="./img/background14.jpg" alt="">
            <div class="content-slide4">
              <h2>Elevate Your Taste</h2>
              <p>Each dish is designed not just to satisfy hunger, <br>but to take you on a culinary journey that transforms <br> the ordinary into the extraordinary. Join us, <br> and discover how we can elevate your palate to new heights</p>
            </div>
        </div>
    </div>
  </header>
  <main>
    <!-- About us -->
    <div class="about-us-container">
      <div class="row col-sm-7 img-container">
          <div class="col-6 col-sm-6">
            <img class="row" src="./img/spaghetti bolognese.jpg" alt="" id="about-us-img1">
            <img class="row" src="./img/service1.jpg" alt="" id="about-us-img2">
          </div>
          <div class="col-6 col-sm-6">
            <img src="https://media.istockphoto.com/id/1409921056/vi/anh/g%C3%A0-r%C3%A1n-tr%C3%AAn-n%C4%A9a.jpg?s=612x612&w=0&k=20&c=K6RIn17LdN83HlaV0ReVBgV2_JMssSzB_R8ttH6dYro=" alt="fried chicken.jpg" id="about-us-img3">
          </div>
      </div>
      <div class="col-sm-5 about-us-content">
        <div class="line4">
          <span class="line4-line"></span>
          <h3>Discover</h3>
          <span class="line4-line"></span><br>
        </div>
        <h2>Our Story</h2>
        <h4>Proud of our start in the restaurant business</h4>
        <p>Welcome to Savory, where flavor takes center stage. Our menu features exquisite dishes made from fresh, local ingredients. Enjoy a cozy atmosphere and unforgettable dining experiences. Join us and savor the joy of great food!</p>
        <button class="see-more-btn" onclick="location.href='./bootstrap-5.3.3-dist/ABOUTUS.html'">About us</button>
      </div>
    </div>

    <!-- Open hours -->
    <div class="open-hours">
      <video autoplay muted loop playsinline src="./img/OpenHours.mp4"></video>
      <div class="video-content">
        <div class="content1">
          <h1>Opening hours</h1>
          <h3>Call for reservation</h3>
        </div>
        <div class="row content2">
          <div class="col-6 col-sm-6 time-content1">
            <h3 class="day-content">Monday to Friday</h3>
            <h2 class="time-content">09:00</h2>
            <h2 class="time-content">20:00</h2>
          </div>
          <div class="col-6 col-sm-6 time-content2">
            <h3 class="day-content">Saturday to Sunday</h3>
            <h2 class="time-content">08:00</h2>
            <h2 class="time-content">23:00</h2>
          </div>
        </div>
        <button class="book-now-btn" onclick="location.href='reservation.html'">Book now ></button>
      </div>
    </div>

    <!-- Service -->
      <div class="service-container">
        <div class="title">
          <div class="line4">
            <span class="line4-line"></span>
            <h3>Our Service</h3>
            <span class="line4-line"></span>
          </div>
          <h2>What we focus on</h2>
        </div>
        <div class="row service-content">
          <div class="col-lg-3 col-sm-6 services">
            <div class="service-icon">
              <i class="fa-solid fa-pizza-slice"></i>
              <h3 class="content-title">Quality food</h3>
              <p>Our restaurant offers a diverse menu prepared with fresh ingredients for unique flavors and elegant presentation</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 services">
            <div class="service-icon">
              <i class="fa-solid fa-champagne-glasses"></i>
              <h3 class="content-title">Private Event</h3>
              <p>Our restaurant offers private event services with an elegant and cozy atmosphere, perfect for birthday parties, family gatherings, or corporate events</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 services">
            <div class="service-icon">
              <i class="fa-regular fa-calendar-days"></i>
              <h3 class="content-title">Reservation</h3>
              <p>We offers a convenient online reservation service, allowing customers to easily select their preferred date, time, and seating with just a few clicks</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 services">
            <div class="service-icon">
              <i class="fa-solid fa-user-tie"></i>
              <h3 class="content-title">Chef team</h3>
              <p>Our restaurant boasts a professional and passionate chef team dedicated to delivering delicious and innovative dishes</p>
            </div>
          </div>
        </div>
      </div>

    <!-- Best seller -->
     <div class="best-seller">
        <div class="title">
          <div class="line4">
            <span class="line4-line"></span>
            <h3>Our Gallery</h3>
            <span class="line4-line"></span>
          </div>
          <h2>Best seller dishes</h2>
        </div>
        <div class="owl-carousel owl-theme best-seller-card">
          <div class="card" onclick="location.href='fried_chicken.html'">
            <img class="card-img-top" src="./img/fried chicken.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">fried chicken</h4>
              <div class="card-price">
                <p>150.000<span>đ</span></p>
                <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
              </div>
            </div>
          </div>
          <div class="card" onclick="location.href='fried_chicken.html'">
            <img class="card-img-top" src="./img/spaghetti bolognese.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">spaghetti bolognese</h4>
              <div class="card-price">
                <p>89.000<span>đ</span></p>
                <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
              </div>
            </div>
          </div>
          <div class="card" onclick="location.href='fried_chicken.html'">
            <img class="card-img-top" src="./img/French steak.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">French steak</h4>
              <div class="card-price">
                <p>239.000<span>đ</span></p>
                <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
              </div>
            </div>
          </div>
          <div class="card" onclick="location.href='fried_chicken.html'">
            <img class="card-img-top" src="./img/Pumpkin Shrimp Soup.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">pumpkin soup</h4>
              <div class="card-price">
                <p>85.000<span>đ</span></p>
                <button onclick="location.href='pumpkin_soup.html'"><i class="fa-solid fa-cart-shopping"></i></button>
              </div>
            </div>
          </div>
          <div class="card" onclick="location.href='fried_chicken.html'">
            <img class="card-img-top" src="./img/shrimp.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">golden sauce shrimp</h4>
              <div class="card-price">
                <p>179.000<span>đ</span></p>
                <button onclick="location.href='golden_sauce_shrimp.html'"><i class="fa-solid fa-cart-shopping"></i></button>
              </div>
            </div>
          </div>
          <div class="card" onclick="location.href='fried_chicken.html'">
            <img class="card-img-top" src="./img/shushi 2.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">kimpap</h4>
              <div class="card-price">
                <p>219.000<span>đ</span></p>
                <button onclick="location.href='shushi.html'"><i class="fa-solid fa-cart-shopping"></i></button>
              </div>
            </div>
          </div>
          <div class="card" onclick="location.href='fried_chicken.html'">
            <img class="card-img-top" src="./img/pizza.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">pizza</h4>
              <div class="card-price">
                <p>150.000<span>đ</span></p>
                <button onclick="location.href='pizza.html'"><i class="fa-solid fa-cart-shopping"></i></button>
              </div>
            </div>
          </div>
        </div>
     </div>
    <!-- Discount -->
     <div class="discount-container">
      <div class="discount-content-left">
          <p class="discount-content1">Today's special menu discount!</p>
          <h2 class="discount-content2">Up to <span class="percentage">25%</span> discount</h2>
          <p class="discount-content1">Book your table now!</p>
          <button class="see-more-btn" onclick="location.href='blog.html'">See more</button>
      </div>
      <div class="discount-content-right"></div>
     </div>
    
    <!-- Blog -->
     <div class="blog-container">
        <div class="title">
          <div class="line4">
            <span class="line4-line"></span>
            <h3>Blog & News</h3>
            <span class="line4-line"></span>
          </div>
          <h2>Get update our food</h2>
        </div>
        <div class="row blogs">
          <div class="col-md-4 col-sm-6 card">
            <img class="card-img-top" src="./img/crispy shrimp.jpg" alt="Card image" style="width: 100%;">
            <div class="card-body">
              <div class="time-blog">
                <i class="fa-solid fa-calendar-days"></i>
                <p>23/9/2024</p>
                <i class="fa-regular fa-comment"></i>
                <p>4 comments</p>
              </div>
              <div class="blog-content">
                <h3>Why You Should Try the New Dishes at Savory</h3>
                <p>At our restaurant, trying new dishes offers fresh and unique flavors, allowing you to explore tastes like never before.</p>
              </div>
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
                <span class="text">Read more</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">         </path>
                </svg>
              </button>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 card" id="blog2">
            <img class="card-img-top" src="./img/Mixed Instant Noodles.jpg" alt="Card image" style="width: 100%;">
            <div class="card-body">
              <div class="time-blog">
                <i class="fa-solid fa-calendar-days"></i>
                <p>30/9/2024</p>
                <i class="fa-regular fa-comment"></i>
                <p>2 comments</p>
              </div>
              <div class="blog-content">
                <h3>Unlocking the Secrets to Achieving Perfect Flavor</h3>
                <p>Perfect flavor comes from fresh ingredients, balanced spices, and careful cooking techniques.</p>
              </div>
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
                <span class="text">Read more</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">         </path>
                </svg>
              </button>
            </div>
          </div>
          <div class="col-md-4 card" id="blog3">
            <img class="card-img-top" src="./img/blog4.jpg" alt="Card image" style="width: 100%;">
            <div class="card-body">
              <div class="time-blog">
                <i class="fa-solid fa-calendar-days"></i>
                <p>02/10/2024</p>
                <i class="fa-regular fa-comment"></i>
                <p>3 comments</p>
              </div>
              <div class="blog-content">
                <h3>Common Mistakes When Ordering Food</h3>
                <p>When ordering food at a restaurant, many people often not carefully reviewing the menu, leading to choosing the wrong dish.</p>
              </div>
              <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                  </path>
                </svg>
                <span class="text">Read more</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">         </path>
                </svg>
              </button>
            </div>
          </div>
        </div>
     </div>
  </main>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer_content">
            <h4>About Restaurant</h4>
            <p>A cozy restaurant serving delicious, homemade dishes with friendly service.
            </p>
            <ul class="social">
              <li>
                <a href="https://daotao.vku.udn.vn/sv">
                  <img src="./img - nhahang/social (1).png" alt="">
                </a>
          
              </li>
              <li>
                <a href="https://daotao.vku.udn.vn/sv">
                  <img src="./img - nhahang/twitter.png" alt="">
                </a>
          
              </li>
              <li>
                <a href="https://daotao.vku.udn.vn/sv">
                  <img src="./img - nhahang/linkedin.png" alt="">
                </a>
          
              </li>
              <li>
                <a href="https://daotao.vku.udn.vn/sv">
                  <img src="./img - nhahang/instagram.png" alt="">
                </a>
          
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer_content">
            <h4>Our Menus</h4>
            <ul>
              <li>
                <a href="../menu.html">Appetizers</a>
              </li>
              <li>
                <a href="../menu.html">Main course</a>
              </li>
              <li>
                <a href="../menu.html">Dessert</a>
              </li>
              <li>
                <a href="../menu.html">Drink</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer_content">
            <h4>Recent Posts</h4>
            <div class="footer_post">
              <div class="img">
                <a href="blog.html">
                  <img src="./img - nhahang/food-1.png" alt="">
                </a>
              </div>
              <div class="footer_post_title">
                <a href="blog.html">New Restaurant Town Our Ple Award</a>
            
              </div>
            </div>
            <div class="footer_post">
              <div class="img">
                <a href="blog.html">
                  <img src="./img - nhahang/food-2.png" alt="">
                </a>
              </div>
              <div class="footer_post_title">
                <a href="blog.html">New Restaurant Town Our Ple Award</a>
            
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer_content">
            <h4>Contact Now</h4>
            <ul class="footer_contact">
              <li>
                <div>
                  <img src="./img - nhahang/location.png" alt="">
                </div>
                <p>470 VKU, Da Nang</p>
              </li>
              <li>
                <div>
                  <img src="./img - nhahang/telephone (1).png" alt="">
                </div>
                <p>0123456789</p>
              </li>
              <li>
                <div>
                  <img src="./img - nhahang/email (2).png" alt="">
                </div>
                <p>savory470@gmail.com</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   </footer>
  <script src="./js/index.js"></script>   
</body>
</html>
