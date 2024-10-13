<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Account Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
/* Đổi font dễ thương và tạo vibe nhẹ nhàng */
body {
    font-family: 'Comic Sans MS', cursive, sans-serif;
    background-color: #f0f4f8;
    color: #333;
}

.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 280px;
    height: 100%;
    background-color: #333;
    color: white;
    transition: left 0.3s ease-in-out;
    z-index: 999;
}

/* Content on large screen (adjusted to accommodate sidebar) */
.content {
    margin-left: 250px; /* Add margin to make room for sidebar */
    padding: 20px;
    transition: margin-left 0.3s ease-in-out;
}
/* When sidebar is active, move it to the screen */
.sidebar.active {
    left: 0;
}
.sidebar h3 {
    margin-top: 20px;
    font-weight: bold;
    color: #fff;
    font-size: 22px;
}

/* Đổi màu các liên kết trong sidebar */
.sidebar a {
    color: #fff;
    display: block;
    padding: 15px 20px;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    margin: 10px 10px;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    transition: all 0.3s ease;
}

.sidebar a:hover {
    background-color: #343a40;
    border: 2px solid #fff;
    color: #fff;
}

/* Nội dung căn giữa với khoảng trống vừa đủ */
.content {
    margin-left: 22%;
    padding: 40px;
    width: 70%;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}



h2 {
    color: #343a40;
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
}

/* Bảng đẹp với các đường viền mềm mại */
table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
}

table th, table td {
    text-align: center;
    padding: 12px;
    border: 1px solid #ddd;
}

table thead {
    background-color: #343a40;
    color: #fff;
}

h3 {
    margin-bottom: 40px;
}

/* Nút thêm người dùng */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    font-weight: bold;
    font-size: 16px;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.badge-success {
    background-color: #28a745;
    color: white;
}

.badge-danger {
    background-color: #dc3545;
    color: white;
}

/* Hamburger menu */
.toggle-btn {
    display: none;
    font-size: 24px;
    cursor: pointer;
    margin-left: 20px;
    color: #343a40;
}

/* Media Queries */
@media (max-width: 1200px) {
    .content {
        margin-left: 25%;
        width: 65%;
    }

    .sidebar {
        width: 25%;
    }
}
@media (max-width: 768px) {
    .toggle-btn {
        display: block; /* Show toggle button on smaller screens */
    }

    .sidebar {
        width: 250px; /* Adjust the width of the sidebar */
    }

    .content {
        width: 100%;
        padding: 20px;
    }
}
@media (max-width: 768px) {
    .content {
        margin-left: 0;
        width: 100%;
        padding: 20px;
    }

    .sidebar {
        width: 100%;
        height: auto;
        display: none;
    }

    .sidebar.active {
        display: block;
    }

    .toggle-btn {
        display: block;
    }
}
    </style>
</head>
<body>
<!-- Hamburger button -->
<span class="toggle-btn" onclick="toggleSidebar()">&#9776;</span>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <h3 class="text-center">Admin Panel</h3>
    <a href="#" onclick="showContent('account'); closeSidebar();">Accounts</a>
    <a href="#" onclick="showContent('statistics'); closeSidebar();">Statistics</a>
    <a href="#" onclick="showContent('dishes'); closeSidebar();">Manage Dishes</a>
    <a href="#" onclick="showContent('orders'); closeSidebar();">Orders</a>
    <a href="#" onclick="showContent('feedback'); closeSidebar();">Feedback</a>
</div>


    <!-- Content -->
    <div class="content" id="content">
        <h2>Account Management</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nguyen Van A</td>
                    <td>a@example.com</td>
                    <td>01-10-2024</td>
                    <td><span class="badge badge-success">Activated</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="editUser(this)">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteUser(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Tran Thi B</td>
                    <td>b@example.com</td>
                    <td>02-10-2024</td>
                    <td><span class="badge badge-danger">Deactivated</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="editUser(this)">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteUser(this)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary" onclick="addUser()">Add New User</button>
    </div>
<script>
    // Function to toggle the sidebar visibility
function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
}

// Function to close the sidebar after clicking a link
function closeSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('active');
}



