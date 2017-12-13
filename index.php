<?php
    session_start();
if (!isset($_SESSION['login'])){
    header('Location:login.php');
}
?>

<html>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/main.js"></script>
   <head>
   <title>Instagram_like</title>
   </head>
   <header>
    <div class="navbar-fixed">
    <nav>
     <div class="nav-wrapper">
     <a href="#" class="brand-logo center">Logo</a>
           <ul id="nav-mobile" class="left">
           <li>&nbsp;Bonjour <?php echo $_SESSION['login']; ?> </li>
           </ul>
           <ul id="nav-mobile" class="right">
               <li><a href="logout.php">Déconnexion</a></li>
           </ul>
     </div>
    </nav>
    </div>
    </header>
    
    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'clement', 'clement');
    }
    catch(Exception $e)
    {
        die('Erreur :'.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM membre');
    while ($donnees = $reponse->fetch())
    {
    ?>

<body>
 <div class="container" >
 <article class="post"><?php echo $donnees['login']; ?><br />
  <?php echo '<img src="images/'.$donnees["image"].'">'; ?><br />
     <div class="entre_deux"></div>
     </article>
     </div>
 </body>

 <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
    <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   </html>
    