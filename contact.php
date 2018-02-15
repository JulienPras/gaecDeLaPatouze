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
                <li><a href="galery.php">Photos</a></li>
                <li class="current"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    </div>

    <!-- Main -->
    <section class="wrapper style1">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Une question sur nos produits ? N'hésitez pas à nous contacter. </h1>

                <form id="contact-form" method="post" action="contact.php" role="form">

                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Prénom</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Merci de renseigner votre prénom" required="required" data-error="Votre prénom est requis">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Nom</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Merci de renseigner votre nom" required="required" data-error="Votre nom est requis">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Merci de renseigner votre mail" required="required" data-error="Veuillez renseigner un mail valide">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Votre message" rows="4" required="required" data-error="Veuillez renseigner votre message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                                    <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Send message">
                            </div>
                        </div>
                        <div class="row2">
                            <div class="col-md-12">
                                <p class="text-muted"><strong>*</strong> Ces champs sont requis.</p>
                            </div>
                        </div>
                    </div>

                </form>

            </div><!-- /.8 -->
        </div>
    </section>

<?php require_once "footer.html"?>