</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Added jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Function to display the account management table
        function showContent(section) {
            var contentDiv = document.getElementById('content');
            
            if (section === 'account') {
    contentDiv.innerHTML = `
        <style>
            /* CSS để định dạng bảng và nút */
            .table {
                width: 100%;
                border-collapse: collapse;
                border-radius: 10px; /* Bo góc bảng */
                overflow: hidden; /* Ẩn các góc bị vỡ */
            }
            .table th, .table td {
                padding: 15px; /* Khoảng cách giữa nội dung và viền */
                text-align: center; /* Căn giữa nội dung */
                border: 1px solid #dee2e6; /* Viền cho các ô */
                background-color: #ffffff; /* Màu nền cho các ô */
                transition: background-color 0.3s; /* Hiệu ứng chuyển màu nền */
            }
            .table th {
                background-color: #343a40; /* Màu nền cho tiêu đề */
                color: #ffffff; /* Màu chữ cho tiêu đề */
            }
            .table tbody tr:hover {
                background-color: #f8f9fa; /* Hiệu ứng hover cho hàng */
            }
            .badge {
                border-radius: 12px; /* Bo góc cho badge */
            }
            .btn {
                border-radius: 20px; /* Bo góc cho nút */
                transition: transform 0.2s; /* Hiệu ứng khi nhấn nút */
            }
            .btn:hover {
                transform: scale(1.05); /* Tăng kích thước nút khi hover */
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bóng cho nút */
            }
            .btn-primary {
                background-color: #007bff; /* Màu nền nút thêm người dùng */
                color: white; /* Màu chữ cho nút thêm người dùng */
            }
            .btn-warning {
                background-color: #ffc107; /* Màu nền nút sửa */
                color: black; /* Màu chữ cho nút sửa */
            }
            .btn-danger {
                background-color: #dc3545; /* Màu nền nút xóa */
                color: white; /* Màu chữ cho nút xóa */
            }
        </style>
        <h2>Account Management</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nguyen Van A</td>
                    <td>a@example.com</td>
                    <td>01-10-2024</td>
                    <td><span class="badge badge-success">Activated</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="editUser(this)">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteUser(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Tran Thi B</td>
                    <td>b@example.com</td>
                    <td>02-10-2024</td>
                    <td><span class="badge badge-danger">Deactivated</span></td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="editUser(this)">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteUser(this)">Delete</button>
                    </td>
                </tr>
                <!-- Add more user rows here -->
            </tbody>
        </table>
        <button class="btn btn-primary" onclick="addUser()">Add New User</button>
    `;
}
else if (section === 'statistics') {
                fetch('manageuser.php') // Ensure the path is correct
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(data => {
                        contentDiv.innerHTML = data; // Insert content into contentDiv

                        // Create and attach charts after content is added
                        // Revenue chart
                        var ctxRevenue = document.getElementById('revenueChart').getContext('2d');
                        var revenueChart = new Chart(ctxRevenue, {
                            type: 'bar',
                            data: {
                                labels: ['January', 'February', 'March', 'April'],
                                datasets: [{
                                    label: 'Revenue',
                                    data: [1000, 2000, 1500, 3000], // Data from database
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    borderWidth: 1
                                }]
                            }
                        });

                        // User count chart
                        var ctxUser = document.getElementById('userChart').getContext('2d');
                        var userChart = new Chart(ctxUser, {
                            type: 'line',
                            data: {
                                labels: ['January', 'February', 'March', 'April'],
                                datasets: [{
                                    label: 'User Count',
                                    data: [50, 60, 70, 80], // Data from database
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1
                                }]
                            }
                        });

                        // Order chart
                        var ctxOrder = document.getElementById('orderChart').getContext('2d');
                        var orderChart = new Chart(ctxOrder, {
                            type: 'bar',
                            data: {
                                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                                datasets: [{
                                    label: 'Order Count',
                                    data: [20, 40, 30, 50], // Data from database
                                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                                    borderColor: 'rgba(255, 206, 86, 1)',
                                    borderWidth: 1
                                }]
                            }
                        });
                    })
                    .catch(error => {
                        console.error('There has been a problem with your fetch operation:', error);
                    });
            } else if (section === 'dishes') {
                fetch('dish.php')
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(data => {
                        contentDiv.innerHTML = data; // Insert content into contentDiv

                        // Create and attach scripts from content
                        const scripts = data.match(/<script[^>]*>([\s\S]*?)<\/script>/gi);
                        if (scripts) {
                            scripts.forEach(script => {
                                const newScript = document.createElement('script');
                                newScript.text = script.replace(/<script[^>]*>|<\/script>/g, '');
                                document.body.appendChild(newScript);
                            });
                        }

                        // Initialize dish-related functionalities
                        initializeDishFunctionality();
                    })
                    .catch(error => console.error('Error loading mon.php:', error));
            } else if (section === 'orders') {
                fetch('order.php')
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(data => {
                        contentDiv.innerHTML = data; // Set content from don.php into contentDiv
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                        contentDiv.innerHTML = '<p>Unable to load content.</p>'; // Show error message if necessary
                    });
            } else if (section === 'feedback') {
                fetch('feedback.php')
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(data => {
                        contentDiv.innerHTML = data; // Set content from phan.php into contentDiv
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                        contentDiv.innerHTML = '<p>Unable to load content.</p>'; // Show error message if necessary
                    });
            }
        }

        // Function to delete user
        function deleteUser(button) {
            if (confirm("Are you sure you want to delete this user?")) {
                var row = button.parentElement.parentElement;
                row.remove();
            }
        }

    </script>

</body>
</html>