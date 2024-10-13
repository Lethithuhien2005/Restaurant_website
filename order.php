<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
    }

    .container {
      display: flex;
      flex-direction: column;
    }

   .main-content, .return-requests {
      background-color: #ffffff;
      border-radius: 15px; /* Bo góc bảng */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      padding: 15px;
    }



    h1, h5 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #343a40; /* Thay đổi màu chữ */
    }

    .table {
      margin-top: 20px;
      border-radius: 10px; /* Bo góc bảng */
      overflow: hidden; /* Ẩn các góc thừa */
    }

    .table th, .table td {
      text-align: center;
      padding: 12px; /* Thêm khoảng cách giữa chữ và viền */
    }

    .table th {
      background-color: #6c757d; /* Thay đổi màu nền header */
      color: #ffffff;
    }

    .btn {
      margin: 0 5px;
      border-radius: 20px; /* Bo góc nút */
    }

    .modal-header, .modal-footer {
      background-color: #6c757d; /* Thay đổi màu nền modal */
      color: #ffffff;
    }

    .modal-title {
      font-size: 1.5rem;
    }

    .content-row {
      display: flex;
      flex-direction: column;
    }

    .return-requests {
      flex: 1;
      margin-right: 20px;
    }

    .return-requests:last-child {
      margin-right: 0;
    }

    .btn-success, .btn-danger {
      background-color: #28a745; /* Màu xanh cho nút Accept */
      border-color: #28a745; /* Màu viền cho nút Accept */
    }

    .btn-danger {
      background-color: #dc3545; /* Màu đỏ cho nút Reject */
      border-color: #dc3545; /* Màu viền cho nút Reject */
    }

    .btn-primary {
      background-color: #007bff; /* Màu xanh cho nút View */
      border-color: #007bff; /* Màu viền cho nút View */
    }

    .btn-success:hover, .btn-danger:hover, .btn-primary:hover {
      opacity: 0.8; /* Hiệu ứng khi hover */
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="content-row">
      <!-- Order List Table -->
      <div class="main-content">
        <h5>Order List</h5>
        <div class="container mt-4">
          <div class="row mb-3">
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Search...">
            </div>
            <div class="col-md-4">
              <select class="form-control">
                <option>Filter</option>
                <option>Processing</option>
                <option>Completed</option>
              </select>
            </div>
            <div class="col-md-4 text-right">
              <button class="btn btn-success">Add New</button>
            </div>
          </div>
          <table class="table table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Order Date</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1234</td>
                <td>Nguyen A</td>
                <td>01/10</td>
                <td>500,000</td>
                <td>Processing</td>
                <td>
                  <button class="btn btn-primary btn-sm">View</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
              <tr>
                <td>5678</td>
                <td>Tran B</td>
                <td>02/10</td>
                <td>300,000</td>
                <td>Completed</td>
                <td>
                  <button class="btn btn-primary btn-sm">View</button>
                  <button class="btn btn-danger btn-sm">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Return Request Table -->
      <div class="return-requests">
        <h5>Return Requests</h5>
        <table class="table table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th>Order ID</th>
              <th>Customer Name</th>
              <th>Request Date</th>
              <th>Reason</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1234</td>
              <td>Nguyen A</td>
              <td>02/10</td>
              <td>Product Defect</td>
              <td>Processing</td>
              <td>
                <button class="btn btn-success btn-sm">Accept</button>
                <button class="btn btn-danger btn-sm">Reject</button>
              </td>
            </tr>
            <tr>
              <td>5678</td>
              <td>Tran B</td>
              <td>03/10</td>
              <td>Not Satisfied</td>
              <td>Completed</td>
              <td>
                <button class="btn btn-success btn-sm">Accept</button>
                <button class="btn btn-danger btn-sm">Reject</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
      function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
      }
    </script>
</body>
</html>
