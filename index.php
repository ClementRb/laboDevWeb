<?php
    session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}if (!isset($_SESSION['membre_id'])){
    header('Location:login');
} ?>

<html xmlns="">
<head>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'/>
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/magnific-popup.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/responsive.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Instagram_like</title>
</head>
<header>
    <div class="navbar-fixed ">
        <nav>
            <div class="nav-wrapper">
                <a href="accueil" class="brand-logo center">Postagram</a>
                <ul id="nav-mobile" class="left">
                    <li><a href="profil">&nbsp;Profil </a></li>
                    <li> <a href="#" id="toggler">Poster une photo</a></li>
                </ul>
                <ul id="nav-mobile" class="right">
                    <li><a href="logout">Déconnexion</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<body>
<div class="container">
    <div class="row">
    <div class="col s1"></div>
        <div class="col s1"></div>
        <div class="col s1"></div>

   <div>
       <?php
      if( !empty($message) ) 
      {
        echo '<p>',"\n";
        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
        echo "\t</p>\n\n";
      }
    ?>

   </div>
    <div class="col s6">

        <div id="toggle">
            <form enctype="multipart/form-data" action="upload.php" method="post">
                <p>
                    <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000" />
                    <input name="fichier" type="file" id="fichier_a_uploader" />
                    <input type="submit" name="submit" value="Uploader" />
                </p>
            </form>
        </div>
   <?php
   $reponse = $bdd->prepare('SELECT * FROM image INNER JOIN membre ON image.membre_id = membre.membre_id  ORDER BY image.date DESC');
   $reponse->execute();

   while ($donnees = $reponse->fetch()){
       echo '<div class="container_image" style="border-color: #0b0b0b;">
 <article class="blog-post-wrapper">
 <header class="entry-header">
<ul class="left">
                <li><h4><a href="'. $donnees['login'].'">'. $donnees['login'].'</a></h4></li>
                </ul>
                <ul class="right">
                    <li>Posté le : '. $donnees['date'].'</li>
                    </ul>
                    </header>
                <img src="./images/'. $donnees['nom_image']. '">
                </article>
            </div>';
   } ?>
    </div>
        <div class="col s1"></div>
        <div class="col s1"></div>
        <div class="col s1"></div>
    </div>
</div>
</body>
<script type="text/javascript"></script>
<script src="js/jquery.js"></script>
<script>
    /* <![CDATA[ */
    /*
    |-----------------------------------------------------------------------
    |  jQuery Toggle Script by Matt - skyminds.net
    |-----------------------------------------------------------------------
    |
    | Affiche/cache le contenu d'un bloc une fois qu'un lien est cliqué.
    |
    */
    // On attend que la page soit chargée
    jQuery(document).ready(function()
    {
// On cache la zone de texte
        jQuery('#toggle').hide();
// toggle() lorsque le lien avec l'ID #toggler est cliqué
        jQuery('a#toggler').click(function()
        {
            jQuery('#toggle').toggle(400);
            return false;
        });
    });
    /* ]]> */

</script>
</html>
    