<?php
error_reporting(0);
include('admin/includes/config.php');
$page = $_GET['page'];
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page ?> | METAVALLEY TBI</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">

</head>
<link href="images/favi.jpg" rel="icon" />

<body>

    <main>
        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img class="logo-size" src="images/portfolio/logo.png">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="news-events.php?page=<?php echo 'Events' ?>">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news-events.php?page=<?php echo 'News' ?>">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="startup.php">Start-Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <section class="news section-padding" id="news">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5 text-center" data-aos="fade-up"><?php echo $page ?></h2>
                    </div>

                    <?php

                    $sql = "SELECT * from news where category='$page' AND activeStatus='1' ORDER BY date DESC";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                    ?>

                            <div class="col-lg-6 col-12">
                                <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                    <div class="news-top w-100">

                                        <a href="news-detail.html" class="news-image-hover news-image-hover-primary">
                                            <img src="admin/uploads/<?php echo $result->image ?>" class="img-fluid news-image" alt="">
                                        </a>

                                        <div class="news-category bg-primary text-white"><?php echo $page ?></div>
                                    </div>

                                    <div class="news-bottom w-100">
                                        <div class="news-text-info">
                                            <h5 class="news-title">
                                                <?php
                                                $heading =  substr($result->heading, 0, 65);
                                                ?>
                                                <a onclick="location.href = 'news-and-events.php?heading=<?php echo $result->heading ?>&id=<?php echo   $result->id ?>';" class="news-title-link"><?php echo  $heading ?>...</a>
                                            </h5>

                                            <div class="d-flex flex-wrap">
                                                <?php
                                                $date = date_create($result->date);
                                                ?>
                                                <span class="text-muted"><?php echo date_format($date, "d/m/Y"); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } ?>

                </div>
            </div>
        </section>


        <!-- <section class="google-map">
            <iframe
                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen=""
                loading="lazy"></iframe>
        </section> -->

    </main>

    <footer class="site-footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-white">MetaValley</h5>
                    <p class="text-white text-justify">METAVALLEY TBI is an umbrella for encouraging
                        entrepreneurship
                        and
                        facilitating
                        the growth of startups. It manages a business incubator that provides "Start to scale"
                        support for
                        technology-based entrepreneurship and enables the transformation of research into
                        entrepreneurial businesses.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-white">Brows Pages</h5>
                    <a href="index.php" class="custom-link mt-3">
                        <i class="bi bi-arrow-right-short me-2"></i>
                        Home
                    </a>
                    </br>
                    <a href="index.php#about" class="custom-link mt-3">
                        <i class="bi bi-arrow-right-short me-2"></i>
                        About
                    </a>
                    </br>
                    <a href="news-events.php?page=<?php echo 'Events' ?>" class="custom-link mt-3">
                        <i class="bi bi-arrow-right-short me-2"></i>
                        Events
                    </a>
                    </br>
                    <a href="news-events.php?page=<?php echo 'News' ?>" class="custom-link mt-3">
                        <i class="bi bi-arrow-right-short me-2"></i>
                        News
                    </a>
                    </br>
                    <a href="startup.php" class="custom-link mt-3">
                        <i class="bi bi-arrow-right-short me-2"></i>
                        Start-Up
                    </a>
                    </br>
                    <a href="index.php#contact" class="custom-link mt-3">
                        <i class="bi bi-arrow-right-short me-2"></i>
                        Contact Us
                    </a>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-white">Contact</h5>
                    <p class="text-white">
                        <i class="bi-geo-alt-fill me-2"></i>
                        MES College Marampally</br>
                        Marampally P O, North Vazhakulam, Aluva</br>
                        Ernakulam (Dist), Kerala, India</br>
                        Pincode - 683 105

                    </p>
                    <a href="mailto:info@metavalleytbi.com" class="custom-link mt-3">
                        <i class="bi bi-envelope me-2"></i>
                        info@metavalleytbi.com
                    </a>
                    </br>
                    <a href="tel:+91-98472 39388" class="custom-link mt-3">
                        <i class="bi bi-telephone me-2"></i>
                        +91 - 98472 39388
                    </a>
                    </br>
                    <a href="tel:+91-8281550638" class="custom-link mt-3">
                        <i class="bi bi-telephone me-2"></i>
                        +91 - 82815 50638
                    </a>
                    </br>
                    <a href="https://mesmarampally.org/" target="_blank" class="custom-link mt-3 mb-5">
                        <i class="bi bi-globe me-2"></i>www.mesmarampally.org
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mb-5 text-center">
                    <ul class="social-icon">
                        <li>
                            <a href="https://www.facebook.com/metavalleytbi" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li>
                            <a href="https://twitter.com/metavalleytbi" class="social-icon-link bi-twitter"></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/metavalleytbi" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li>
                            <a href="https://www.linkedin.com/company/metavalleytbi" class="social-icon-link bi-linkedin"></a>
                        </li>
                    </ul>
                </div>
                <div class="text-center">
                    <a href="#">MetaValley TBI</a>, © All Right Reserved. Designed by <a href="https://infiniio.co.in/" target="_blank">Infinio Technology Solutions</a>
                </div>

            </div>
        </div>

    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>