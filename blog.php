<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/blog.css">
    <title>Blogs</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md justify-content-end navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Logo</a>
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
                </div>
            </div>
        </nav>
        <div class="header-content">
            <img src="./img/background11.jpg" alt="background-header">
            <div class="title-header">
                <h1>Blog</h1>
                <p>The various dishes are waiting for your coming to enjoy its</p>
                <p class="header-link"><a href="index.html">Home</a><span>></span><a href="blog.html">Blog</a></p>
            </div>
        </div>
    </header>
    <div class="container my-5">

        <!-- Promotions Section -->
        <h2 class="text-center my-5 title-blog">Promotions</h2>
        <div class="row">


 
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/a9/21/5b/a9215b390de0e381e134dbc54c7fb2f1.jpg" class="card-img-top" alt="Promotion">
                    <div class="card-body">
                        <h5 class="card-title">Special Discount</h5>
                        <p class="card-text">Get 20% off on all dishes this weekend!</p>
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
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/82/ff/70/82ff70603fbbefaa39d4f54d966bc216.jpg" class="card-img-top" alt="Promotion">
                    <div class="card-body">
                        <h5 class="card-title">Happy Hour</h5>
                        <p class="card-text">Join us for happy hour from 5 PM to 7 PM!</p>
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
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/8e/df/51/8edf514846b064c0f6985452c2a52dac.jpg" class="card-img-top" alt="Promotion">
                    <div class="card-body">
                        <h5 class="card-title">Free Appetizer</h5>
                        <p class="card-text">Get a free appetizer with any main course!</p>
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

        <!-- New Dishes Section -->
        <h2 class="text-center my-5 title-blog">New Dishes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/38/eb/f5/38ebf575a138511e7385dbda35669038.jpg" class="card-img-top" alt="New Dish">
                    <div class="card-body">
                        <h5 class="card-title">Spicy Pasta</h5>
                        <p class="card-text">Try our delicious Spicy Pasta, made with fresh ingredients!</p>
                        <button class="animated-button">
                            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                              </path>
                            </svg>
                            <span class="text">Oder now</span>
                            <span class="circle"></span>
                            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">         </path>
                            </svg>
                          </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/a1/33/b9/a133b9fbbfd33479aba70c55c8f367ba.jpg" class="card-img-top" alt="New Dish">
                    <div class="card-body">
                        <h5 class="card-title">Grilled Salmon</h5>
                        <p class="card-text">Experience the taste of our grilled salmon, seasoned to perfection!</p>
                        <button class="animated-button">
                            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                              </path>
                            </svg>
                            <span class="text">Order now</span>
                            <span class="circle"></span>
                            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">         </path>
                            </svg>
                          </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/8f/62/43/8f6243d9e1921082edabe6f28d6fca26.jpg" class="card-img-top" alt="New Dish">
                    <div class="card-body">
                        <h5 class="card-title">Vegan Burger</h5>
                        <p class="card-text">Our vegan burger is hearty, satisfying, and absolutely delicious!</p>
                        <button class="animated-button">
                            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                              </path>
                            </svg>
                            <span class="text">Order now</span>
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

        <!-- Bestsellers Section -->
        <h2 class="text-center my-5 title-blog">Best sellers</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/65/a9/01/65a901c58f8b816b43b9e089238e76b7.jpg" class="card-img-top" alt="Bestseller">
                    <div class="card-body">
                        <h5 class="card-title">Signature Steak</h5>
                        <p class="card-text">Our signature steak is truly a must-try for all meat lovers out there!"</p>
                        <button class="animated-button">
                            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                              </path>
                            </svg>
                            <span class="text">View details</span>
                            <span class="circle"></span>
                            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">         </path>
                            </svg>
                          </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/62/0f/c8/620fc8a1152eaba4d4b4f79b57a33214.jpg" class="card-img-top" alt="Bestseller">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Alfredo</h5>
                        <p class="card-text">Creamy and delicious, our Chicken Alfredo is a customer favorite!</p>
                        <button class="animated-button">
                            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                              </path>
                            </svg>
                            <span class="text">View details</span>
                            <span class="circle"></span>
                            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">         </path>
                            </svg>
                          </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/07/b3/fa/07b3fa5f80454a92f323140a4504ad23.jpg" class="card-img-top" alt="Bestseller">
                    <div class="card-body">
                        <h5 class="card-title">Caesar Salad</h5>
                        <p class="card-text">Fresh greens topped with our special Caesar dressing!</p>
                        <button class="animated-button">
                            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                              </path>
                            </svg>
                            <span class="text">View details</span>
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

    </div>
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

    <script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
