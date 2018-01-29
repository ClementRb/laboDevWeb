<?php
session_start();
try {

    $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');
}
catch
(Exception $e)
{
    die('Erreur :' . $e->getMessage());
}
?>


<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"/>
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'/>
    <!-- Animate css -->
    <link href="css/animate.css" rel="stylesheet"/>
    <!-- Magnific css -->
    <link href="css/magnific-popup.css" rel="stylesheet"/>
    <!-- Custom styles CSS -->
    <link href="css/style.css" rel="stylesheet" media="screen"/>
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">






    <title>Instagram_like</title>
</head>
<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="accueil" class="brand-logo center">Instagram</a>
                <ul id="nav-mobile" class="left">
                    <li><a href="profil">&nbsp;Profil </a></li>
                </ul>
                <ul id="nav-mobile" class="right">
                    <li><a href="logout">Déconnexion</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<body>


<section id="blog" class="latest-blog-section section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInUp"><?php

            echo $_GET["login"];
            ?></h2>
        <div class="row">



<?php
$reponse = $bdd->prepare('SELECT * FROM image INNER JOIN membre ON image.membre_id = membre.membre_id WHERE membre.login = ? ORDER BY image.date DESC');
$reponse->execute(array($_GET["login"]));

while ($donnees = $reponse->fetch()){
       echo '
 
                <div class="col-sm-4">
                    <article class="blog-post-wrapper col s3">
                        <div class="figure">
                            <div class="post-thumbnail">
                                <img src="./images/'. $donnees['nom_image']. '" class="img-responsive " alt="">
                            </div>
                            </div><!-- /.figure -->
                         <header class="entry-header">
                            <p>'. $donnees['date'].'</p>
                            </header><!-- .entry-header -->
                    </article>
                    </div><!-- /.col-sm-4 -->
               
           ';
}

?>

        </div><!--.row-->
    </div><!-- /.container -->
</section><!-- End Blog Section -->


</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript"></script>
<!-- Javascript files -->

<script src="js/jquery.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.easypiechart.js"></script>
<script src="js/jquery.shuffle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.fitvids.js"></script>

</html>