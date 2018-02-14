<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"/>
    <link rel="stylesheet" href="/laboDevWeb/css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'/>
    <link href="/laboDevWeb/css/animate.css" rel="stylesheet"/>
    <link href="/laboDevWeb/css/magnific-popup.css" rel="stylesheet"/>
    <link href="/laboDevWeb/css/style.css" rel="stylesheet"/>
    <link href="/laboDevWeb/css/responsive.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Instagram_like</title>
</head>
<header>
    <div class="navbar-fixed ">
        <nav>
            <div class="nav-wrapper">
                <a href="/laboDevWeb/accueil" class="brand-logo center">Postagram</a>
                <ul id="nav-mobile" class="left">
                    <li>Bonjour <?php
                        $affiche_nom = $bdd->prepare('SELECT login FROM membre WHERE membre_id = ?');
                        $affiche_nom->execute(array($_SESSION["membre_id"]));
                        $result = $affiche_nom->fetch();
                        echo $result["login"];
                        ?></li>
                </ul>
                <ul id="nav-mobile" class="right">
                    <li><a href="/laboDevWeb/profil">&nbsp;Profil </a></li>
                    <li><a href="/laboDevWeb//logout">Déconnexion</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>