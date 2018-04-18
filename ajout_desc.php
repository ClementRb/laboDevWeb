<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=instagram;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}if (!isset($_SESSION['membre_id'])){
    header('Location:login');
}
?>
<html>
<?php
include 'header.php';
?>
<body>
<div class="container">

    <div class="row">
    <section id="contact">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <form method="post" action="./envoi_desc.php">
                    <div class="form-group">
                        <label for="text">Description</label>
                        <textarea class="form-control" id="texte" name="texte" rows="3"><?php $affiche_desc = $bdd->prepare('SELECT description FROM membre WHERE membre_id = ?');
                            $affiche_desc->execute(array($_SESSION["membre_id"]));
                            $result = $affiche_desc->fetch();
                            echo  $result["description"]; ?></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-primary">Modifier</button>
                </form>
            </div>
            <div class="col-sm">
            </div>
        </div>
    </section>
    </div>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript"></script>
<script src="js/jquery.js"></script>
</html>