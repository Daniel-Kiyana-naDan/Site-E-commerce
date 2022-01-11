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
     <link rel="stylesheet" type="text/css" href="css/modification.css">
     <link rel="shortcut icon" type="image/x-icon" href="image/icon.jpg" />
     <script src="https://kit.fontawesome.com/3597400b38.js" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
     <title>Modifier votre votre profil</title>
 </head>

 <body>
     <?php
        require_once("entete.php");
    ?>

     <div class="contact-form">
         <img src="image/logo.png" alt="logo" class="avatar">
         <h2>Modifier votre profil</h2>

         <form method="post" action="UpdateUser.php">

             <p>
                 <label>Nom d'utilisateur</label>
                 <input type="text" name="login"
                     value="<?php echo ((isset($_SESSION['PROFILE'])) ? ($_SESSION['PROFILE']['login']) : "") ?>">
             </p>
             <p>
                 <label>Mot de passe</label>
                 <input type="password" name="password" />
             <div class="iconPassword">
                 <i class="far fa-eye"></i>
                 <i class="far fa-eye-slash"></i>
             </div>
             </p>

             <p>
                 <input type="submit" value="Modifier" />
             </p>
             <p class="creer"><a href="Deconnexion.php">Deconnexion
                     [<?php echo ((isset($_SESSION['PROFILE'])) ? ($_SESSION['PROFILE']['login']) : "") ?>]</a></p>
         </form>
     </div>

     <script type="text/javascript">
     const eye = document.querySelector('.fa-eye');
     const eyeslash = document.querySelector('.fa-eye-slash');
     const ChampPassword = document.querySelector('input[type=password]')

     eye.addEventListener('click', () => {
         eye.style.display = "none";
         eyeslash.style.display = "block";
         ChampPassword.type = "text";
     });

     eyeslash.addEventListener('click', () => {
         eyeslash.style.display = "none";
         eye.style.display = "block";
         ChampPassword.type = "password";
     });
     </script>

 </body>

 </html>