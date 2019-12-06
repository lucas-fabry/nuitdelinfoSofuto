
<!--<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <link rel="icon" href="images/index.ico" />
</head>-->


<div class="navbar-fixed ">
  <nav>
    <div class="nav-wrapper purple darken-2">


      <a href="index.php?action=readAll" class="brand-logo" style="text-decoration:none; margin-left: 1vw;">Aide O'etudiant</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php?action=afficher&controller=ville" class="btn waves-effect waves-light deep-orange lighten-2" >Carte 3D</a></li>
        <li><a href="index.php?action=readAll&controller=topic" class="btn waves-effect waves-light deep-orange lighten-2" >Forum</a></li>
        <?php
          if (isset($_SESSION['login'])) {
            echo '<li><a href="index.php?action=read&controller=compte&login='.rawurlencode($_SESSION['login']).'" class="btn waves-effect waves-light deep-orange lighten-2">Bienvenue, '.htmlspecialchars($_SESSION['login']).'</a></li>';
            echo '<li><a href="index.php?action=deconnection&controller=compte&login='.rawurlencode($_SESSION['login']).'" class="btn waves-effect waves-light deep-orange lighten-2">Deconnection</a></li>';
          }
          else {
            echo '<li><a href="index.php?action=create&controller=compte" class="btn waves-effect waves-light deep-orange lighten-2">S\'inscrire</a></li>
          <li><a href="index.php?action=connection&controller=compte" class="btn waves-effect waves-light deep-orange lighten-2">Se connecter</a></li>';
        }
        if (Session::is_admin()) {
          echo '<li><a href="index.php?action=readAll&controller=tag" class="btn waves-effect waves-light deep-orange lighten-2" >listeTag</a></li>';
          echo '<li><a href="index.php?action=create&controller=tag" class="btn waves-effect waves-light deep-orange lighten-2" >createTag</a></li>';
        }
        ?>
      </ul>




       <ul class="side-nav" id="mobile-demo">
         <li><a href="signup.php" >Sign Up</a></li>
      <li><a href="login.php" >Login</a></li>
       <li><a href="conactUs.php" >Contact Us</a></li>
       <li class="search"> <div class="search-wrapper card input-field">
          <input type="search" required onkeyup="getBlogs(this.value,1);">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
          <div id="searchResults2"></div>
        </div></li>
       </ul>


      </div>
      </nav>
      </div>

    
