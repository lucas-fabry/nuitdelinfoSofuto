<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>

<body>
<div class="navbar-fixed ">
  <nav>
    <div class="nav-wrapper blue-grey">


      <a href="#!" class="brand-logo" style="text-decoration:none">Aide O'etudiant</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="signup.php" class="btn waves-effect waves-light deep-orange lighten-2">S'inscrire</a></li>
      <li><a href="login.php" class="btn waves-effect waves-light deep-orange lighten-2">Se connecter</a></li>
      <li><a href="contactUs.php" class="btn waves-effect waves-light deep-orange lighten-2" >Forum</a></li>

          </ul>


       <!--<form class=" hide-on-med-and-down" id="formulaire" >
        <div class="input-field" style="max-width: 400pt;">
          <input id="search" type="search" required onkeyup="getBlogs(this.value,0);">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
          <div id="searchResults" ></div>
        </div>
      </form>-->


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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>  