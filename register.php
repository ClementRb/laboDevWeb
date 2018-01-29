<html>
<head>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>
 
<body>
   <div class="row">
    <div class="col s4">
       <a href="login" class="retour_login"><button class="btn waves-effect waves-light indigo darken-4 btn-floating right"><i class="small material-icons">arrow_back</i> </button> </a>
    </div>
   <div class="col s4">
   <div class=" col s12 center">
        <h4>S'inscrire sur le site</h4>
   </div>
    <form method="post" action="./envoi.php">
      <div class="row">
        <div class="input-field col s12">
          <input id="login" type="text" name="login" class="validate">
          <label for="email" class="indigo-text text-darken-4" data-error="wrong" data-success="right">Login</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password" class="validate">
          <label for="password" class="indigo-text text-darken-4" data-error="wrong" data-success="right">Password</label>
        </div>
      </div>
      <button type="submit" name="submit" class="btn waves-effect waves-light indigo darken-4 right">Inscription</button>
    </form>
    </div>
    <div class="col s4"></div>
  </div>
  </body>
</html>






<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="js/main.js"></script>
