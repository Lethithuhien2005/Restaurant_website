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
    <link rel="stylesheet" href="./css/menu.css">
    <title>Menu</title>
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
                <h1>Menu</h1>
                <p>The various dishes are waiting for your coming to enjoy its</p>
                <p class="header-link"><a href="index.html">Home</a><span>></span><a href="menu.html">Menu</a></p>
            </div>
        </div>
    </header>
    <main>
      <div class="menu-container">
        <div class="title">
          <div class="line4">
            <span class="line4-line"></span>
            <h3>Our Menu</h3>
            <span class="line4-line"></span>
          </div>
          <h2>Explore Our Dishes</h2>
        </div>
        <div class="menu-list">
          <button onclick="showMenu('appetizers')">
            <div class="menu-icon" id="menu1">
              <i class="fa-solid fa-plate-wheat"></i>
               <p>Appetizers</p>
             </div>
          </button>
          <span class="line4-line"></span>
          <button onclick="showMenu('main-course')">
            <div class="menu-icon" id="menu2">
              <i class="fa-solid fa-pizza-slice"></i>
               <p>Main Courses</p>
             </div>
          </button>
          <span class="line4-line"></span>
          <button onclick="showMenu('desserts')">
            <div class="menu-icon" id="menu3">
              <i class="fa-solid fa-martini-glass-citrus"></i>
              <p>Desserts</p>
            </div>
          </button>
          <span class="line4-line"></span>
          <button onclick="showMenu('drinks')">
            <div class="menu-icon" id="menu4">
              <i class="fa-solid fa-mug-hot"></i>
              <p>Drink</p>
            </div>
          </button>
        </div>
        <div class="menu-section appetizers">
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/86/f6/67/86f66716a149ee84df7325e230196a09.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Grilled cod</h4>
                <div class="card-price">
                  <p>279.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/shushi 2.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">korean kimpap</h4>
                <div class="card-price">
                  <p>219.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/background12.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Italian meatballs</h4>
                <div class="card-price">
                  <p>139.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://shibuyaparadaisu.com/wp-content/uploads/2023/07/l-intro-1642705828-1400x787.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Salmon tartare</h4>
                <div class="card-price">
                  <p>215.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/spaghetti bolognese.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">spaghetti bolognese</h4>
                <div class="card-price">
                  <p>89.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/c3/5e/49/c35e493cc45ebe1c2ed5ae62fb1e48f4.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Beef tartare</h4>
                <div class="card-price">
                  <p>149.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/ed/ed/58/eded58a097b7cfc87b398cbe705b186e.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Crispy tempura prawns</h4>
                <div class="card-price">
                  <p>99.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/background10.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Pumkin soup</h4>
                <div class="card-price">
                  <p>85.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://monngonmoingay.com/wp-content/uploads/2020/03/sup-nam-hai-san-chua-cay-500.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Seafood soup</h4>
                <div class="card-price">
                  <p>179.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-section main-course">
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://www.vanhoanggroup.com/Portals/28054/bai%20bao%20phu/7-800x500-4%20%281%29.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">beef steak</h4>
                <div class="card-price">
                  <p>189.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/shrimp.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">golden sauce shrimp</h4>
                <div class="card-price">
                  <p>179.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/gallery5-640x480.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Beef Stew with Potatoes</h4>
                <div class="card-price">
                  <p>145.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/fried chicken 2.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">fried chicken</h4>
                <div class="card-price">
                  <p>150.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/Duis fermentum felis.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Duis fermentum felis</h4>
                <div class="card-price">
                  <p>169.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/French beef stew with vegetables.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">French beef stew</h4>
                <div class="card-price">
                  <p>159.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="./img/pizza.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">pizza</h4>
                <div class="card-price">
                  <p>139.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://sun-themes.com/html/fooday/assets/images/product/product-2c.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">madagasca lopster</h4>
                <div class="card-price">
                  <p>89.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/7a/7b/80/7a7b800f8c11e95a88bcfe0b78c1578d.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Spicy Grilled Squid</h4>
                <div class="card-price">
                  <p>185.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-section desserts">
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/85/d5/ed/85d5ed59ec3726c6ec807e0c2f24f6a1.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Trifle</h4>
                <div class="card-price">
                  <p>189.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/ce/b5/57/ceb557c0639ef99c34e3d66f321a857c.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">French Toast</h4>
                <div class="card-price">
                  <p>179.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/4f/54/f2/4f54f2d3f8b0e6a3b1d06533f9d4a35e.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Fruit Tart</h4>
                <div class="card-price">
                  <p>79.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/96/aa/27/96aa27f99a46541bbd6df3283936734e.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">icecream</h4>
                <div class="card-price">
                  <p>65.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/93/1c/74/931c7452ab52df42e2935f709300ee0d.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">pudding</h4>
                <div class="card-price">
                  <p>55.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/5e/1e/34/5e1e34c04bbe9f781c361883957a7f85.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">cheese cake</h4>
                <div class="card-price">
                  <p>59.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-section drinks">
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/fe/53/10/fe53109fba458cdfa76abad9c1be2a8d.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Red Wine</h4>
                <div class="card-price">
                  <p>385.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/bb/80/db/bb80db6c26d0582d8ee1be40b3bac7f9.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Wine frost</h4>
                <div class="card-price">
                  <p>69.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/4a/f9/c7/4af9c7351f1c5cd46907b83771a0ed35.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Vodka Sangria</h4>
                <div class="card-price">
                  <p>99.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/c8/d8/60/c8d86089359b3b6fa25114fc13615dd5.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Peach Daiquiri</h4>
                <div class="card-price">
                  <p>150.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/91/1d/53/911d534d54dd12088cac67d7d44a3c0c.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Cocktail Mojito</h4>
                <div class="card-price">
                  <p>89.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/564x/81/56/4a/81564a6f4168c3afa525b9a1a3d3ab75.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Fruit Soda</h4>
                <div class="card-price">
                  <p>55.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row dish-container">
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/27/20/16/272016f0db7e9ac170c25630cc901818.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Mango Tea</h4>
                <div class="card-price">
                  <p>49.000<span>đ</span></p>
                  <button onclick="location.href='fried_chicken.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/bf/5e/71/bf5e714b2f4e799e815984e69191333b.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Pineapple soda</h4>
                <div class="card-price">
                  <p>69.000<span>đ</span></p>
                  <button onclick="location.href='spaghetti_bolognese.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 card" onclick="location.href='fried_chicken.html'">
              <img class="card-img-top" src="https://i.pinimg.com/736x/fc/fc/ba/fcfcbaa7e0d00f81b07c5aaeeec91081.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Peach Daiquiri</h4>
                <div class="card-price">
                  <p>85.000<span>đ</span></p>
                  <button onclick="location.href='french_steak.html'"><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
              </div>
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
    <script src="./js/menu.js"></script>   
</body>
</html>