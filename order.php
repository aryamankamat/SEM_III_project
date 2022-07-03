<?php

$conn = new mysqli('localhost', 'Billys', '', 'beers');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        .selling .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 1.5rem;
        }

        .selling .box-container .box {
            padding: 5rem;
            text-align: center;
            border: var(--border);
        }

        .selling .box-container .box img {
            height: 10rem;
        }

        .selling .box-container .box h3 {
            color: #fff;
            font-size: 2rem;
            padding: 1rem 0;
        }

        .selling .box-container .box .price {
            color: #fff;
            font-size: 2rem;
            padding: .5rem 0;
        }


        .selling .box-container .box p {
            color: #fff;
            font-size: 15px;
            padding: 1rem 0;
        }

        .selling .box-container .box:hover {
            background: #fff;
        }

        .selling .box-container .box:hover>* {
            color: var(--black);
        }
    </style>

</head>

<body>

    <section class="selling" id="selling">

        <h1 class="heading"> Craft Beers </h1>

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

</body>

</html>