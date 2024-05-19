

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin: 20px 0;
        }
      .nav{
           margin-top: 100px;
        }
        
            .btn-primary {
            background-color:goldenrod;
        }
        .btn-primary:hover{
            background-color: maroon;
        }
        .nav-link {
            font-size: 20px;
            cursor: pointer;
        }
     .sidebar {
             padding-top: 100px;
             width: 300px;
            height: 100vh;
            background: maroon;
            color: white;

        }
    h2{
            font-size: 50px;
        }
        .sidebar h4{
            padding: 40px;
            font-size: 40px;
        }
        .sidebar .nav-link {
            color: white;
        }
        .sidebar .nav-link:hover {
            background: goldenrod;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar p-3">
            <h4>Admin Page</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="./admin.php">Dashboard</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./add  a product.php">Add a Product</a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="./productlist.php">Product Lists</a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid p-5">
       <h2>Add Product</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add a Dish</h5>
                            <p class="card-text">Menu for dishes</p>
                            <a href="./index dish.php" class="btn btn-primary">Add Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add a Beverages</h5>
                            <p class="card-text">Menu for Beverages</p>
                            <a href="./index Bev.php" class="btn btn-primary">Add Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add a Snacks</h5>
                            <p class="card-text">Menu for Snacks</p>
                            <a href="./index snacks.php" class="btn btn-primary">Add Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
