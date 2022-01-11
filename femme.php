<?php
require_once("security.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/icon.jpg" />
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="https://kit.fontawesome.com/3597400b38.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Page pour les femmes</title>
</head>

<body>
    <?php
        require_once("entete.php");
    ?>

    <div id="cours">
        <header class="header">
            <h1 class="h1">C'est votre chez-vous, restez jolie</h1>
            <a href="image/bouton_femme.jpg" data-lightbox="femme" data-title="Naviguer dans la galerie femme">
                <button class="button">Naviguer <i class="fas fa-female"></i></button>
            </a>
        </header>
    </div>



    <div class="img-slider">
        <div class="slide active">
            <img src="image/0.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/2.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/3.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/4.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="slide">
            <img src="image/5.jpg" alt="">
            <div class="info">
                <h2>Bienvenu chez naDan</h2>
                <p>C'est votre boutique, votre chez-vous</p>
            </div>
        </div>
        <div class="navigation">
            <div class="btn active"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
        </div>
    </div>


    <section class="main">
        <div class="cards">
            <div class="card index_espace2">
                <a href="image/femme_collier_Or.jpg" data-lightbox="femme" data-title="Collier en Or 10K"><img src="image/femme_collier_Or.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Collier en Or 10K</h4>
                    <h4 class="price">1500$</h4>
                </div>
                <div class="card-body">
                    <p>Soyez ravissante</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/femme_veste.jpg" data-lightbox="femme" data-title="Veste pour les femmes"><img src="image/femme_veste.jpg"></a>
                <div class="card-header">
                    <h4 class="title">Veste pour les femmes</h4>
                    <h4 class="price">1000$</h4>
                </div>
                <div class="card-body">
                    <p>Soyez chic</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/femme_meche.jpg" data-lightbox="femme" data-title="Mèche"><img src="image/femme_meche.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Mèche</h4>
                    <h4 class="price">25$</h4>
                </div>
                <div class="card-body">
                    <p>Gardez votre tête propre</p>
                </div>
            </div>



            <div class="card index_espace2">
                <a href="image/femme_babouche.jpg" data-lightbox="femme" data-title="Babouche pour les femmes"><img src="image/femme_babouche.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Babouche pour les femmes</h4>
                    <h4 class="price">20$</h4>
                </div>
                <div class="card-body">
                    <p>Marcher confortablement</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/femme_robe.jpg" data-lightbox="femme" data-title="Robe de nuit"><img src="image/femme_robe.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Robe de nuit</h4>
                    <h4 class="price">40$</h4>
                </div>
                <div class="card-body">
                    <p>Dormez confortablement</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/femme_maquillage.jpg" data-lightbox="femme" data-title="Maquillage"><img src="image/femme_maquillage.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Maquillage</h4>
                    <h4 class="price">50$</h4>
                </div>
                <div class="card-body">
                    <p>Maquillage pour femme</p>
                </div>
            </div>



        </div>


        <!--Video youtube-->

        <div class="video">

            <!-- allowfullscreen : Pour autoriser le plein ecran -->
            <iframe src="https://www.youtube.com/embed/QrZs0uEHgO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        // Javascript for image slider manual navigation
        var manualNav = function(manual) {
            slides.forEach((slide) => {
                slide.classList.remove('active');

                btns.forEach((btn) => {
                    btn.classList.remove('active');
                });
            });

            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
            });
        });

        // Javascript for image slider autoplay navigation
        var repeat = function(activeClass) {
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function() {
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });

                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if (slides.length == i) {
                        i = 0;
                    }
                    if (i >= slides.length) {
                        return;
                    }
                    repeater();
                }, 10000);
            }
            repeater();
        }
        repeat();
    </script>

</body>

</html>