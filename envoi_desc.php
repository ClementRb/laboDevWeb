<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}if (!isset($_SESSION['membre_id'])){
    header('Location:login');
}


if(ISSET($_POST['submit']))
{


//On créer les variables
    $texte = $_POST['texte'];


    $req = $bdd->prepare('UPDATE membre set description = ? WHERE membre_id = ?');

    // print_r($req->errorInfo());
        $result = $req->execute(array($texte, $_SESSION['membre_id']));

    echo '<div class="alert center green-text text-accent-4">

  <strong>Description modifié, Redirection dans 2 secondes <meta http-equiv="refresh" content="2; URL=profil.php">
</div>';


}