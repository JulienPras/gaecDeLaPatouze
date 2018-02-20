<?php require_once "header.html"?>

<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="index.php" id="logo">Gaec de la Patouze</a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="index.php">Acceuil</a></li>
                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="products.php">Produits</a></li>
                <li><a href="galery.php">Photos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    </div>

    <!-- Highlights -->
    <section class="wrapper style1">
        <div class="container">

            <!-- Banner -->
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="images/slider1.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/slider2.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/slider3.jpg" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>


            <div class="row 200%">
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <i class="icon major 	fa fa-users"></i>
                        <h3>Une exploitation familiale</h3>
                        <p>Deux frères partageant l'amour de la nature et de l'elevage.</p>
                    </div>
                </section>
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <i class="icon major fa fa-certificate"></i>
                        <h3>Un élevage en plein air</h3>
                        <p>Des vaches Salers à qui on laisse leurs cornes, elevées dans les 75 hectares du Gaec.</p>
                    </div>
                </section>
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <i class="icon major fa fa-cutlery"></i>
                        <h3>Un circuit court</h3>
                        <p>Une viande savoureuse du producteur au consomateur sans intermédiaire.</p>
                    </div>
                </section>
            </div>
        </div>
    </section>


</div>

<?php require_once "footer.html"?>