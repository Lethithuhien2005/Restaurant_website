<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Account Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            width: 25%;
            background-color: #343a40;
            color: white;
        }
        .content {
            margin-left: 28%;
            padding: 20px;
            width: 70%;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="#" onclick="showContent('account')">Accounts</a>
        <a href="#" onclick="showContent('statistics')">Statistics</a>
        <a href="#" onclick="showContent('dishes')">Manage Dishes</a>
        <a href="#" onclick="showContent('orders')">Orders</a>
        <a href="#" onclick="showContent('feedback')">Feedback</a>
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
                <!-- Add more user rows here -->
            </tbody>
        </table>
        <button class="btn btn-primary" onclick="addUser()">Add New User</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Added jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Function to display the account management table
        function showContent(section) {
            var contentDiv = document.getElementById('content');
            
            if (section === 'account') {
                contentDiv.innerHTML = `
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
            } else if (section === 'statistics') {
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