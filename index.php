<?php
    session_start();
if (!isset($_SESSION['membre_id'])){
    header('Location:login.php');
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
        <link href="css/animate.css'" rel="stylesheet"/>
        <!-- Magnific css -->
        <link href="css/magnific-popup.css'" rel="stylesheet"/>
        <!-- Custom styles CSS -->
        <link href="css/style.css'" rel="stylesheet" media="screen"/>
        <!-- Responsive CSS -->
        <link href="css/responsive.css'" rel="stylesheet"/>


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
     <a href="index.php" class="brand-logo center">Instagram</a>
           <ul id="nav-mobile" class="left">
           <li><a href="profil.php">&nbsp;Profil </a></li>
           </ul>
           <ul id="nav-mobile" class="right">
               <li><a href="logout.php">Déconnexion</a></li>
           </ul>
     </div>
    </nav>
    </div>
    </header>
       
       
       
        <body>
   <div class="col s4">
       <?php
      if( !empty($message) ) 
      {
        echo '<p>',"\n";
        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
        echo "\t</p>\n\n";
      }
    ?>
           <form enctype="multipart/form-data" action="upload.php" method="post">
    <fieldset>
        <legend>Formulaire</legend>
          <p>
            <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            <input name="fichier" type="file" id="fichier_a_uploader" />
            <input type="submit" name="submit" value="Uploader" />
          </p>
      </fieldset>
    </form>
            </div>     

 

 <div class="col s4">

            </div>
            <div class="col s4"></div>
 
</body>
 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript"></script>
<!-- Javascript files -->
<script src="js/jquery.js'"></script>
<script src="js/jquery.stellar.min.js'"></script>
<script src="js/jquery.sticky.js'"></script>
<script src="js/smoothscroll.js'"></script>
<script src="js/wow.min.js'"></script>
<script src="js/jquery.countTo.js'"></script>
<script src="js/jquery.inview.min.js'"></script>
<script src="js/jquery.easypiechart.js'"></script>
<script src="js/jquery.shuffle.min.js'"></script>
<script src="js/jquery.magnific-popup.min.js'"></script>
<script src="js/jquery.fitvids.js'"></script>


    
   </html>
    