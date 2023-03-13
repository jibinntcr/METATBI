<?php
error_reporting(0);
include('includes/config.php');

$id = $_GET['id'];
$heading = $_GET['heading'];

$sql = "SELECT * from news where id=$id ";
$query = $dbh->prepare($sql);
$query->execute();
$userArr = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo ($userArr[0]->heading); ?> | MetaValley TBI</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
    </head>
    <link href="images/favi.jpg" rel="icon" />

    <body>

        <main>

            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="news-detail-title text-white mt-lg-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <?php echo ($userArr[0]->category); ?>
                    </h1>

                    <!-- <div class="d-flex justify-content-center align-items-center">
                    <a href="#" class="text-secondary-white-color social-share-link">
                        <i class="bi-chat-square-fill me-1"></i>
                        128
                    </a>

                    <a href="#" class="social-share-link bi-bookmark-fill ms-3 me-4"></a>

                    <span>21 hours ago</span>
                </div> -->
                </div>

                <div class="videoWrapper">
                    <img src="uploads/<?php echo ($userArr[0]->image); ?>" class="img-fluid news-detail-image" alt="">
                </div>

                <div class="overlay"></div>
            </section>

            <?php include('partilas/header') ?>
            <section class="news-detail section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-10 mx-auto">
                            <h2 class="mb-0" data-aos="fade-up"><?php echo ($userArr[0]->heading); ?></h2>
                            <?php
                            $date = date_create($userArr[0]->date);
                            ?>
                            <span class="text-muted" data-aos="fade-up">Date :
                                <?php echo date_format($date, "d/m/Y"); ?></span>
                            <img class="img-fluid pt-5 mb-5" data-aos="fade-up" src="uploads/<?php echo ($userArr[0]->image); ?>">
                            <p class="me-4 justify-para" data-aos="fade-up"><?php echo ($userArr[0]->content); ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h5 class="text-white">MetaValley</h5>
                        <p class="text-white text-justify">METAVALLEY TBI is an umbrella for encouraging entrepreneurship
                            and
                            facilitating
                            the growth of startups. It manages a business incubator that provides "Start to scale"
                            support for
                            technology-based entrepreneurship and enables the transformation of research into
                            entrepreneurial businesses.</p>
                    </div>
                    <div class="col-4 ps-5">
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
                            Start UP
                        </a>
                        </br>
                        <a href="index.php#contact" class="custom-link mt-3">
                            <i class="bi bi-arrow-right-short me-2"></i>
                            Contact Us
                        </a>
                    </div>
                    <div class="col-4">
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

                    <div class="col-12">
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
<?php }
?>