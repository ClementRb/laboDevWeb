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
<?php
include 'header.php';
?>
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

   $current_uri = $_SERVER['REQUEST_URI'];
  $uri_array = explode('/', $current_uri) ;
  $id_image = $uri_array[sizeof($uri_array) - 1];

   $reponse = $bdd->prepare('SELECT nom_image, date FROM image WHERE id = ?');
   $reponse->execute(array($id_image));
   $donnees = $reponse->fetch();
   echo '<div class="container_image" style="border-color: #0b0b0b;">
 <article class="blog-post-wrapper">
 <header class="entry-header">
<ul class="left">
               
               
                    </header>
                <img src="/laboDevWeb//images/'. $donnees['nom_image']. '">
                 </ul>
                <ul class="right">
                    <li>Posté le : '. $donnees['date'].'</li>
                    </ul>
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
<script src="/laboDevWeb/js/jquery.js"></script>
<script>

</script>
</html>
