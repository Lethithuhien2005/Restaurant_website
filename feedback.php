<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .feedback-management {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px); /* Glassmorphism effect */
        }

        h2 {
            margin-bottom: 20px;
        }

        .search-filter {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .search-filter input {
            border-radius: 25px; /* Rounded corners */
            padding: 10px 20px; /* Padding for input field */
            border: 1px solid #ced4da; /* Border */
            transition: all 0.3s; /* Transition effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
            flex: 1; /* Input field takes remaining space */
            margin-right: 10px; /* Space between input and button */
        }

        .search-filter input:focus {
            border-color: #007bff; /* Change border color when focused */
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.5); /* Darker shadow when focused */
            outline: none; /* Remove default outline */
        }

        .search-filter button {
            border-radius: 25px; /* Rounded corners */
            padding: 10px 20px; /* Padding for button */
            font-weight: bold; /* Bold text */
            transition: all 0.3s; /* Transition effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
        }

        .search-filter button:hover {
            background-color: #0056b3; /* Change background color on hover */
            box-shadow: 0 4px 12px rgba(0, 86, 179, 0.5); /* Darker shadow on hover */
        }

        .table {
            margin-top: 20px;
        }

        .table th, .table td {
            text-align: center;
        }

        .table th {
            background-color: #343a40;
            color: #ffffff;
        }

        .btn {
            margin: 0 5px;
        }

        @media (max-width: 768px) {
            .search-filter {
                flex-direction: column;
            }

            .search-filter input {
                margin-bottom: 10px;
            }

            .search-filter button {
                margin: 0; /* Remove margin on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="feedback-management">
            <h2>Customer Feedback Management</h2>
            
            <div class="search-filter mb-3">
                <input type="text" class="form-control" placeholder="Search feedback...">
                <button class="btn btn-primary">Search</button>
            </div>

            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Customer Name</th>
                        <th>Feedback Content</th>
                        <th>Creation Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyen A</td>
                        <td>Very satisfied with the service.</td>
                        <td>01/10/2024</td>
                        <td>New</td>
                        <td>
                            <button class="btn btn-info btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tran B</td>
                        <td>The product is not as described.</td>
                        <td>02/10/2024</td>
                        <td>Processed</td>
                        <td>
                            <button class="btn btn-info btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows here -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>