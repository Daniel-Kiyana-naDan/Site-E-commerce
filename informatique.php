<?php
require_once("security.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/cssfile.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/icon.jpg" />
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="https://kit.fontawesome.com/3597400b38.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Equipement informatique</title>
</head>

<body>
    <?php
        require_once("entete.php");
    ?>

    <div id="cours">
        <header class="header">
            <h1 class="h1">Equipements informatique, les meilleures au monde</h1>
            <a href="image/bouton_informatique.jpg" data-lightbox="informatique" data-title="Naviguer dans la galerie informatique">
                <button class="button">Naviguer <i class="fas fa-laptop"></i></button>
            </a>
        </header>
    </div>




    <div class="slider">
        <!-- fade css -->
        <div class="myslide fade">
            <div class="txt">
                <h1>MacBook Pro</h1>
                <p>Bienvenu chez naDan<br>C'est votre boutique, votre chez-vous</p>
            </div>
            <img src="image/img1.jpg" style="width: 100%; height: 100;">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>computer</h1>
                <p>Bienvenu chez naDan<br>C'est votre boutique, votre chez-vous</p>
            </div>
            <img src="image/img2.jpg" style="width: 100%; height: 100;">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>MacBook</h1>
                <p>Bienvenu chez naDan<br>C'est votre boutique, votre chez-vous</p>
            </div>
            <img src="image/img3.jpg" style="width: 100%; height: 100;">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>Iphone</h1>
                <p>Bienvenu chez naDan<br>C'est votre boutique, votre chez-vous</p>
            </div>
            <img src="image/img4.jpg" style="width: 100%; height: 100;">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>Ordinateur portable</h1>
                <p>Bienvenu chez naDan<br>C'est votre boutique, votre chez-vous</p>
            </div>
            <img src="image/img5.jpg" style="width: 100%; height: 100;">
        </div>
        <!-- /fade css -->

        <!-- onclick js -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="dotsbox" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        <!-- /onclick js -->
    </div>



    <section class="main">
        <div class="cards">
            <div class="card index_espace2">
                <a href="image/informatique_bureau.jpg" data-lightbox="informatique" data-title="Ordinateur du bureau"><img src="image/informatique_bureau.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Ordinateur du bureau</h4>
                    <h4 class="price">1100$</h4>
                </div>
                <div class="card-body">
                    <p>Organisez votre bureau informatique</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/informatique_multi.jpg" data-lightbox="informatique" data-title="Multi port USB"><img src="image/informatique_multi.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Multi port USB</h4>
                    <h4 class="price">20$</h4>
                </div>
                <div class="card-body">
                    <p>Prise USB pour vos ordinateurs</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/informatique_clavier.jpg" data-lightbox="informatique" data-title="Clavier"><img src="image/informatique_clavier.jpg"></a>
                <div class="card-header">
                    <h4 class="title">Clavier</h4>
                    <h4 class="price">70$</h4>
                </div>
                <div class="card-body">
                    <p>Achetez des claviers pour vos ordinateurs</p>
                </div>
            </div>



            <div class="card index_espace2">
                <a href="image/informatique_point.jpg" data-lightbox="informatique" data-title="Point d'accès"><img src="image/informatique_point.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Point d'accès</h4>
                    <h4 class="price">80$</h4>
                </div>
                <div class="card-body">
                    <p>Restez connecter sur internet</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/informatique_portable.jpg" data-lightbox="informatique" data-title="Ordinateur portable"><img src="image/informatique_portable.jpg"></a>
                <div class="card-header">
                    <h4 class="title">Ordinateur portable</h4>
                    <h4 class="price">1200$</h4>
                </div>
                <div class="card-body">
                    <p>Ordinateur à meilleur prix</p>
                </div>
            </div>

            <div class="card index_espace2">
                <a href="image/informatique_projecteur.jpg" data-lightbox="informatique" data-title="Projecteur"><img src="image/informatique_projecteur.jpg" height="350"></a>
                <div class="card-header">
                    <h4 class="title">Projecteur</h4>
                    <h4 class="price">130$</h4>
                </div>
                <div class="card-body">
                    <p>Projectez vos images</p>
                </div>
            </div>



        </div>


        <!--Video youtube-->

        <div class="video">

            <!-- allowfullscreen : Pour autoriser le plein ecran -->
            <iframe src="https://www.youtube.com/embed/QW-GGvHufxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    <script src="js/jsfile.js"></script>

</body>

</html>