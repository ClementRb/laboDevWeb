 <html>
 <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  </head>
  

 <body>
 <div class="navbar-fixed ">
     <nav>
         <div class="nav-wrapper">
             <a href="#" class="brand-logo center">Postagram</a>
         </div>
     </nav>
 </div>

<div class="row" >
    <div class="col s4"></div>
   <div class="col s4">
   <div class="col s12 center">
        <h4>Se connecter</h4>
   </div>
    <form method="post" action="">
      <div class="row">
        <div class="input-field col s12">
          <input id="login" type="text" name="login" class="validate">
          <label for="email" class="indigo-text text-darken-4" data-error="wrong" data-success="right">Login</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password"class="validate">
          <label for="password" class="indigo-text text-darken-4" data-error="wrong" data-success="right">Password</label>
        </div>
      </div>
      <button type="submit" name="submit" class="btn waves-effect waves-light indigo darken-4 right">Connexion</button>
    </form>
    <p>Pas de compte ? Inscrivez-vous <a href="register" class="red-text text-accent-4"> ici </a></p>
    </div>
    <div class="col s4"></div>
  </div>
  </body>  
</html>
 





<?php
// on se connecte à MySQL 
 try
  {
  
   $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
$_POST['password'] =  $_POST['password'];
  extract($_POST);
  // on recupére le password de la table qui correspond au login du visiteur
  $sql = "select * from membre where login='".$login."'";
  $req = $bdd->prepare($sql);
  $req->execute();
  $data = $req->fetch();

  if($data['password'] != $password) {
    echo 
        '<div class="center red-text text-accent-4">
  <h5>Oh Non !</strong> Mauvais login / password. Merci de recommencer !<h5>
          </div>';
  }
  
  else {
    session_start();
    $_SESSION['membre_id'] = $data['membre_id'];
       echo '<div class="alert center green-text text-accent-4">

  <strong>Yes !</strong> Vous etes bien logué, Redirection dans 2 secondes ! <meta http-equiv="refresh" content="2; URL=accueil">
</div>';
    //header('Location:index.php'); 
  
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
  }    
}
else {
  $champs = '<p class="center"><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}


?>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
