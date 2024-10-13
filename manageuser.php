<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
 body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
   
}

.dashboard {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.overview {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
    width: 100%;
    max-width: 1200px;
}

.overview-card, .chart-container, .report-card {
    background: rgba(255, 255, 255, 0.3); /* Nền thẻ trắng nhưng trong suốt hơn */
    backdrop-filter: blur(10px); /* Hiệu ứng làm mờ phía sau */
    padding: 20px;
    text-align: center; /* Căn giữa nội dung thẻ */
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bóng đổ để tạo chiều sâu */
    border: 1px solid rgba(255, 255, 255, 0.3); /* Viền nhẹ */
    color: #333; /* Màu chữ tối hơn (xám đậm) để dễ đọc */
}

.overview-card h5, .chart-container h5, .report-card h5 {
    margin-bottom: 10px;
    font-size: 18px;
    color: #000; /* Màu chữ tiêu đề đen để đảm bảo dễ đọc */
}

.overview-card p, .report-card p {
    font-size: 24px;
    font-weight: bold;
    color: #000; /* Màu chữ đen đậm */
}

.charts, .reports {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
    margin-top: 40px;
    width: 100%;
    max-width: 1200px;
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

<div class="dashboard">
    <!-- Overview Section -->
    <div class="overview">
        <div class="overview-card">
            <h5>Number of Dishes</h5>
            <p>100</p> <!-- Dynamic data from database -->
            <i class="fas fa-utensils"></i>
        </div>
        <div class="overview-card">
            <h5>Number of Orders</h5>
            <p>250</p> <!-- Dynamic data from database -->
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="overview-card">
            <h5>Number of Users</h5>
            <p>500</p> <!-- Dynamic data from database -->
            <i class="fas fa-user"></i>
        </div>
        <div class="overview-card">
            <h5>Number of Feedbacks</h5>
            <p>80</p> <!-- Dynamic data from database -->
            <i class="fas fa-comments"></i>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="charts">
        <div class="chart-container">
            <h5>Revenue Chart</h5>
            <select>
                <option>Week</option>
                <option>Month</option>
                <option>Year</option>
            </select>
            <canvas id="revenueChart" width="400" height="200"></canvas>
        </div>
        <div class="chart-container">
            <h5>User Count Chart</h5>
            <canvas id="userChart" width="400" height="200"></canvas>
        </div>
        <div class="chart-container">
            <h5>Order Chart</h5>
            <select>
                <option>Day</option>
                <option>Week</option>
                <option>Month</option>
            </select>
            <canvas id="orderChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Reports Section -->
    <div class="reports">
        <div class="report-card">
            <h5>Best Selling Dishes</h5>
            <ul>
                <li>Pizza</li>
                <li>Burger</li>
                <li>Sushi</li>
            </ul>
        </div>
        <div class="report-card">
            <h5>Peak Selling Time</h5>
            <p>12:00 PM - 2:00 PM</p>
        </div>
        <div class="report-card">
            <h5>Customer Feedback</h5>
            <ul>
                <li>80 feedbacks</li>
                <li>Average rating: 4.5/5</li>
            </ul>
        </div>
    </div>
</div>
<script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
<!-- Using Chart.js library to draw charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Revenue Chart
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

    // User Count Chart
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

    // Order Chart
    var ctxOrder = document.getElementById('orderChart').getContext('2d');
    var orderChart = new Chart(ctxOrder, {
        type: 'bar',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Number of Orders',
                data: [20, 40, 30, 50], // Data from database
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }]
        }
    });
</script>
</body>
</html>
