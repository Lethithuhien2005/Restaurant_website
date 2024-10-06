<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        h2 {
            font-size: 1.75rem;
            margin-bottom: 20px;
            color: #333;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .table {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            vertical-align: middle;
            padding: 15px;
            text-align: center;
        }

        .btn {
            border-radius: 20px;
        }

        #notification {
            margin-top: 20px;
        }

        #search {
            border-radius: 20px;
        }

        /* Glass effect */
        .glass {
            background: rgba(255, 255, 255, 0.8); /* White background with transparency */
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px); /* Blurring effect */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Faint border */
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5rem;
            }

            .form-control, .form-select {
                font-size: 0.9rem;
            }

            .table th, .table td {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="glass mt-4" id="addDish">
            <h2>Add/Edit Dish</h2>
            <form id="dishForm" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="dishName" class="form-label">Dish Name</label>
                    <input type="text" class="form-control" id="dishName" name="dishName" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="" disabled selected>Select category...</option>
                        <option value="Appetizer">Appetizer</option>
                        <option value="Main">Main</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add/Edit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </form>
        </div>

        <div class="mt-5" id="dishList">
            <h2>Dish List</h2>
            <div class="mb-3">
                <input type="text" class="form-control" id="search" placeholder="Search for a dish...">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Dish Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="dishTableBody">
                    <!-- Dish data will be added here via JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="mt-3" id="notification" style="display: none;">
            <div class="alert alert-success" role="alert">
                Action successful!
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Mock dish data
            let dishes = [
                {name: "Fried Chicken", category: "Main", price: 50000, image: "images/chicken.jpg"},
                {name: "Baguette", category: "Appetizer", price: 20000, image: "images/baguette.jpg"},
                {name: "Fruit Ice Cream", category: "Dessert", price: 30000, image: "images/icecream.jpg"}
            ];

            function renderDishes() {
                const tbody = $('#dishTableBody');
                tbody.empty();
                dishes.forEach((dish, index) => {
                    tbody.append(`
                        <tr>
                            <td>${dish.name}</td>
                            <td>${dish.category}</td>
                            <td>${dish.price} VND</td>
                            <td><img src="${dish.image}" alt="${dish.name}" width="50"></td>
                            <td>
                                <button class="btn btn-warning" onclick="editDish(${index})">Edit</button>
                                <button class="btn btn-danger" onclick="deleteDish(${index})">Delete</button>
                            </td>
                        </tr>
                    `);
                });
            }

            renderDishes();

            $('#dishForm').on('submit', function(event) {
                event.preventDefault();
                
                const name = $('#dishName').val();
                const category = $('#category').val();
                const price = $('#price').val();
                const image = $('#image').prop('files')[0];
                const description = $('#description').val();

                // Mock adding a dish
                dishes.push({name, category, price, image: 'images/placeholder.jpg'});

                renderDishes();
                $('#notification').fadeIn().delay(2000).fadeOut();
                $(this).trigger("reset"); // Reset form
            });

            // Search function
            $('#search').on('input', function() {
                const searchText = $(this).val().toLowerCase();
                const filteredDishes = dishes.filter(dish => dish.name.toLowerCase().includes(searchText));
                const tbody = $('#dishTableBody');
                tbody.empty();
                filteredDishes.forEach((dish, index) => {
                    tbody.append(`
                        <tr>
                            <td>${dish.name}</td>
                            <td>${dish.category}</td>
                            <td>${dish.price} VND</td>
                            <td><img src="${dish.image}" alt="${dish.name}" width="50"></td>
                            <td>
                                <button class="btn btn-warning" onclick="editDish(${index})">Edit</button>
                                <button class="btn btn-danger" onclick="deleteDish(${index})">Delete</button>
                            </td>
                        </tr>
                    `);
                });
            });
        });

        // Edit dish function
        function editDish(index) {
            const dish = dishes[index];
            $('#dishName').val(dish.name);
            $('#category').val(dish.category);
            $('#price').val(dish.price);
            $('#description').val(dish.description);
        }

        // Delete dish function
        function deleteDish(index) {
            if (confirm('Are you sure you want to delete this dish?')) {
                dishes.splice(index, 1);
                renderDishes();
                $('#notification').fadeIn().delay(2000).fadeOut();
            }
        }
    </script>
</body>
</html>