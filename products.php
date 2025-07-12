<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | HHV Thermal Tech</title>
    <link rel="icon" href="./assets/images/logo_1.png" type="image/x-icon">


    <!-- links for the stylesheets -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./products-page.css">

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

    <!-- ----------start of the topbar----------- -->
    <?php include './topbar.php' ?>

    <!-- ----------start of the navbar----------- -->
    <?php include './navbar.php' ?>


    <!-- ----------start of the products page title---------- -->
    <div class="product-page-title">
        <h1>Explore Our Products</h1>
        <p>Cutting-edge thermal solutions for every industry</p>
    </div>


    <!-- ----------start of the products page cards with filtering and searching-----------  -->
    <section class="page-products-cont">
        <div>
            <div class="controls">
                <div class="search-bar">
                    <input id="searchInput" type="text" placeholder="Search Products..."><span><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="filters">
                    <a class="filter active" data-category="all">All</a>
                    <a class="filter" data-category="furnace">Furnace</a>
                    <a class="filter" data-category="brazing">Brazing</a>
                    <a class="filter" data-category="melting">Melting</a>
                </div>
            </div>
            <div class="page-products">
                <div class="page-product-card" data-title="Vacuum Heat Treatment Furnaces" data-category="furnace">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product1.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Vacuum Heat Treatment Furnaces</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="Vacuum Brazing Furnaces" data-category="brazing">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product2.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Vacuum Brazing Furnaces</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="Vacuum Hot Presses" data-category="furnace">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product3.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Vacuum Hot Presses</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="Vacuum Aluminium Brazing Furnaces" data-category="brazing">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product4.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Vacuum Aluminium Brazing Furnaces</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="Vacuum Induction Melting and Casting Furnaces" data-category="melting">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product5.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Vacuum Induction Melting and Casting Furnaces</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="CVD,CVI and Graphitization Furnaces" data-category="furnace">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product6.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>CVD,CVI and Graphitization Furnaces</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="Vacuum Arc Re-melting Furnaces" data-category="melting">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product7.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Vacuum Arc Re-melting Furnaces</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="Thermo Vacuum Systems" data-category="furnace">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product8.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Thermo Vacuum Systems</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="page-product-card" data-title="Vacuum Ovens" data-category="furnace">
                    <div class="page-product-img">
                        <img src="./assets/images/products-page/product9.png" alt="">
                    </div>
                    <div class="page-product-card-title">
                        <h3>Vacuum Ovens</h3>
                    </div>
                    <div class="page-product-card-button">
                        <a href="#">Learn More</a>
                    </div>
                </div>  
            </div>
        </div>
    </section>


    <!-- ------------start of the spares and services section--------------  -->
    <div class="spares-and-services">

    </div>

    <!-- ----------------start of the footers section-------------------- -->
    <?php include './footer.php' ?>

    <!-- ------script for handling the sidebar of mobile and tab screens------- -->
    <script src="./navbar-sidebar.js"></script>

    <!-- ------gsap link for the animations for texts and container--------  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- ------script for the animations of texts and conta iners------------ -->
    <script src="./products-page-animation.js"></script>


</body>

</html>