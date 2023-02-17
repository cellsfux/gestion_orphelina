
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Orphelina</title><!-- mobile responsive meta -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="<?= URLROOT ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= URLROOT ?>assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link href="<?= URLROOT ?>assets/images/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="<?= URLROOT ?>assets/images/favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="<?= URLROOT ?>assets/images/favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">

    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/css/style.css">

</head>

<body>
    <div class="boxed_wrapper">
        <div class="top-bar">
            <div class="container">
                <div class="clearfix">
                    <div class="top-bar-text float_left">
                        <button class="thm-btn donate-box-btn">Faire un dont</button>

                        <p>Effecture un acte de charité pour les autres!</p>
                    </div>


                    <div class="right-column float_right">
                        <ul class="list_inline contact-info">
                            <li><span class="icon-phone"></span>Phone: +243 829100597</li>


                            <li><span class="icon-back"></span>Email: info@cellslfux.com</li>
                        </ul>


                        <div class="" id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" selected value="en">
                                        English
                                    </option>

                                    <option id="fr" value="fr">
                                        French
                                    </option>

                                    <option id="de" value="de">
                                        German
                                    </option>

                                    <option id="it" value="it">
                                        Italian
                                    </option>

                                    <option id="es" value="es">
                                        Spanish
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="theme_menu stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-logo">
                            <a href="<?= URLROOT ?>"><img alt="" src="<?= URLROOT ?>assets/images/logo/logo.png"></a>
                        </div>
                    </div>


                    <div class="col-md-9 menu-column">
                        <nav class="defaultmainmenu" id="main_menu">
                            <ul class="defaultmainmenu-menu">
                                <li >
                                    <a href="<?= URLROOT ?>">Acceuil</a>
                                </li>

                                <li>
                                    <a href="<?= URLROOT ?>main/fiche">Ficher</a>
                                </li>

                                <li>
                                    <a href="<?= URLROOT ?>main/declaration">Déclaration</a>
                                </li>

                                <?php if(!isset( $_SESSION['user-test-covid']) ): ?>
                                    <li>
                                    <a href="<?= URLROOT ?>login">Se connecter</a>
                                </li>

                             <?php endif ?>

                             <?php if(isset( $_SESSION['user-test-covid']) ): ?>

                                <li>
                                    <a href="<?= URLROOT ?>login">Se deconnecter</a>
                                </li>
                                <?php  if($_SESSION['user-test-covid']['role']=='Admin'):  ?>

                                <li>
                                    <a href="<?= URLROOT ?>admin">Administration</a>
                                </li>
                                <?php endif; endif ?>

                                

                                






                             



                            </ul>
                        </nav>
                    </div>


                  
                </div>
            </div>
        </section>