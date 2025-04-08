<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="hai.png" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another Action</a></li>
                            <li><a class="dropdown-item" href="#">Something Else Where</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-custom">Get Started</a>
            </div>
        </div>
    </nav>

    <div class="banner">
        <div class="overlay">
            <div class="container text-center">
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo error reprehenderit
                    obcaecati amet, unde nobis maxime sed deserunt exercitationem!</p>
                <a href="#" class="btn btn-custom">Explore More</a>
            </div>
        </div>
    </div> 

  
<!--BSIT 4-A-->
<div class="banner d-flex align-items-center" id="banner">
    <div class="container">
        <div class="col-lg-12">
            <h1> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quae dolore quo eos neque minima consequatur nulla molestias consectetur corrupti.</h1>
            <p> Lorem, ipsum.</p>
            <a href="r" class="btn btn-tin">tin</a>
</div>
</div>
</div>
<!--about section-->
<?php include 'about.php'; ?>
<?php include 'services.php'; ?>
<?php include 'reviews.php'; ?>
<?php include 'faq.php'; ?>
<?php include 'footer.php'; ?>

</body>

</html>