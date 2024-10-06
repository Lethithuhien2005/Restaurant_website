<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dualeo Food</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Poppins', sans-serif;
            margin: 0 15px;
            color: #333;
        }

        .container {
            max-width: 1000px;
        }

        .section-title {
            margin-bottom: 20px;
            font-weight: 600;
            color: #ff4d4f;
            
            text-align: center;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-custom {
            background-color: #ff4d4f;
            color: white;
            border: none;
            padding: 12px;
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #d63c3d;
        }

        .order-summary h3 {
            margin-bottom: 15px;
            font-weight: 600;
            color: #ff4d4f;
        }

        .order-summary .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .order-summary .total {
            font-weight: 600;
            font-size: 1.3rem;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        hr {
            border-top: 2px solid #ff4d4f;
            margin: 20px 0;
        }



        .btn-link {
            color: #ff4d4f;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .modal-header {
            border-bottom: none;
        }

        /* Styling for input labels */
        label {
            font-weight: 500;
            color: #333;
        }

        .item-details {
            margin-left: 15px;
            font-size: 0.9rem;
            color: #555;
        }

        .header-border {
            border-bottom: 2px solid #ff4d4f;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .total-label {
            color: #ff4d4f;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <!-- Delivery Information -->
            <div class="col-md-6">
                <h2 class="section-title" >Delivery Information</h2>
                <div class="glass-effect">
                    <form id="orderForm" action="process_order.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="delivery_method" required>
                                <option value="" disabled selected>Select Delivery Method</option>
                                <option value="delivery">Delivery</option>
                                <option value="pickup">Pick up at store</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <select class="form-control" name="payment_method" required>
                                <option value="" disabled selected>Select Payment Method</option>
                                <option value="cash">Cash</option>
                                <option value="transfer">Bank Transfer</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-custom btn-block">Place Order</button>
                    </form>
                </div>


            </div>

<!-- Order Summary -->
<div class="col-md-6">
    <h2 class="section-title" >Your Order</h2>
    <div class="glass-effect order-summary">

        <div class="item">
            <p><strong>1. Fried Chicken Thigh </strong></p>
            <p>$5.00</p>
        </div>


        <div class="form-group">
            <label for="discountCode">Enter Discount Code</label>
            <input type="text" class="form-control" id="discountCode" placeholder="Discount Code">
        </div>
        <button class="btn btn-primary btn-block" style = "background-color: #ff6b6b;border-color: #ff6b6b;">Apply</button>
        <hr>
        <div class="d-flex justify-content-between mt-3">
            <p>Subtotal:</p>
            <p>$5.00</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Shipping:</p>
            <p>$0.00</p>
        </div>
        <hr>
        <div class="d-flex justify-content-between total">
            <span class="total-label">Total:</span>
            <span class="total-label">$5.00</span>
        </div>
        <button class="btn btn-custom btn-block mt-4">Place Order</button>
        <a href="shopcart.php" class="btn btn-link btn-block text-decoration-none">Back to Cart</a>
    </div>
</div>



    </div>

    <!-- Modal for success alert -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your order has been placed successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('orderForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Handle form submission via AJAX or directly
            $('#successModal').modal('show');
        });
    </script>
</body>

</html>
