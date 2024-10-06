<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f8f9fa;
  margin: 0;
}

.container {
  display: flex;
  flex-direction: column;
}

.sidebar, .main-content, .return-requests {
  background-color: #ffffff;

  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

.main-content, .return-requests {
  padding: 15px;
}

.sidebar {
  background-color: #343a40;
  color: #ffffff;
  min-height: 100px;
}

h1, h5 {
  font-size: 1.5rem;
  margin-bottom: 20px;
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

.modal-header, .modal-footer {
  background-color: #343a40;
  color: #ffffff;
}

.modal-title {
  font-size: 1.5rem;
}

.content-row {
  display: flex;
  flex-direction: column;
}

.sidebar, .main-content, .return-requests {
  flex: 1;
  margin-right: 20px;
}

.return-requests:last-child {
  margin-right: 0;
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

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
