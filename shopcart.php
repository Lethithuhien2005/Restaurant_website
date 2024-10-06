<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
/* Đặt nền chung cho toàn trang */
body {
    font-family: Arial, sans-serif; /* Chọn font chữ cho toàn bộ trang */
    background-color: #f0f2f5; /* Màu nền chính cho trang */
    padding: 20px; /* Đặt khoảng cách xung quanh nội dung trang */
    background: url('your-background-image.jpg') no-repeat center center fixed; /* Đặt hình nền với vị trí cố định, không lặp lại */
    background-size: cover; /* Đảm bảo hình nền bao phủ toàn bộ khu vực */
}

h2 {
    text-align: center; /* Căn giữa tiêu đề */
    margin-bottom: 30px; /* Khoảng cách dưới tiêu đề */
}

/* Bảng sản phẩm */
/* Điều chỉnh bảng */
.table {
    width: 100%; /* Đặt chiều rộng của bảng chiếm toàn bộ chiều rộng của phần tử cha */
    margin-bottom: 20px; /* Khoảng cách dưới bảng */
    border-collapse: separate; /* Không gộp các đường biên bảng */
    border-spacing: 0 10px; /* Khoảng cách giữa các hàng */
    background-color: rgba(255, 255, 255, 0.2); /* Màu nền cho bảng với độ trong suốt */
    border-radius: 10px; /* Bo tròn các góc của bảng */
    backdrop-filter: blur(10px); /* Làm mờ nền phía sau bảng */
}

.table thead th {
    background-color: #343a40; /* Màu nền cho các tiêu đề cột */
    color: white; /* Màu chữ cho tiêu đề */
    text-align: center; /* Căn giữa nội dung tiêu đề */
    padding: 10px; /* Khoảng cách trong tiêu đề */
}

.table td, .table th {
    text-align: center; /* Căn giữa nội dung ô */
    vertical-align: middle; /* Căn giữa theo chiều dọc */
    padding: 15px; /* Khoảng cách trong các ô */
    background-color: rgba(255, 255, 255, 0.3); /* Màu nền cho ô với độ trong suốt */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Đường viền cho ô */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05); /* Tạo bóng cho ô */
}

.table img {
    display: block; /* Hiển thị ảnh dưới dạng khối */
    margin-left: auto; /* Căn giữa ảnh theo chiều ngang */
    margin-right: auto; /* Căn giữa ảnh theo chiều ngang */
    width: 100px; /* Chiều rộng cố định cho ảnh */
    height: auto; /* Chiều cao tự động theo tỷ lệ */
    border-radius: 8px; /* Bo tròn các góc của ảnh */
}

.table .btn-danger {
    box-shadow: 0px 4px 8px rgba(255, 77, 79, 0.3); /* Tạo bóng cho nút xóa */
}

/* Hiệu ứng khi di chuột qua nút xóa */
.table .btn-danger:hover {
    box-shadow: 0px 6px 16px rgba(255, 77, 79, 0.5); /* Tăng cường bóng khi di chuột */
}

/* Nút xóa sản phẩm */
.table .btn-danger {
    display: inline-block; /* Hiển thị nút dưới dạng khối inline */
    width: 40px; /* Chiều rộng cố định cho nút */
    height: 40px; /* Chiều cao cố định cho nút */
    padding: 0; /* Không có khoảng cách bên trong */
    border-radius: 50%; /* Tạo nút hình tròn */
    background-color: #ff4d4f; /* Màu nền cho nút */
    color: white; /* Màu chữ cho nút */
    border: none; /* Không có đường viền cho nút */
    font-size: 20px; /* Kích thước chữ cho nút */
    display: flex; /* Sử dụng flexbox để căn giữa */
    align-items: center; /* Căn giữa theo chiều dọc */
    justify-content: center; /* Căn giữa theo chiều ngang */
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển màu nền khi di chuột */
}

/* Hiệu ứng khi di chuột qua nút xóa */
.table .btn-danger:hover {
    background-color: #ff7875; /* Thay đổi màu nền khi di chuột qua */
}

.quantity-input {
    width: 50px; /* Chiều rộng cho ô nhập số lượng */
    height: 30px;
    text-align: center; /* Căn giữa nội dung trong ô */
    display: inline-block; /* Hiển thị dưới dạng khối inline */
    border: 1px solid #ced4da; /* Đường viền cho ô nhập */
    border-radius: 5px; /* Bo tròn các góc của ô nhập */
}

button.btn-sm {
    height: 30px; /* Chiều cao của các nút bằng với ô input */

}

.btn-outline-secondary {
    border-color: #6c757d; /* Màu đường viền cho nút thứ cấp */
}

.btn-outline-secondary:hover {
    background-color: #6c757d; /* Màu nền khi di chuột qua nút thứ cấp */
    color: white; /* Màu chữ khi di chuột qua nút thứ cấp */
}

