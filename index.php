<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    
    <title>TSF BANK</title>
    


    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">



    
</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./logos/logo.png" alt="" height="30" width="40">TSF BANK </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link active" aria-current="page" href="#"><strong class="fa fa-home">Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-list"> Actions</i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/ " target="_blank"><i class="fa fa-info"> About</i></a>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php"><i class="fa fa-address-card"> Contact Us</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <class class="welcome">
        <h2>
            <img src="./logos/trust.webp" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Welcoming you in the most trusted TSF Bank !</strong> <img src="./logos/trust.webp" alt="Bank" width="75" height="75">
        </h2>
    </class>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <center>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="background/bank1.jpg" width="800" height="400" class="d-block w-50" alt="...">

            </div>
            <div class="carousel-item">
                <img src="background/money.jpg" width="800" height="400" class="d-block w-50" alt="...">

            </div>
            <div class="carousel-item">
                <img src="background/box.jpg" width="800" height="400" class="d-block w-50" alt="...">

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
        </center>
    </div>

    <!-- Cards -->
    <div class="container my-4 ">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover1"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="money.php">
                                    <h6><strong>Money Transfer</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong>Our Services</strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>Personal Banking</li>
                                <li>Business Banking</li>
                                <li>Corporate Banking</li>
                                <li>Digital Banking</li>
                            </ul>
                        </div>
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="300" src="background/mtrans.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover2"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="history.php">
                                    <h6><strong>Transaction History</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong>We</strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>Here for you !</li>
                                <li>Assure our trust</li>
                                <li>Prefer your satisfaction</li>
                                <li>Are 24 x 7 available</li>
                            </ul>
                        </div>
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="300" height="300" src="background/trans.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <footer class="foot bg-secondary">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="https://www.thesparksfoundationsingapore.org/ ">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                    THE HANGAR, NUS ENTERPRISE
                    21 HENG MUI KENG TERRACE, 
                    SINGAPORE, 119613<br>
		              <i class="fa fa-phone"></i>: +65-8402-8590<br>
		              <i class="fa fa-envelope"></i>: <a href="mailto:confusion@food.net">info@thesparksfoundation.sg</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center foot">             
                <div class="col-auto">
                    <p>© Copyright 2021 Made by Saran Sarvesh : The Sparks Foundation <img src="./logos/tsf.png" alt="" width="40" height="35"></p>
                </div>
           </div>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>