<?php

session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billy's BrewStirs</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="img/Logo.PNG" alt="Billy's">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
            <a href="order.php">Order now</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Craft Beer</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
            <a href="order.html" class="btn">Order Online</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="img/Md.jpg" alt="">
            </div>

            <div class="content">
                <h3>what makes our Beer special?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section   -->

    <section class="selling" id="selling">

        <h1 class="heading"> Top <span>Sellings</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="img/Applecider.jpg" alt="Applecider">
                <h3>Apple Cider</h3>
                <div class="price">550/-<span>1L</span></div>
                <p>Made by fermenting apple juice with champagne yeast this is a classic apple cider, spritzy with a semi dry finish & hint of tartness in balance.</p>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="img/Belginwit2.jpg" alt=Belginwit"">
                <h3>Belgin Wit</h3>
                <div class="price">550/- <span>1L</span></div>
                <p>A refreshing Belgian style Witbier with hints of orange zest, coriander & vanilla. Creamy medium-light body and semi-sweet finish.</p>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="img/hefe.jpg" alt="Hefewizen">
                <h3>Hefewizen</h3>
                <div class="price">550/- <span>1L</span></div>
                <p>A classic German Weissbier with notes of banana & clove. Creamy medium-light body and semi-sweet finish.</p>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="img/rasberry-ale.jpg" alt="Raspberry-pale-ale">
                <h3>Raspberry Pale Ale</h3>
                <div class="price">550/- <span>1L</span></div>
                <p>Crisp American Pale Ale with citrus and raspberry aromas & flavour. Mild tart and dry finish.</p>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="img/rice-lager.jpg" alt="ORYZA Lager">
                <h3>ORYZA rice Lager</h3>
                <div class="price">550/- <span>1L</span></div>
                <p>A unique beer made with locally grown Indrayani rice. This lager is crisp & refreshing, light bodied, semi-sweet and fragrant, reminiscent of the special rice it is brewed from.</p>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="img/westcost.jpg" alt="westcost IPA">
                <h3>WestCost IPA</h3>
                <div class="price">550/- <span>1L</span></div>
                <p>At the core, west coast IPAs highlight bitterness over everything where east coast IPAs strike a balance between malty sweetness and hoppy bitterness.</p>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </section>

    <!-- menu section ends -->


    <!-- contact section  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.3868463279664!2d73.80674981420468!3d18.55659037291638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf0bd685c4ad%3A0xef880509e998303f!2sBilly&#39;s%20BrewStirs!5e0!3m2!1sen!2sin!4v1649480245475!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="cnt-content">
                <h4>Billy's BrewStirs :</h4>
                <p>Centriole Building, Ground Floor, ITI Rd, next to Starbucks Coffee, Aundh, Pune, Maharashtra 411007.</p>
                <p>For any query, please call us at : <span>09011081304</span> </p>
            </div>
        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

    </section>

    <!-- footer section ends -->


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>