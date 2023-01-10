<?php
session_start();
error_reporting(0);
include('admin/includes/config.php');

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Metavalley | MES TBI</title>

    <!-- CSS FILES -->

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<link href="images/favi.jpg" rel="icon" />

<body>

    <main>
        <?php
        if (isset($_SESSION["mailstatus"]) == "success") {
        ?>
        <script>
        swal({
            title: "Success!",
            text: "Our team will contact you soon!",
            icon: "success",
            button: "OK",
        });
        </script>
        <?php
            unset($_SESSION["mailstatus"]);
        } else if (isset($_SESSION["mailstatus"]) == "not") {
        ?>
        <script>
        swal("Something went wrong !", "Please try after some time!", "error");
        </script>
        <?php
            unset($_SESSION["mailstatus"]);
        }
        ?>
        <section id="myCarouselBanner" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="heroTextBanner">
                        <h1 class="text-white mt-0 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                            METAVALLEY TBI
                        </h1>

                        <p class="text-secondary-white-color mb-0" data-aos="fade-up" data-aos-delay="1000">
                            MES Marampally Technology Business Incubator</p>
                    </div>
                    <img src="videos/banner1-1.jpg" class="img-fluid team-image" alt="">
                </div>
                <div class="carousel-item">
                    <img src="videos/banner2.jpg" class="img-fluid team-image" alt="">
                </div>
                <div class="carousel-item">
                    <div class="heroTextBanner">
                        <h3 class="text-white mt-0 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                            "Empower with Metavalley"
                        </h3>

                        <!-- <p class="text-secondary-white-color mb-0" data-aos="fade-up" data-aos-delay="1000">
                            "Empower with Metavalley"</p> -->
                    </div>
                    <img src="videos/banner3.jpg" class="img-fluid team-image" alt="">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarouselBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#myCarouselBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="visually-hidden">Next</span>
            </button>

        </section>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img class="logo-size" src="images/portfolio/logo.png">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

        <section class="section-padding pb-0" id="about">
            <!--ABOUT END -->
            <div class="container mb-5 pb-lg-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3" data-aos="fade-up">METAVALLEY TBI</h2>
                    </div>

                    <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                        <p class="me-4 justify-para" data-aos="fade-up" data-aos-delay="300">
                            <b>METAVALLEY TBI</b> is an umbrella for encouraging entrepreneurship and facilitating the
                            growth of startups. It manages a business incubator that provides "Start to scale" support
                            for technology-based entrepreneurship and enables the transformation of research into
                            entrepreneurial businesses.
                            <br><br>We launched our entrepreneurial ventures by launching an IEDC under the guidance of
                            the Kerala Startup Mission. As a result of this excellent start, a number of our students
                            developed novel initiatives. It was vital to elevate the IEDC to the level of a TBI to
                            transform our student community's inspiration and energy into marketable goods.
                        </p>
                    </div>

                    <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5 justify-para">
                        <p class="me-4" data-aos="fade-up" data-aos-delay="500">We support daring entrepreneurs that
                            develop innovative solutions. We support companies at their hazardous early phases when they
                            need assistance the most yet have the least access to it. Through a continuum of incubation,
                            acceleration, funding, and insights, we provide these ambitious entrepreneurs with
                            everything they need to achieve exceptional results </p>
                    </div>

                </div>
            </div>
            <!--ABOUT END  -->

            <!--OBJECTIVES START-->
            <div class="container mb-5 pb-lg-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3" data-aos="fade-up">OBJECTIVES</h2>
                    </div>

                    <div class="col-lg-6 col-auto mt-3 mb-lg-5 mb-3">
                        <img src="images/portfolio/severin-candrian-nn3uIZqmUtE-unsplash.jpeg"
                            class="img-fluid portfolio-image" alt="" data-aos="fade-up" data-aos-delay="500">
                    </div>
                    <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                        <p class="justify-para" data-aos="fade-up" data-aos-delay="500">An overriding objective of the
                            <b>METAVALLEY TBI</b> is to transform students' minds from job-seekers to entrepreneurs,
                            utilizing
                            the theoretical and practical lessons they get at the college. The other objectives are :
                        </p>
                        <ul class="justify-para" data-aos="fade-up" data-aos-delay="800">
                            <li class="mb-2 mission" data-aos="fade-up">Nurture entrepreneurial culture among students
                                and youth</li>
                            <li class="mb-2 mission" data-aos="fade-up">Strengthen the Start-up ecosystem in the region
                            </li>
                            <li class="mb-2 mission" data-aos="fade-up">Handhold MSMEs by developing innovation clusters
                            </li>
                            <li class="mb-2 mission" data-aos="fade-up">Support Kudumbasree Entrepreneurs and Women’s
                                Start-ups</li>
                            <li class="mb-2 mission" data-aos="fade-up">Promote investor education and build Investor
                                Network (M’VIN)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--OBJECTIVES END-->

            <!--MISSION AND VISION END  -->
            <div class="container mb-5 pb-lg-5">
                <div class="row">
                    <div class="col-6">
                        <h2 class="mb-3" data-aos="fade-up">VISION</h2>
                        <div class="col-12 mt-3 mb-lg-5">
                            <p class="me-4 justify-para" data-aos="fade-up" data-aos-delay="300">Remodel the mindset of
                                students and youth to become entrepreneurs and to reach the heights of Global Start-up
                                Ecosystem. </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="mb-3" data-aos="fade-up">MISSION</h2>
                        <div class="col-12 mt-lg-3 mb-lg-5">
                            <ul class="justify-para" data-aos="fade-up" data-aos-delay="800">
                                <li class="mb-3 mission" data-aos="fade-up">Assets to create technology-based
                                    incubators.</li>
                                <li class="mb-3 mission" data-aos="fade-up">Contribute to the creation of high-value
                                    employment and services.</li>
                                <li class="mb-3 mission" data-aos="fade-up">Introduction of Entrepreneurial culture to
                                    the students and the common people.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!--MISSION AND VISION -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-12 p-0">
                        <img src="images/elena-rabkina-eVVzwsNhNf4-unsplash.jpg" class="img-fluid about-image" alt="">
                    </div>

                    <div class="col-lg-3 col-12 bg-dark">
                        <div
                            class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                            <h3 class="text-white mb-3" data-aos="fade-up">We Give Everything It Takes.</h3>

                            <!--<p class="text-secondary-white-color" data-aos="fade-up">Startup Companies</p>-->

                            <div class="mt-3 custom-links">

                                <a href="startup.php" class="text-white custom-link" data-aos="zoom-in"
                                    data-aos-delay="100">Startup Companies <i class="bi bi-arrow-right ms-2"></i>
                                    </i>
                                </a>

                                <!--<a href="#contact" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="300">Work with Us</a>-->
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12 p-0">
                        <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a target="_blank" href="https://infiniio.co.in/">
                                        <img src="images/people/studio-shot-beautiful-happy-retired-caucasian-female-with-pixie-hairdo-crossing-arms-her-chest-having-confident-look-smiling-broadly.jpg"
                                            class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="http://www.monzhalabs.tech">
                                        <img src="images/people/project-leder-with-disabilities-looking-front-sitting-immobilized-wheelchair-business-office-room.jpg"
                                            class="img-fluid team-image" alt="">
                                        <!-- <div class="team-thumb bg-primary">
                                            <h3 class="text-white mb-0">Morgan S.</h3>

                                            <p class="text-secondary-white-color mb-0">CEO & Investor</p>
                                        </div>-->
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://finderfitsports.com/">
                                        <img src="images/people/asia-business-woman-feeling-happy-smiling-looking-camera-while-relax-home-office.jpg"
                                            class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://credize.com/">
                                        <img src="images/people/happy-african-american-professional-manager-smiling-looking-camera-headshot-portrait.jpg"
                                            class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="http://www.breakthroughlearning.in/">
                                        <img src="images/people/BL.png" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://croniox.com/">
                                        <img src="images/people/croniox.jpg" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://zamorinandgama.com/">
                                        <img src="images/people/zg.jpg" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://theapothecary.co.in/">
                                        <img src="images/people/theapothecary.jpg" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://capsulesession.com/">
                                        <img src="images/people/starting.jpg" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="http://www.equalsoft.co.in/">
                                        <img src="images/people/eqs.jpg" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://neombiz.in/">
                                        <img src="images/people/neom.jpg" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a target="_blank" href="https://newgloryortho.com/">
                                        <img src="images/people/glorified.jpg" class="img-fluid team-image" alt="">
                                    </a>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                <span class="visually-hidden">Next</span>
                            </button>
                        </section>

                    </div>
                </div>
            </div>
        </section>

        <section class="news section-padding" id="news">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5 text-center" data-aos="fade-up">News & Events</h2>
                    </div>
                    <?php
                    $sql = "SELECT * from news where landingStatus='1' AND category='News' AND activeStatus='1' ORDER BY date DESC
                    LIMIT 1;";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                    ?>
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <div class="news-thumb" data-aos="fade-up">
                            <a onclick="location.href = 'news-and-events.php?heading=<?php echo $result->heading ?>&id=<?php echo   $result->id ?>';"
                                class="news-image-hover news-image-hover-warning">
                                <img src="admin/uploads/<?php echo  $result->image ?>"
                                    class="img-fluid large-news-image news-image" alt="">
                            </a>

                            <div class="news-category bg-warning text-white"><?php echo  $result->category ?></div>

                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <?php
                                            $heading =  substr($result->heading, 0, 65);
                                            ?>
                                    <a href="news-and-events.php?heading=<?php echo $result->heading ?>&id=<?php echo   $result->id ?>"
                                        class="news-title-link"><?php echo $heading ?>...</a>
                                </h5>

                                <?php
                                        $date = date_create($result->date);
                                        ?>
                                <span class="text-muted"><?php echo date_format($date, "d/m/Y"); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }
                    ?>

                    <div class="col-lg-6 col-12">
                        <?php
                        $sql = "SELECT * from news where landingStatus='1' AND category='Events' AND activeStatus='1' ORDER BY date DESC
                    LIMIT 2;";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);

                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {
                        ?>

                        <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                            <div class="news-top w-100" data-aos="fade-up">

                                <a onclick="location.href = 'news-and-events.php?heading=<?php echo $result->heading ?>&id=<?php echo   $result->id ?>';"
                                    target="_blank" class="news-image-hover news-image-hover-success">
                                    <img src="admin/uploads/<?php echo  $result->image ?>" class="img-fluid news-image"
                                        alt="">
                                </a>

                                <div class="news-category bg-success text-white"><?php echo  $result->category ?></div>
                            </div>

                            <div class="news-bottom w-100">
                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <?php
                                                $heading =  substr($result->heading, 0, 65);
                                                ?>
                                        <a href="news-and-events.php?heading=<?php echo $result->heading ?>&id=<?php echo   $result->id ?>"
                                            class="news-title-link"><?php echo  $heading ?>...</a>
                                    </h5>
                                    <?php
                                            $date = date_create($result->date);
                                            ?>
                                    <span class="text-muted"><?php echo date_format($date, "d/m/Y"); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php }
                        }
                        ?>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12 mx-auto">

                        <h2 class="mb-4 text-center" data-aos="fade-up">Write to us</h2>
                        <form action="mail.php" method="POST" enctype="multipart/form-data" autocomplete="off"
                            class="contact-form" role="form" data-aos="fade-up">

                            <div class="row">

                                <div class="col-lg-6 col-6 ">
                                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup>
                                    </label>

                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Full name" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="email" class="form-label">Email <sup class="text-danger">*</sup>
                                    </label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required>
                                </div>

                                <div class="col-lg-6 col-6 my-4">
                                    <label for="phone" class="form-label">Phone Number <sup class="text-danger">*</sup>
                                    </label>

                                    <input type="number" name="phone" id="phone" class="form-control"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="col-lg-6 col-6 my-4">
                                    <label for="subject" class="form-label">Subject<sup class="text-danger">*</sup>
                                    </label>

                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="Subject">
                                </div>

                                <div class="col-12 my-4">
                                    <label for="message" class="form-label">How can we help?</label>

                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Tell us about the project" required></textarea>

                                </div>
                                <div class="col-lg-5 col-12 mx-auto mt-5">
                                    <button type="submit" name="submit" id="submit" class="form-control">Send
                                        Message</button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1651.4809337784386!2d76.41135254302985!3d10.106800236967418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b08091da73b88a7%3A0x84353e2c4abe5459!2sMETAVALLEY%20TBI!5e0!3m2!1sen!2sin!4v1667887733650!5m2!1sen!2sin"
                class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen=""
                loading="lazy"></iframe>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container py-5">
            <div class="row">
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
                            <a href="https://www.linkedin.com/company/metavalleytbi"
                                class="social-icon-link bi-linkedin"></a>
                        </li>
                    </ul>
                </div>
                <div class="text-center">
                    <a href="#">MetaValley TBI</a>, © All Right Reserved. Designed by <a href="https://infiniio.co.in/"
                        target="_blank">Infinio Technology Solutions</a>
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