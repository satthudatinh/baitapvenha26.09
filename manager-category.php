<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css1/manager-category.css">
    <title>Manager Category</title>
</head>

<body>
<nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav justify-content-end nav-home">
                        <li class="nav-item">
                            <a class="nav-link active"  href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manager-user.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manager-category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="food-menu.php">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manager-order.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>
        <!--end-->
    <nav>
        <div class="container-fluid main">
            <h1>Manage Category</h1>
            <a class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true" >Add Category</a>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Feature</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pizza</td>
                            <td><img src="image/pizza.jpg" alt="" class="img-main"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Category</button>
                                <button class="delete">Delete Category</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">2</th>
                            <td>Burger</td>
                            <td><img src="image/burger.jpg" alt="" class="img-main"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Category</button>
                                <button class="delete">Delete Category</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">3</th>
                            <td>Momo</td>
                            <td><img src="image/momo.jpg" alt="" class="img-main"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Category</button>
                                <button class="delete">Delete Category</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">4</th>
                            <td>Quia est ipsum id id</td>
                            <td><img src="image/menu-pizza.jpg" alt="" class="img-main"></td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Category</button>
                                <button class="delete">Delete Category</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </nav>
    <footer>
        <div class="container-fluid div-footer">
            <div class="row">
                <div class="col-md-12">
                    <p class="footer-text">2020 All right reserved, Food House. Developed By - <a href="">CSE485</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>