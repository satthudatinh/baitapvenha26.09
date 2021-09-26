<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css1/manager-user.css">
    <title>Manager User</title>
</head>
<body>
<nav>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-9 ">
                    <ul class="nav justify-content-end nav-home">
                        <li class="nav-item">
                            <a class="nav-link active"  href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manager-order.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="explore-food.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="food-menu.php">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="food-menu.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <nav>
        <div class="container-fluid main">
            <h1>Manager Users</h1>
            <a class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Add New User</a>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Arsenio Leach</td>
                            <td>toduwaxobi</td>
                            <td>    
                                <button class="change">Chang Password</button>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">2</th>
                            <td>Sasha Mendez</td>
                            <td>goxemyde</td>
                            <td>
                                <button class="change">Chang Password</button>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">3</th>
                            <td>Vijay Thapa</td>
                            <td>vijaythapa</td>
                            <td>
                                <button class="change">Chang Password</button>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">4</th>
                            <td>Administrator</td>
                            <td>admin</td>
                            <td>
                                <button class="change">Chang Password</button>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </nav>
        <!--end-->
    <footer>
        <div class=" container-fluid div-footer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="footer-text">2020 All right reserved, Food House. Developed By -
                                                <a href="">CSE485</a>
                                            </p>
                                        </div>
                                    </div>
            </div>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
                crossorigin="anonymous">
            </script>
</body>
</html>