<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Promotions</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
    width: 100%; /* Chiều rộng đầy đủ của thẻ */
    height: 200px; /* Chiều cao cố định */
    object-fit: cover; /* Cắt hình ảnh để không bị méo, giữ tỉ lệ khung hình */
}

</style>
</head>
<body>



    <div class="container my-5">

        <!-- Promotions Section -->
        <h2 class="text-center my-5">Promotions</h2>
        <div class="row">


 
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/a9/21/5b/a9215b390de0e381e134dbc54c7fb2f1.jpg" class="card-img-top" alt="Promotion">
                    <div class="card-body">
                        <h5 class="card-title">Special Discount</h5>
                        <p class="card-text">Get 20% off on all dishes this weekend!</p>
                        <a href="#" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/82/ff/70/82ff70603fbbefaa39d4f54d966bc216.jpg" class="card-img-top" alt="Promotion">
                    <div class="card-body">
                        <h5 class="card-title">Happy Hour</h5>
                        <p class="card-text">Join us for happy hour from 5 PM to 7 PM!</p>
                        <a href="#" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/8e/df/51/8edf514846b064c0f6985452c2a52dac.jpg" class="card-img-top" alt="Promotion">
                    <div class="card-body">
                        <h5 class="card-title">Free Appetizer</h5>
                        <p class="card-text">Get a free appetizer with any main course!</p>
                        <a href="#" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Dishes Section -->
        <h2 class="text-center my-5">New Dishes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/38/eb/f5/38ebf575a138511e7385dbda35669038.jpg" class="card-img-top" alt="New Dish">
                    <div class="card-body">
                        <h5 class="card-title">Spicy Pasta</h5>
                        <p class="card-text">Try our delicious Spicy Pasta, made with fresh ingredients!</p>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/a1/33/b9/a133b9fbbfd33479aba70c55c8f367ba.jpg" class="card-img-top" alt="New Dish">
                    <div class="card-body">
                        <h5 class="card-title">Grilled Salmon</h5>
                        <p class="card-text">Experience the taste of our grilled salmon, seasoned to perfection!</p>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/8f/62/43/8f6243d9e1921082edabe6f28d6fca26.jpg" class="card-img-top" alt="New Dish">
                    <div class="card-body">
                        <h5 class="card-title">Vegan Burger</h5>
                        <p class="card-text">Our vegan burger is hearty, satisfying, and absolutely delicious!</p>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bestsellers Section -->
        <h2 class="text-center my-5">Bestsellers</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/236x/65/a9/01/65a901c58f8b816b43b9e089238e76b7.jpg" class="card-img-top" alt="Bestseller">
                    <div class="card-body">
                        <h5 class="card-title">Signature Steak</h5>
                        <p class="card-text">Our signature steak is truly a must-try for all meat lovers out there!"</p>
                        <a href="#" class="btn btn-info">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/62/0f/c8/620fc8a1152eaba4d4b4f79b57a33214.jpg" class="card-img-top" alt="Bestseller">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Alfredo</h5>
                        <p class="card-text">Creamy and delicious, our Chicken Alfredo is a customer favorite!</p>
                        <a href="#" class="btn btn-info">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/07/b3/fa/07b3fa5f80454a92f323140a4504ad23.jpg" class="card-img-top" alt="Bestseller">
                    <div class="card-body">
                        <h5 class="card-title">Caesar Salad</h5>
                        <p class="card-text">Fresh greens topped with our special Caesar dressing!</p>
                        <a href="#" class="btn btn-info">View Details</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
