<!DOCTYPE html>
<html lang="fr">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Val Auto - </title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="asset/img/favicon.jpeg" type="image/x-icon" />
<link rel="apple-touch-icon" href="asset/img/favicon.jpeg">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="asset/library/bootstrap/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="asset/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="asset/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="asset/css/custom.css">
<script src="asset/js/modernizr.js"></script> <!-- Modernizr -->

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body id="page-top" class="politics_version">

<!-- LOADER -->
<div id="preloader">
    <div id="main-ld">
        <div id="loader"></div>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">
            <img class="img-fluid" src="/asset/img/favicon.jpeg" width="200" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">A Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="galery.php">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Réserver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="portfolio" class="section lb">
    <div class="container mt-5 pt-5">
        <div class="section-title text-center">
            <h3>Galerie</h3>
            <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
        </div><!-- end title -->

        <div class="gallery-menu row">
            <div class="col-md-12">
                <div class="button-group filter-button-group text-center">
                    <button class="active" data-filter="*">Tout</button>
                    <button data-filter=".gal_a">Interieur</button>
                    <button data-filter=".gal_b">Exterieur</button>
                </div>
            </div>
        </div>

        <div class="gallery-list row">
            <div class="col-md-4 col-sm-6 gallery-grid gal_a">
                <div class="gallery-single fix">
                    <img src="uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
                    <div class="img-overlay">
                        <a href="uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_a">
                <div class="gallery-single fix">
                    <img src="uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
                    <div class="img-overlay">
                        <a href="uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_a ">
                <div class="gallery-single fix">
                    <img src="uploads/gallery_img-03.jpg" class="img-fluid" alt="Image">
                    <div class="img-overlay">
                        <a href="uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                <div class="gallery-single fix">
                    <img src="uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
                    <div class="img-overlay">
                        <a href="uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                <div class="gallery-single fix">
                    <img src="uploads/gallery_img-05.jpg" class="img-fluid" alt="Image">
                    <div class="img-overlay">
                        <a href="uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                <div class="gallery-single fix">
                    <img src="uploads/gallery_img-06.jpg" class="img-fluid" alt="Image">
                    <div class="img-overlay">
                        <a href="uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<?php include 'app/include/footer.php' ?>

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="asset/js/all.js"></script>
<!-- Camera Slider -->
<script src="asset/library/jquery/jquery.mobile.customized.min.js"></script>
<script src="asset/library/jquery/jquery.easing.1.3.js"></script>
<script src="asset/js/parallaxie.js"></script>
<script src="asset/js/headline.js"></script>
<!-- Contact form JavaScript -->
<script src="asset/library/jquery/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!-- ALL PLUGINS -->
<script src="asset/js/custom.js"></script>
<script src="asset/library/jquery/jquery.vide.js"></script>

</body>
</html>