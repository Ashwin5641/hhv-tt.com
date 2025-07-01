<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHV Thermal Tech - Premier Thermal Tech Vacuum Technology Group</title>
    <link rel="icon" href="./assets/images/logo_1.png">

    <!-- links for the stylesheets -->
    <link rel="stylesheet" href="./style.css">

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

    <!-- --------------link for the google icons-------------------- -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=keyboard_arrow_down" />

    <!-- link for the AOS animations on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- swiper.js cdn link for the products carousel -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@11/swiper-bundle.min.css" />

</head>
<body>
     <?php include './topbar.php'; ?>
     <?php include './navbar.php'; ?>


    <!-- script for handling the sidebar of mobile and tab screens -->
    <script>

        // function for hamburger and cross icon

        const hamburger = document.querySelector('.sidebar-hamburger');
        const defaultmenuItems = document.querySelector('.sidebar-menu-items');
        const xmark = document.querySelector('.sidebar-xmark');

        defaultmenuItems.style.display = "none";
        xmark.style.display = "none";

        hamburger.addEventListener("click", () => {
            defaultmenuItems.style.display = "block";
            hamburger.style.display = "none";
            xmark.style.display = "block";
        });

        xmark.addEventListener("click", () => {
            defaultmenuItems.style.display = "none";
            hamburger.style.display = "block";
            xmark.style.display = "none";
        });


        // function for the products and products lists
        const productsPlus = document.querySelector('.products-plus');
        const productsCross = document.querySelector('.products-cross');
        const defaultProductsList = document.querySelector('.sidebar-products-list');

        defaultProductsList.style.display = "none";
        productsCross.style.display = "none";

        productsPlus.addEventListener("click", () => {
            defaultProductsList.style.display = "block";
            productsPlus.style.display = "none";
            productsCross.style.display = "block";
        });

        productsCross.addEventListener("click", () => {
            defaultProductsList.style.display = "none";
            productsPlus.style.display = "block";
            productsCross.style.display = "none";
        });

    </script> 

</body>
</html>