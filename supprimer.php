<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}if (!isset($_SESSION['membre_id'])){
    header('Location:login');
}


$req = $bdd->prepare("DELETE FROM image WHERE id= ? ");
$req->execute(array($_GET['id']));
header('Location:profil');

?>