<?php
require_once("security.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/icon.jpg" />
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="https://kit.fontawesome.com/3597400b38.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Appareil electronique</title>
</head>

<body>
    <?php
        require_once("entete.php");
    ?>

    <div id="cours">
        <header class="header">
            <h1 class="h1">Vos appareil, à bon prix</h1>
            <a href="image/bouton_electronique.png" data-lightbox="electronique" data-title="Naviguer dans la galerie electronique">
                <button class="button">Naviguer <i class="fas fa-charging-station"></i></i></button>
            </a>
        </header>
    </div>



    <div class="slider">
        <div class="slide active">
            <img src="image/11.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/12.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/13.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/14.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/15.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
        </div>
        <div class="navigation-visibility">
            <div class="slide-icon active"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
        </div>
    </div>


    <section class="main">
        <div class="cards">
            <div class="card index_espace2">
                <a href="image/electonique_tv.jpg" data-lightbox="electronique" data-title="Ecran plasma"><img src="image/electonique_tv.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Ecran plasma</h4>
                    <h4 class="price">1000$</h4>
                </div>
                <div class="card-body">
                    <p>Ecran plasma meilleure qualité</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/electonique_cafe.jpg" data-lightbox="electronique" data-title="Machine à café"><img src="image/electonique_cafe.jpg"></a>
                <div class="card-header">
                    <h4 class="title">Machine à café</h4>
                    <h4 class="price">120$</h4>
                </div>
                <div class="card-body">
                    <p>Restez en bonne santé</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/electonique_climatiseur.jpg" data-lightbox="electronique" data-title="Climatiseur"><img src="image/electonique_climatiseur.jpg"></a>
                <div class="card-header">
                    <h4 class="title">Climatiseur</h4>
                    <h4 class="price">500$</h4>
                </div>
                <div class="card-body">
                    <p>Gardez une bonne atmosphère</p>
                </div>
            </div>



            <div class="card index_espace2">
                <a href="image/electonique_samsung.jpg" data-lightbox="electronique" data-title="SAMSUNG S21 Ultra"><img src="image/electonique_samsung.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">SAMSUNG S21 Ultra</h4>
                    <h4 class="price">900$</h4>
                </div>
                <div class="card-body">
                    <p>Téléphone très performant</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/electronique_airpods.jpg" data-lightbox="electronique" data-title="Airpods pro"><img src="image/electronique_airpods.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Airpods pro</h4>
                    <h4 class="price">30$</h4>
                </div>
                <div class="card-body">
                    <p>Ecoutez de la musique partout où vous êtes</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/electonique_rechaud.jpg" data-lightbox="electronique" data-title="Réchaud"><img src="image/electonique_rechaud.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Réchaud</h4>
                    <h4 class="price">60$</h4>
                </div>
                <div class="card-body">
                    <p>Mangez à tout moment</p>
                </div>
            </div>



        </div>


        <!--Video youtube-->

        <div class="video">

            <!-- allowfullscreen : Pour autoriser le plein ecran -->
            <iframe src="https://www.youtube.com/embed/kYPHTSEU49Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!-- Fin video youtube -->

    </section>


    <footer>
        <!-- Pour mettre le signe de COPYRIGHT -->
        <p>&copy; Contactez-nous au +257 61 14 66 21</p>
        <div class="social-media">
            <p><a href="https://www.facebook.com/daniel.kiyana.3" target="_blank"><i class="fab fa-facebook"></i></a></p>
            <p><a href="https://twitter.com/KiyanaNadan" target="_blank"><i class="fab fa-twitter"></i></a></p>
            <p><a href="https://www.instagram.com/nadan_kiyana/" target="_blank"><i class="fab fa-instagram"></i></a></p>
            <p><a href="mailto:danielkiyana512@gmail.com" target="_blank"><i class="far fa-envelope"></i></a></p>
        </div>
    </footer>


    <div>
        <a href="#" class="to-top"><i class="fas fa-chevron-up"></i></a>
    </div>


    <script src="js/animation.js"></script>
    <script src="js/animation2.js"></script>

</body>

</html>