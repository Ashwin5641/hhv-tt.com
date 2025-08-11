<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | HHV Thermal Tech</title>
    <link rel="icon" href="./assets/images/logo_1.png" type="image/x-icon">


    <!-- links for the stylesheets -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./services.css">

    <!-- ---------------link for the fonts-------------- -->
    <!-- Rajdhaani Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- DM sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <!-- --------------link for the font aweseome----------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- --------------link for the google icons--------------------- -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=keyboard_arrow_down" />

    <!-- ---------link for the AOS animations on scroll-------------- -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- -------swiper.js cdn link for the carousel and cards --------- -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@11/swiper-bundle.min.css" />

</head>

<body>
    <!-- ------------start of the topbar----------------  -->
    <?php include './topbar.php' ?>
    <!-- ------------start of the navbar----------------  -->
    <?php include './navbar.php' ?>

    <!-- ------------start of the page spares and services title--------------- -->
    <div class="page-contact-us-title">
        <h1>Spares and Services</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi rerum recusandae quibusdam!</p>
    </div>


    <!-- ------------start fo the page spares and services title--------------- -->
    <div class="main-section">
        <div class="main-content">
            <!-- Left text -->
            <div class="main-text">
                <h2>Excellence in After Sales Service</h2>
                <p>
                    At HHVTT, we take great pride in our role as a leading specialist in plant engineering.
                    Our After Sales services are meticulously designed to ensure the uninterrupted performance
                    of your furnace, eliminating unexpected downtime and disruptions. With a globally equipped
                    service network, we deliver reliable support, anytime, anywhere.
                </p>
            </div>

            <!-- Right image -->
            <div class="main-image">
                <img src="./assets/images/services-page/service.jpg" alt="HHVTT Services">
            </div>
        </div>

        <!-- Service cards inside main section -->
        <div class="service-cards">
            <div class="service-card">
                <h3>Proactive Maintenance</h3>
                <p>Trust our experience to maintain your furnace proactively—avoiding costly breakdowns and improving reliability.</p>
            </div>
            <div class="service-card">
                <h3>Furnace Relocation</h3>
                <p>We ensure a seamless relocation experience for your furnace with minimal disruption to your operations.</p>
            </div>
            <div class="service-card">
                <h3>Annual Maintenance Contracts</h3>
                <p>Choose from our worry-free AMC plans for consistent, year-round maintenance and peak furnace performance.</p>
            </div>
            <div class="service-card">
                <h3>Spares Supply</h3>
                <p>We supply high-quality, genuine spare parts to ensure your systems continue to perform optimally.</p>
            </div>
            <div class="service-card">
                <h3>Hot Zone & Component Replacement</h3>
                <p>We replace hot zones and critical parts with precision to minimize downtime and ensure long-term performance.</p>
            </div>
        </div>
    </div>




    <!-- -------------start of the footer section------------ -->
    <?php include './footer.php' ?>

    <!-- ------script for handling the sidebar of mobile and tab screens------- -->
    <script src="./navbar-sidebar.js"></script>

</body>

</html>