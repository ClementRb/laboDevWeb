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
                    <li>Bonjour <?php
                        $affiche_nom = $bdd->prepare('SELECT login FROM membre WHERE membre_id = ?');
                        $affiche_nom->execute(array($_SESSION["membre_id"]));
                        $result = $affiche_nom->fetch();
                        echo $result["login"];
                        ?></li>
                </ul>
                <ul id="nav-mobile" class="right">
                    <li><a href="profil">&nbsp;Profil </a></li>
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

   <?php
   $reponse = $bdd->prepare('SELECT nom_image, date FROM image WHERE id = ?');
   $reponse->execute(array($_GET['id']));
   $donnees = $reponse->fetch();
   echo '<div class="container_image" style="border-color: #0b0b0b;">
 <article class="blog-post-wrapper">
 <header class="entry-header">
<ul class="left">
               
                </ul>
                <ul class="right">
                    <li>Posté le : '. $donnees['date'].'</li>
                    </ul>
                    </header>
                <img src="./images/'. $donnees['nom_image']. '">
                </article>
            </div>';
    ?>
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

</script>
</html>
