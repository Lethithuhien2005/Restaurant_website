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
    <title>Name of your restaurant</title>
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
                    <a class="nav-link" href="">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Reservation</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Other</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">About us</a></li>
                      <li><a class="dropdown-item" href="#">Blog</a></li>
                      <li><a class="dropdown-item" href="#">Contact</a></li>
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
    <div class="owl-carousel owl-theme">
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
    <script src="./js/index.js"></script>   
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
        <button class="see-more-btn" onclick="location.href='aboutUs.html'">About us</button>
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
  </main>
</body>
</html>