/* Phần tổng tiền và nút */
#total-amount {
    font-size: 24px; /* Kích thước chữ cho tổng tiền */
    font-weight: bold; /* Đậm chữ cho tổng tiền */
}

/* Glassmorphism cho container */
.container {
    max-width: 960px; /* Chiều rộng tối đa cho container */
    margin: 0 auto; /* Căn giữa container trong trang */
    background: rgba(255, 255, 255, 0.2); /* Màu nền cho container với độ trong suốt */
    padding: 20px; /* Khoảng cách trong container */
    border-radius: 15px; /* Bo tròn các góc của container */
    box-shadow: 0px 8px 32px rgba(0, 0, 0, 0.15); /* Tạo bóng cho container */
    backdrop-filter: blur(10px); /* Làm mờ nền phía sau container */
    -webkit-backdrop-filter: blur(10px); /* Hỗ trợ cho trình duyệt WebKit */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Đường viền cho container */
}

.d-flex {
    display: flex; /* Sử dụng flexbox cho layout */
    justify-content: space-between; /* Căn giữa các phần tử với khoảng cách đều */
    align-items: center; /* Căn giữa theo chiều dọc */
    margin-top: 20px; /* Khoảng cách trên cho phần tử flex */
}

/* Tăng cường hiệu ứng bóng cho nút */
.d-flex button {
    padding: 10px 20px; /* Khoảng cách bên trong cho nút */
    border-radius: 8px; /* Bo tròn các góc của nút */
    font-size: 16px; /* Kích thước chữ cho nút */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Tạo bóng cho nút */
    transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Hiệu ứng chuyển màu nền và bóng khi di chuột */
}

.d-flex button.btn-secondary {
    background-color: #6c757d; /* Màu nền cho nút thứ cấp */
    color: white; /* Màu chữ cho nút thứ cấp */
    border: none; /* Không có đường viền cho nút thứ cấp */
}

/* Hiệu ứng khi di chuột qua nút thứ cấp */
.d-flex button.btn-secondary:hover {
    background-color: #5a6268; /* Thay đổi màu nền khi di chuột qua nút thứ cấp */
}

/* Hiệu ứng khi di chuột qua nút xóa */
.d-flex button.btn-danger:hover {
    background-color: #ff7875; /* Thay đổi màu nền khi di chuột qua nút xóa */
}

/* Hiệu ứng bóng cho nút khi di chuột qua */
.d-flex button.btn-secondary:hover,
.d-flex button.btn-danger:hover {
    box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.2); /* Tăng cường bóng khi di chuột */
}

.d-flex button.btn-danger {
    background-color: #ff4d4f; /* Màu nền cho nút xóa */
    color: white; /* Màu chữ cho nút xóa */
    border: none; /* Không có đường viền cho nút xóa */
}

@media (max-width: 768px) {
    .table thead {
        display: none; /* Ẩn tiêu đề bảng trên màn hình nhỏ */
    }
    
    .table, .table tbody, .table tr, .table td {
        display: block; /* Hiển thị các phần tử bảng dưới dạng khối */
        width: 100%; /* Đặt chiều rộng của phần tử bảng chiếm toàn bộ chiều rộng */
    }

    .table tr {
        margin-bottom: 15px; /* Khoảng cách giữa các hàng trong bảng */
    }

    .table td {
        text-align: right; /* Căn phải cho nội dung ô */
        padding-left: 80%; /* Khoảng cách bên trái cho nội dung ô */
        position: relative; /* Thiết lập vị trí tương đối cho ô */
    }

    .table td::before {
        content: attr(data-label); /* Hiển thị nhãn cho ô thông qua thuộc tính data-label */
        position: absolute; /* Đặt vị trí tuyệt đối cho nhãn */
        left: 0; /* Đặt nhãn ở bên trái */
        width: 45%; /* Đặt chiều rộng cho nhãn */
        padding-left: 10px; /* Khoảng cách bên trái cho nhãn */
        font-weight: bold; /* Đậm chữ cho nhãn */
        text-align: left; /* Căn trái cho nhãn */
    }








    .d-flex {
        flex-direction: column; /* Đặt hướng của flex thành cột trên màn hình nhỏ */
    }

    .d-flex button {
        width: 100%; /* Chiều rộng nút chiếm toàn bộ chiều rộng */
        margin-bottom: 10px; /* Khoảng cách dưới nút */
    }




}



