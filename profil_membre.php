<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}if (!isset($_SESSION['membre_id'])){
    header('Location:login');
} ?>


<html>
<?php
include 'header.php';
?>
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
 
                <div >
                    <article class="blog-post-wrapper col s3">
                        <div class="figure">
                            <div class="post-thumbnail">
                                <a href="image/'.$donnees['id'].'"> <img src="./images/'. $donnees['nom_image']. '" class="img-responsive " alt=""><a>
                            </div>
                            </div><!-- /.figure -->
                         <header class="entry-header">
                            <p>Posté le : '. $donnees['date'].'</p>
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
<script src="js/jquery.js"></script>
</html>