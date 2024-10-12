<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="ABOUTUS.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
      integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- font-family -->
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/menu.css">
    <title>ABOUT US</title>
    <style>
      #movingImage {
        position: absolute;
        width: 100px; /* Kích thước ảnh */
        transition: transform 0.5s ease; /* Thêm hiệu ứng chuyển động */
      }
    </style>
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
                    <a class="nav-link" href="../index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../menu.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../reservation.php">Reservation</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Other</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./bootstrap-5.3.3-dist/ABOUTUS.php">About us</a></li>
                      <li><a class="dropdown-item" href="../blog.php">Blog</a></li>
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
          <img src="../img/background11.jpg" alt="background-header">
          <div class="title-header">
              <h1>About us</h1>
              <p>We’re always ready to hear your thoughts and concerns</p>
              <p class="header-link"><a href="../index.html">Home</a><span>></span><a href="./ABOUTUS.html">About us</a></p>
          </div>
      </div>
  </header>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <div class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="about_img">
              <div class="img_1">
                <img
                  id="anh1"
                  src="./img - nhahang/about-2.png"
                  alt=""
                />
              </div>
              <script>
                const image = document.getElementById("anh1");
                let position = 0; // Vị trí hiện tại
                let direction = 0.3; // Hướng di chuyển (1 = sang phải, -1 = sang trái)
                const range = 100; // Phạm vi di chuyển (trong pixel)

                function moveImage() {
                  position += direction; // Thay đổi vị trí
                  image.style.transform = `translateX(${position}px)`; // Áp dụng vị trí mới

                  // Kiểm tra để thay đổi hướng khi đến giới hạn
                  if (position >= range || position <= -range) {
                    direction *= -1; // Đổi hướng
                  }

                  requestAnimationFrame(moveImage); // Gọi lại hàm để tiếp tục di chuyển
                }

                moveImage();
              </script>
              <div class="img_2">
                <img
                  src="./img - nhahang/about-3.png"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="destination">
              <div class="des_title">
                <span
                  style="
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    color: #000;
                    font-size: 40px;
                    font-weight: 700;
                  "
                  >About restaurant</span
                >
                <h3
                  style="
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                      sans-serif;
                    font-weight: 400;
                  "
                >
                  Health and safety, along with quality, are the cornerstones of
                  our brand
                </h3>
                <p
                  style="
                    text-align: justify;
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                      'Trebuchet MS', sans-serif;
                    font-size: 18px;
                  "
                >
                  Welcome to Savory, where culinary passion meets
                  exceptional service. Nestled in the heart of Da Nang, we
                  offer a diverse menu inspired by both local flavors and
                  international cuisine. Our talented chefs use only the
                  freshest ingredients to create dishes that delight the senses.
                </p>
                <table class="list">
                  <tr>
                    <td>
                      <li>
                        <img
                          src="./img - nhahang/check-mark (2).png"
                          alt=""
                        />Food Items management
                      </li>
                    </td>
                    <td>
                      <li>
                        <img
                          src="./img - nhahang/check-mark (2).png"
                          alt=""
                        />Table reservation
                      </li>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <li>
                        <img
                          src="./img - nhahang/check-mark (2).png"
                          alt=""
                        />Customer feedback portal
                      </li>
                    </td>
                    <td>
                      <li>
                        <img
                          src="./img - nhahang/check-mark (2).png"
                          alt=""
                        />Location-based services
                      </li>
                    </td>
                  </tr>
                </table>
                <div class="btn-detail">
                  <a href="">SEE DETAILS</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="choose us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="choose_title mb-4">
              <span
                style="
                  font-family: 'Rancho';
                  color: #000;
                  font-size: 40px;
                  font-weight: 300;
                "
                >Why choose us</span
              >
              <h3
                style="
                  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                    sans-serif;
                  font-weight: 600;
                "
              >
                Let's discover food with us
              </h3>
            </div>
            <p>
              Our restaurant offers a unique dining experience with a cozy
              atmosphere, delicious dishes made from fresh ingredients, and
              friendly service. Join us for unforgettable meals!
            </p>
            <div class="btn-detail">
              <a href="">SEE DETAILS</a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <div class="box">
                  <img src="./img - nhahang/food.png" alt="" />
                  <span><b>Presentation</b></span>
                  <p></p>
                  <p>
                    Food presentation enhances the dining experience, showcasing
                    colors and textures that excite the senses and elevate each
                    dish's appeal.
                  </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box">
                  <img src="./img - nhahang/flavoring.png" alt="" />
                  <span><b>Flavor </b></span>
                  <p></p>
                  <p>
                    "Flavor pairing combines complementary tastes, creating
                    balanced dishes that delight the palate and enhance the
                    overall dining experience."
                  </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box">
                  <img src="./img - nhahang/kitchen.png" alt="" />
                  <span><b>Technique</b></span>
                  <p></p>
                  <p>
                    Culinary techniques showcase a chef's skill, transforming
                    ingredients through methods like grilling, sautéing, and
                    sous-vide for exceptional flavors.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="feedback mt-5">
      <div class="container">
        <div class="fb_title">
          <span
            style="
              font-family: Comic Sans MS;
              color: #ff0000;
              font-size: 30px;
              font-weight: 700;
            "
            ><center>Feedback</center></span
          >
          <h3
            style="
              font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial,
                sans-serif;
              font-weight: 600;
            "
          >
           
              <center><b>What Customer say about us</b></center>
            </h3>
          </div>
          <div class="slide owl-carousel owl-theme">
            <div class="item">
              <div class="box_fb">
                <div class="title_fb">
                  <table>
                    <tr>
                      <td class="fb_img">
                        <img src="./img - nhahang/young-man.png" alt="" />
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <img src="./img - nhahang/stars.png" alt="" />
                        <table>
                          <tr>
                            <td><b>David</b></td>
                          </tr>
                          <tr>
                            <td>London</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr></tr>
                  </table>
                </div>

                <p>
                  The service was exceptional! Our waiter was attentive and made
                  great recommendations. We felt very well taken care of. The
                  food was absolutely delicious! Every dish we ordered was
                  bursting with flavor.
                </p>
              </div>
            </div>
            <div class="item"><div class="box_fb">
              <div class="title_fb">
                <table>
                  <tr>
                    <td class="fb_img">
                      <img src="./img - nhahang/grandfather.png" alt="" />
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <img src="./img - nhahang/stars.png" alt="" />
                      <table>
                        <tr>
                          <td><b>Michael</b></td>
                        </tr>
                        <tr>
                          <td>Australia</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr></tr>
                </table>
              </div>

              <p>
                The service was exceptional! Our waiter was attentive and made
                great recommendations. We felt very well taken care of. The
                food was absolutely delicious! Every dish we ordered was
                bursting with flavor.
              </p>
            </div>
          </div>
            <div class="item"><div class="box_fb">
              <div class="title_fb">
                <table>
                  <tr>
                    <td class="fb_img">
                      <img src="./img - nhahang/avatar.png" alt="" />
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <img src="./img - nhahang/stars.png" alt="" />
                      <table>
                        <tr>
                          <td><b>Sarah</b></td>
                        </tr>
                        <tr>
                          <td>Korea</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr></tr>
                </table>
              </div>

              <p>
                The service was exceptional! Our waiter was attentive and made
                great recommendations. We felt very well taken care of. The
                food was absolutely delicious! Every dish we ordered was
                bursting with flavor.
              </p>
            </div></div>
            <div class="item"><div class="box_fb">
              <div class="title_fb">
                <table>
                  <tr>
                    <td class="fb_img">
                      <img src="./img - nhahang/woman (1).png" alt="" />
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <img src="./img - nhahang/stars.png" alt="" />
                      <table>
                        <tr>
                          <td><b>Emily</b></td>
                        </tr>
                        <tr>
                          <td>Canada</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr></tr>
                </table>
              </div>

              <p>
                The service was exceptional! Our waiter was attentive and made
                great recommendations. We felt very well taken care of. The
                food was absolutely delicious! Every dish we ordered was
                bursting with flavor.
              </p>
            </div>
          </div>
          <div class="item"><div class="box_fb">
            <div class="title_fb">
              <table>
                <tr>
                  <td class="fb_img">
                    <img src="./img - nhahang/woman (2).png" alt="" />
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <img src="./img - nhahang/stars.png" alt="" />
                    <table>
                      <tr>
                        <td><b>Linda</b></td>
                      </tr>
                      <tr>
                        <td>America</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr></tr>
              </table>
            </div>

            <p>
              The service was exceptional! Our waiter was attentive and made
              great recommendations. We felt very well taken care of. The
              food was absolutely delicious! Every dish we ordered was
              bursting with flavor.
            </p>
          </div>
        </div>
        <div class="item"><div class="box_fb">
          <div class="title_fb">
            <table>
              <tr>
                <td class="fb_img">
                  <img src="./img - nhahang/manager.png" alt="" />
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <img src="./img - nhahang/stars.png" alt="" />
                  <table>
                    <tr>
                      <td><b>Emily</b></td>
                    </tr>
                    <tr>
                      <td>Canada</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr></tr>
            </table>
          </div>

          <p>
            The service was exceptional! Our waiter was attentive and made
            great recommendations. We felt very well taken care of. The
            food was absolutely delicious! Every dish we ordered was
            bursting with flavor.
          </p>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div> -->

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
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:100,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
    <script src="../js/index.js"></script>
  </body>
</html>
