<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css1/style.css">
    <title>restaurant</title>
</head>

<body>
    <!-- navbar-->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-branch" href="#">
                <img src="image/logo.png" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="explore-food.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food-menu.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- background and search -->
    <nav class="food-search">
        <div ckass="container-fluid boder-line">
            <div class="row my-bg">
                <div class="col"></div>
                <div class="col-8">
                    <form action="">
                        <input type="search" name="search" placeholder="seach for food">
                        <input type="submit" name="submit" value="search" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <!-- end-->
    <nav class="explore">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Explore Foods</h1>
                </div>
            </div>

            <div class="container-fluid padding">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="image/burger.jpg" height="300" width="270" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="image/momo.jpg" height="300" width="270" alt="">

                    </div>
                    <div class="col-sm-4">
                        <img src="image/pizza.jpg" height="300" width="270" alt="">

                    </div>
                    <div class="col-sm-4">
                        <img src="image/burger.jpg" height="300" width="270" alt="">

                    </div>
                </div>
            </div>

    </nav>
    <!-- end -->
   
    <!--end food menu -->
    <nav>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12 social padding">

                    <img src="https://img.icons8.com/fluency/48/000000/facebook-new.png" />
                    <img src="https://img.icons8.com/color/50/000000/instagram-new.png" />
                    <img src="https://img.icons8.com/fluency/50/000000/twitter.png" />
                </div>
            </div>

        </div>
    </nav>
        <nav> 
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12 ">
                    <p> All rights reserved. Design By <a href="#"> CSE485</a> </p> 

                    
                </div>
            </div>

        </div>
        </nav>
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