<?php
    session_start();
if (!isset($_SESSION['login'])){
    header('Location:login.php');
}
?>

<html>
<head>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
   
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
       
       
       
        <body>
        <div class="col s4">
    <form method="post" enctype="multipart/form-data">
  <div>
    <label for="image_uploads">Sélectionner des images à uploader (PNG, JPG)</label>
    <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png">
  </div>
  <div class="preview">
    <p>Aucun fichier sélectionné pour le moment</p>
  </div>
  <div>
    <button>Envoyer</button>
  </div>
</form>
           </div>

 

 <div class="col s4">

            </div>
            <div class="col s4"></div>
 
</body>
 
    <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/file_upload.js"></script>
   </html>
    