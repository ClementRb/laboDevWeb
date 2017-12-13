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
 
header('Location:login.php');

}


}
   
   ?>