</style>
</head>
<body>
<div class="container">
    <h2 class="my-4">Your Shopping Cart</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Select</th>
                <th>Product</th>
                <th>Product Information</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody id="cart-items">
            <?php
            $products = [
                ['name' => 'Fried Chicken', 'price' => 25, 'size' => 'Large', 'image' => 'https://images.pexels.com/photos/2338407/pexels-photo-2338407.jpeg?auto=compress&cs=tinysrgb&w=400', 'quantity' => 2],
                ['name' => 'Sushi', 'price' => 50, 'size' => 'Medium', 'image' => 'https://images.pexels.com/photos/2098085/pexels-photo-2098085.jpeg?auto=compress&cs=tinysrgb&w=400', 'quantity' => 1],
                ['name' => 'Pasta Carbonara', 'price' => 40, 'size' => 'Large', 'image' => 'https://images.pexels.com/photos/12918198/pexels-photo-12918198.jpeg?auto=compress&cs=tinysrgb&w=400', 'quantity' => 1],
                ['name' => 'Pizza Margherita', 'price' => 35, 'size' => 'Large', 'image' => 'https://images.pexels.com/photos/16890470/pexels-photo-16890470/free-photo-of-pizza-b-t-chua-margherita-v-i-hung-qu-t-i-x-t-nh.jpeg?auto=compress&cs=tinysrgb&w=400', 'quantity' => 1],
                ['name' => 'Tacos', 'price' => 30, 'size' => 'Medium', 'image' => 'https://images.pexels.com/photos/8230030/pexels-photo-8230030.jpeg?auto=compress&cs=tinysrgb&w=400', 'quantity' => 2],
                ['name' => 'Burgers', 'price' => 35, 'size' => 'Large', 'image' => 'https://images.pexels.com/photos/1199959/pexels-photo-1199959.jpeg?auto=compress&cs=tinysrgb&w=400', 'quantity' => 1],
                ['name' => 'Pad Thai', 'price' => 32, 'size' => 'Medium', 'image' => 'https://images.pexels.com/photos/5939141/pexels-photo-5939141.jpeg?auto=compress&cs=tinysrgb&w=400', 'quantity' => 1],
            ];

            foreach ($products as $product) {
                echo '<tr>
                        <td data-label="Select"><input type="checkbox" class="product-checkbox" onchange="updateSelectedItems()"></td>
                        <td data-label="Product"><img src="'.$product['image'].'" alt="'.$product['name'].'" class="img-thumbnail" width="100"></td>
                        <td data-label="Product Information">'.$product['name'].' <br> <span class="text-danger">('.$product['size'].')</span></td>
                        <td data-label="Unit Price">$'.number_format($product['price'], 2, '.', ',').'</td>
                        <td data-label="Quantity">
                            <button class="btn btn-outline-secondary btn-sm" onclick="changeQuantity(this, -1)">-</button>
                            <input type="text" value="'.$product['quantity'].'" class="form-control quantity-input" readonly>
                            <button class="btn btn-outline-secondary btn-sm" onclick="changeQuantity(this, 1)">+</button>
                        </td>
                        <td data-label="Total Price" class="item-total">$'.number_format($product['price'] * $product['quantity'], 2, '.', ',').'</td>
                        <td data-label="Remove"><button class="btn btn-danger" onclick="removeItem(this)">&#128465;</button></td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-between">
        <h4>Total Amount: <span id="total-amount">$0.00</span></h4>
        <div>
            <button class="btn btn-secondary">Continue Shopping</button>
            <button class="btn btn-danger" onclick="location.href='pay.php'">Proceed to Checkout</button>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function changeQuantity(button, delta) {
        let quantityInput = button.closest('td').querySelector('.quantity-input');
        let quantity = parseInt(quantityInput.value);
        let newQuantity = quantity + delta;

        if (newQuantity > 0) {
            quantityInput.value = newQuantity;

            // Chuyển giá trị price từ đô la Mỹ, bỏ dấu phẩy và ký hiệu $
            let price = parseFloat(button.closest('tr').querySelector('td:nth-child(4)').innerText.replace(/,/g, '').replace('$', ''));
            let itemTotal = price * newQuantity;

            // Định dạng lại số tiền theo chuẩn đô la Mỹ (en-US) với ký hiệu $
            button.closest('tr').querySelector('.item-total').innerText = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(itemTotal);

            updateSelectedItems();
        }
    }

    function removeItem(button) {
        button.closest('tr').remove();
        updateSelectedItems();
    }

    function updateSelectedItems() {
        let totalAmount = 0;

        document.querySelectorAll('.product-checkbox:checked').forEach(checkbox => {
            let row = checkbox.closest('tr');
            // Chuyển tổng tiền từ đô la Mỹ, bỏ dấu phẩy và ký hiệu $
            let itemTotal = parseFloat(row.querySelector('.item-total').innerText.replace(/,/g, '').replace('$', ''));
            totalAmount += itemTotal;
        });

        // Định dạng tổng tiền theo chuẩn đô la Mỹ (en-US) với ký hiệu $
        document.getElementById('total-amount').innerText = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(totalAmount);
    }
</script>

</body>
</html>
