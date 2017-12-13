<html>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/main.js"></script>
 

   <div class="row">
    <div class="col s4"></div>
   <div class="col s4">
   <div class=" col s12 center">
        <h4>S'inscrire sur le site</h4>
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
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
    </form>
    </div>
    <div class="col s4"></div>
  </div>
</html>




<?php
//Connexion à la BDD
  try
  {
  
   $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'clement', 'clement');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }
  
    if(ISSET($_POST['submit']))
{


//On créer les variables
$login =   $_POST['login'];
$password = $_POST['password'];




$req = $bdd->prepare('INSERT INTO membre(login, password) VALUES (:login, :password)');


$req->execute(array("login" => $login, "password" => $password));
    $data = $req->fetch();
    var_dump($login);
    var_dump($password);


if(!empty($login) && !empty($password))
{


}else{
?>


<b>Pseudo ou MDP vide !</b>


<?php
}


if(empty($login) && empty($password))
{

}else{
 


}


}
   
   ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
