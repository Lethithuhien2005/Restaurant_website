<?php
    session_start();
    include("database_conn.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $date_of_birth = $_POST['date_of_birth'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_id = $_POST['type-user'];
 
        if (!empty($email) && !empty($password)) {
            // Encrypting password before storing in database:
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
            $query = 'INSERT INTO user(Name, Date_of_birth, Gender, Address, Email, Password, User_ID) VALUE (:name, :date_of_birth, :gender, :address, :email, :password, :user_id)';
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':date_of_birth', $date_of_birth);
            $statement->bindValue(':gender', $gender);
            $statement->bindValue(':address', $address);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':password', $encrypted_password);
            $statement->bindValue(':user_id', $user_id);
            $statement->execute();
            $statement->closeCursor();

            echo "<script type='text/javascript'> alert('Successfully register')</script>";
            header("location:login.php");
        } else {
            echo "<script type='text/javascript'> alert('Please enter some valid information')</script>";
        }
    }
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
    <link rel="stylesheet" href="./css/logup.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Login</title>
    <style>
        .navbar {
            background-color: #000;
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
    </header>
    
    <main>
        <div class="container">
            <form class="form" action="" method="POST">
                <p class="title">Register</p>
                <p class="message">Signup now and get full access to our app. </p>
                <label class="radio-user">
                    <span id="type_user">Who are you?</span>
                    <div class="type-content">
                        <input required="" placeholder="" type="radio" value="1" class="input-radio" name="type-user">I'm a customer <br>
                        <input required="" placeholder="" type="radio" value="2" class="input-radio" name="type-user">I'm an administrator
                    </div>
                </label> 
                <label>
                    <input required="" placeholder="" type="text" class="input" name="name">
                    <span>Name</span>
                </label>
                <label class="input-container">
                    <input required="" placeholder="dd/mm/yyyy" type="date" class="input" name="date_of_birth">
                    <span id="date-of-birth">Date of birth</span>
                </label> 
                <label class="radio-gender">Gender
                    <div class="gender-content">
                        <input required="" placeholder="" type="radio" value="Male" class="input-radio" name="gender">Male
                        <input required="" placeholder="" type="radio" value="Female" class="input-radio" name="gender">Female
                        <input required="" placeholder="" type="radio" value="Other" class="input-radio" name="gender">Other
                    </div>
                </label> 
                <label>
                    <input required="" placeholder="" type="text" class="input" name="address">
                    <span>Address</span>
                </label> 
                <label>
                    <input required="" placeholder="" type="email" class="input" name="email">
                    <span>Email</span>
                </label> 
                <label>
                    <input required="" placeholder="" type="password" class="input" name="password">
                    <span>Password</span>
                </label>
                <button class="submit">Submit</button>
                <p class="signin">Already have an acount ? <a href="login.php">Signin</a></p>
            </form>
        </div>
    </main>
</body>
</html>