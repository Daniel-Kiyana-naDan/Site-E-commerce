<?php
require_once("security.php");
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>À propos des auteurs</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="image/icon.jpg" />
    <link rel="stylesheet" href="css/apauteu.css"/>
    <meta name="description" content="À propos de l'auteur">
    <script src="https://kit.fontawesome.com/3597400b38.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="photo1">
        
    </div>
    <?php
        require_once("entete.php");
    ?>
    <div class="section">
        <div class="sec">
            <div class="left">
                <img src="image/1.jpg" width="150" alt="Ma photo" title="naDan">
            </div>
            <div class="right">
                <p>Bonjour, je m'appelle Daniel Kiyana naDan.</p>
                <p>Je suis un professionnel en électronique et en informatique.<br>Mon projet professionel est d'aider les débutants en électronique et en programmation pour qu'ils soient aussi un jour des professionels dans ces deux domaines</p>
            </div>
        </div>
    </div>
    <div class="photo2">

    </div>
    <div class="section">
        <div class="sec">
            <div class="left">
                <img src="image/33.jpg" width="150" alt="Ma photo" title="naDan">
            </div>
            <div class="right">
                <p>Je suis actuellement étudiant à <strong>L'UNIVERSITE ESPOIR D'AFRIQUE (UEA)</strong> et j'ai suivi cette voie car je suis passionné par le domaine du web.</p>
                <p>J'ai créé mon propre site, ce qui m'a permis de développer de nombreuses compétences, par exemple en PHP, SQL et JavaScript, mon souhait est de gagner en polyvalence.</p>
            </div>
        </div>
    </div>
    <div class="photo3">

    </div>
    <div class="section">
        <div class="sec">
            <div class="left">
                <img src="image/logo.png" width="150" alt="Ma photo" title="naDan">
            </div>
            <div class="right">
                <p>Voici un site de vente en ligne.</p>
                <p>Je suis un Web master.<br><br>Mon projet professionel a pour but d'aider les gens à faire leurs achats rapidement et confortablement partout où ils sont.</p>
            </div>
        </div>
    </div>
    <div class="photo4">

    </div>
    <section class="competences">
        <h1 style="color: #d54b3d;">Compétences et niveau</h1>
        <div class="sec">
            <div class="cleft">
                <div class="sous">
                    <div class="sousleft">
                        <h3 class="competence">Compétences</h3>
                    </div>
                    <div class="sousright">
                        <h3 class="niveau">Niveaux</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <h3>HTML / CSS</h3>
                    </div>
                    <div class="sousright">
                        <h3>EXPERT</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <h3>JavaScript</h3>
                    </div>
                    <div class="sousright">
                        <h3>EXPERT</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <h3>PHP / SQL</h3>
                    </div>
                    <div class="sousright">
                        <h3>EXPERT</h3>
                    </div>
                </div>
            </div>
            <div class="cright">
                <div class="sous">
                    <div class="sousleft">
                        <h3 class="competence1">Compétences</h3>
                    </div>
                    <div class="sousright">
                        <h3 class="niveau1">Niveaux</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <h3>Electrotechnique</h3>
                    </div>
                    <div class="sousright">
                        <h3>AVANCE</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <h3>Electrostatique</h3>
                    </div>
                    <div class="sousright">
                        <h3>AVANCE</h3>
                    </div>
                </div>
                <div class="sous">
                    <div class="sousleft">
                        <h3>Electromécanique</h3>
                    </div>
                    <div class="sousright">
                        <h3>AVANCE</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="photo5">

    </div>
    <div class="section">
        <div class="sec">
            <div class="left">
                <h2>Conclusion</h2>
            </div>
            <div class="right">
                <p>En conclusion, nous devons avouer que rétrospectivement nous sommes satisfaits de cette mémoire puisque nous avons atteint des nouveaux objectifs.</p>
                <p>En effet,ce mini projet nous a permis de comprendre et apprendre à maitriser l'électronique et la programmation.</p>
                <p>Enfin nous ne prétendons pas avoir résoudre le problème posé dans son intégralité mais nous sommes par ailleurs convaincus que le travail élaboré n'est qu'une étape primaire aussi bien pour une carrière professionnelle que pour des études
                    plus approfondies.</p>
            </div>
        </div>
    </div>
    <footer>
        <!-- Pour mettre le signe de COPYRIGHT -->
        <p>&copy; Contactez-nous au +257 61 14 66 21</p>
        <div class="social-media">
            <p><a href="https://www.facebook.com/daniel.kiyana.3"target="_blank"><i class="fab fa-facebook"></i></a></p>
            <p><a href="https://twitter.com/KiyanaNadan" target="_blank"><i class="fab fa-twitter"></i></a></p>
            <p><a href="https://www.instagram.com/nadan_kiyana/" target="_blank"><i class="fab fa-instagram"></i></a></p>
            <p><a href="mailto:danielkiyana512@gmail.com" target="_blank"><i class="far fa-envelope"></i></a></p>
        </div>
    </footer>

    <div>
         <a href="#" class="to-top"><i class="fas fa-chevron-up"></i></a>
    </div>


    <script src="js/animation.js"></script>
    <script>
        //AOS (Animate On Scroll)
             AOS.init();
    </script>
</body>
</html>