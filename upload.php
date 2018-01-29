<?php // Constantes
define('TARGET', 'images/');    // Repertoire cible
define('MAX_SIZE', 1000000000);    // Taille max en octets du fichier
define('WIDTH_MAX', 600);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels
 
// Tableaux de donnees
$tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
$infosImg = array();
 
// Variables
$extension = '';
$message = '';
$nomImage = '';
 
/************************************************************
 * Creation du repertoire cible si inexistant
 *************************************************************/
if( !is_dir(TARGET) ) {
  if( !mkdir(TARGET, 0755) ) {
    exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
  }
}
 
/************************************************************
 * Script d'upload
 *************************************************************/
if(!empty($_POST))
{
  // On verifie si le champ est rempli
  if( !empty($_FILES['fichier']['name']) )
  {
    // Recuperation de l'extension du fichier
    $extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
 
    // On verifie l'extension du fichier
    if(in_array(strtolower($extension),$tabExt))
    {
      // On recupere les dimensions du fichier
      $infosImg = getimagesize($_FILES['fichier']['tmp_name']);
 
      // On verifie le type de l'image
      if($infosImg[2] >= 1 && $infosImg[2] <= 14)
      {
        // On verifie les dimensions et taille de l'image
        if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['fichier']['tmp_name']) <= MAX_SIZE))
        {
          // Parcours du tableau d'erreurs
          if(isset($_FILES['fichier']['error']) 
            && UPLOAD_ERR_OK === $_FILES['fichier']['error'])
          {
            // On renomme le fichier
            $nomImage = md5(uniqid()) .'.'. $extension;
 
            // Si c'est OK, on teste l'upload
            if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
            {
                try
                {

                    $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');

                }

                catch(Exception $e)
                {
                    die('Erreur :'.$e->getMessage());
                }

                if(ISSET($_POST['submit']))
                {
                    session_start();

                    $req = $bdd->prepare('INSERT INTO image(nom_image, membre_id) VALUES (?, ?)');
                    $req->execute(array($nomImage, $_SESSION['membre_id']));
                }

                echo '<div class="alert center green-text text-accent-4">

  <strong>Yes !</strong> Upload réussi !, Redirection dans 2 secondes ! <meta http-equiv="refresh" content="2; URL=index.php">
</div>';
                  
            }
            else
            {
              // Sinon on affiche une erreur systeme
                echo '<div class="alert center red-text text-accent-4">

  <strong> Problème lors de l\'upload ! </strong> <meta http-equiv="refresh" content="2; URL=index.php">
</div>';
            }
          }
          else
          {

              echo '<div class="alert center red-text text-accent-4">

  <strong> Une erreur interne a empêché l\'uplaod de l\'image </strong> <meta http-equiv="refresh" content="2; URL=index.php">
</div>';
          }
        }
        else
        {
            echo '<div class="alert center red-text text-accent-4">

  <strong>Erreur dans les dimensions de l\'image ! La hauteur maximale est de 800 pixels et la largeur de 400 </strong> <meta http-equiv="refresh" content="2; URL=index.php">
</div>';

        }
      }
      else
      {
          echo '<div class="alert center red-text text-accent-4">

  <strong>Le fichier à uploader n\'est pas une image ! </strong> <meta http-equiv="refresh" content="2; URL=index.php">
</div>';
      }
    }
    else
    {
        echo '<div class="alert center red-text text-accent-4">

  <strong>L\'extension du fichier est incorrecte ! </strong> <meta http-equiv="refresh" content="2; URL=index.php">
</div>';

    }
  }
  else
  {
      echo '<div class="alert center red-text text-accent-4">

  <strong>Veuillez remplir le formulaire svp ! </strong> <meta http-equiv="refresh" content="2; URL=index.php">
</div>';

  }
}
echo $message;
?>