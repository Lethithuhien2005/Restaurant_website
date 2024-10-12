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

    <!-- Date -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/default.css">

    <!-- Font-family -->
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/reservation.css">
    <title>Reservation</title>
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
                        <a class="nav-link" href="#">Reservation</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Other</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="./bootstrap-5.3.3-dist/ABOUTUS.php">About us</a></li>
                          <li><a class="dropdown-item" href="blog.html">Blog</a></li>
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
                    <button class="button-login" onclick="location.href='login.html'">
                        Log in
                    </button>
                </div>
            </div>
        </nav>
        <div class="header-content">
            <img src="https://i.pinimg.com/564x/58/24/19/582419057d4c33f61ee59e084f46f047.jpg" alt="background-header">
            <div class="title-header">
                <h1>Reservation</h1>
                <p>Make your reservation and savor our culinary delights</p>
                <p class="header-link"><a href="index.html">Home</a><span>></span><a href="reservation.html">Reservation</a></p>
            </div>
        </div>
    </header>
    <main>
      <div class="reservation-container">
        <div class="title">
          <h3>Reservation form</h3>
        </div>
        <div class="reservation-form">
          <p>We willing to help you make the reservation online to save your time and money or if you want to reservate table for greater than 12 people, you can call us directly through the customer service hotline: <span class="hotline">0123456789</span></p>
          <form action="#">
            <div class="row form-content">
              <div class="col-sm-6">
                <i class="fa-solid fa-user"></i>
                <input class="form-tag" type="text" placeholder="Your name" name="">
              </div>
              <div class="col-sm-6">
                <i class="fa-solid fa-envelope"></i>
                <input class="form-tag" type="text" placeholder="Email" name="">
              </div>
            </div>
            <div class="row form-content">
              <div class="col-sm-6">
                <i class="fa-solid fa-phone"></i>
                <input class="form-tag" type="text" placeholder="Phone" name="">
              </div>
              <div class="col-sm-6">
                <i class="fa-solid fa-user-group"></i>
                <select type="text" class="form-tag">
                  <option>1 Person</option>
                  <option>2 People</option>
                  <option>3 People</option>
                  <option>4 People</option>
                  <option>5 People</option>
                  <option>6 People</option>
                  <option>7 People</option>
                  <option>8 People</option>
                  <option>9 People</option>
                  <option>10 People</option>
                  <option>11 People</option>
                  <option>12 People</option>
                </select>
              </div>
            </div>
            <div class="row form-content">
              <div class="col-sm-6">
                <i class="fa-solid fa-calendar-days"></i>
                <input id="date" class="form-tag" type="date" placeholder="Date" name="">
              </div>
              <div class="col-sm-6">
                <i class="fa-solid fa-clock"></i>
                <select type="text" class="form-tag">
                  <option>7:00</option>
                  <option>8:00</option>
                  <option>9:00</option>
                  <option>10:00</option>
                  <option>11:00</option>
                  <option>12:00</option>
                  <option>13:00</option>
                  <option>14:00</option>
                  <option>15:00</option>
                  <option>16:00</option>
                  <option>17:00</option>
                  <option>18:00</option>
                  <option>19:00</option>
                  <option>20:00</option>
                  <option>21:00</option>
                  <option>22:00</option>
                  <option>23:00</option>
                </select>
              </div>
            </div>
            <div class="row form-content">
             <textarea name="" id="" placeholder="Your note"></textarea>
            </div>
            <div class="row form-button">
              <button class="button"> Book table <i class="fa-solid fa-paper-plane"></i></button>
            </div>
          </form>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
      flatpickr("#date", {
        dateFormat: "d-m-Y",
      });
    </script>
</body>
</html>

