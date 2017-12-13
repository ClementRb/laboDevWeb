 <html>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">

    
<div class="row">
    <div class="col s4"></div>
   <div class="col s4">
   <div class=" col s12 center">
        <h4>Se connecter</h4>
   </div>
    <form method="post" action="">
      <div class="row">
        <div class="input-field col s12">
          <input id="login" type="text" name="login" class="validate">
          <label for="email">Login</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password"class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary right">Connexion</button>
    </form>
    <p>Pas de compte ? Inscrivez-vous <a href="register.php"> ici </a></p>
    </div>
    <div class="col s4"></div>
  </div>
</html>
 





<?php
// on se connecte à MySQL 
 try
  {
  
   $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'clement', 'clement');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
$_POST['password'] =  $_POST['password'];
  extract($_POST);
  // on recupére le password de la table qui correspond au login du visiteur
  $sql = "select password from membre where login='".$login."'";
  $req = $bdd->prepare($sql);
  $req->execute();
  $data = $req->fetch();
    var_dump($data);
    var_dump($password);

  if($data['password'] != $password) {
    echo '<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer !
</div>';
  }
  
  else {
    session_start();
    $_SESSION['login'] = $login;  
    header('Location:index.php');
  
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
  }    
}
else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}


?> 


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
