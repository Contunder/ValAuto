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
                    <a class="nav-link" href="galery.php">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="booking.php">Réserver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="contact" class="section db">
    <div class="container mt-5 pt-5">
        <div class="section-title text-center">
            <h3>Réserver</h3>
            <p>Vous pouvez aussi réserver par téléphone au <b>06 40 11 24 82</b></p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo htmlspecialchars($_GET['error']);?>
                        </div>
                    <?php } ?>


                    <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo htmlspecialchars($_GET['success']);?>
                        </div>
                    <?php } ?>
                    <form id="contactForm" name="sentMessage" method="post" action="app/http/sendBooking.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Nom" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Telephone" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Prenom" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="date" placeholder="Prenom"
                                           required="required" data-validation-required-message="Please enter your email address."
                                     min="2022-05-02">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Votre demande (ex: lavage interieur, lavage exterieur, formule interieur + exterieur)" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">Reserver</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<?php include 'app/include/footer.php' ?>

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="asset/js/all.js"></script>
<!-- Camera Slider -->
<script src="asset/library/jquery/jquery.easing.1.3.js"></script>
<script src="asset/js/parallaxie.js"></script>
<script src="asset/js/headline.js"></script>
<!-- Contact form JavaScript -->
<script src="asset/library/jquery/jqBootstrapValidation.js"></script>
<!-- ALL PLUGINS -->
<script src="asset/js/custom.js"></script>
<script src="asset/library/jquery/jquery.vide.js"></script>

</body>
</html>