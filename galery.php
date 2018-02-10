<?php require_once "header.html"?>

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="index.php" id="logo">Gaec de la Patouze</a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="products.php">Produits</a></li>
                <li class="current"><a href="galery.php">Photos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    </div>

    <!-- Main -->
    <section class="wrapper style1">
        <div class="container">
            <a data-fancybox="gallery" href="images/1.jpg"><img src="images/1.jpg"></a>
            <a data-fancybox="gallery" href="images/2.jpg"><img src="images/2.jpg"></a>
            <a data-fancybox="gallery" href="images/3.jpg"><img src="images/3.jpg"></a>
        </div>
    </section>

<?php require_once "footer.html"?>