<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?= $title ?></title>		
		<meta name="description" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
		<meta name="keywords" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
		<!-- Meta Facebook +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->        
        <meta property="og:title" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <meta property="og:url" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <meta property="og:site_name" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <meta property="og:description" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <meta property="og:image" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
		<!-- Meta Twitter +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->             
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <meta name="twitter:url" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <meta name="twitter:descritpion" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <meta name="twitter:image" content="" /><!-- !!!!!!!!!!!!!!!!!!!!! A remplir lors de la MeL -->
        <!-- Stylesheet Bootstrap v4 ++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <!-- Stylesheet +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <link href="src/Public/css/style.css" rel="stylesheet" /> 
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jquery pour indexview ++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="src/Public/js/script.js"></script>
    </head>

        
    <!-- Template Content ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <body>
      <div class="container-fluid sticky-top ">   <!-- debut container ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="row"> <!-- debut row ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <header class="text-center-xs text-center-lg modNavbar">
        <!-- Nos coordonnées et reseaux sociaux  ++++++++++++ -->
            <nav class="navbar navbar-expand-lg navbar-light colortop">
                <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">06.37.69.34.21<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a href="mailto:contact@tywebservices.fr" class="nav-link disabled">contact@tywebservices.fr</a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link disabled"><i class="fa fa-facebook-official"></i></a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link disabled"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link disabled"><i class="fa fa-google-plus"></i></a>
                    </li>
                    </ul>
                </div>
            </nav>
           
            <!-- Navbar avec fond noir brillant avec classe bg-navbar  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <nav class="navbar navbar-expand-lg navbar-light bg-navbar header-nav justify-content-center navbarCenter"> 
               <a class="navbar-brand" href="index.php">
                   <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" style="height:100px; width:100px;"id="logo"></a>
                <button class="navbar-toggler bg-light " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto modNavbar flexNavbar">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Tyweb Services <span class="sr-only">(current)</a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="index.php">Nos Offres <span class="sr-only"></a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?action=category&type=all&page=1">Toutes </a>
                                <?php
                                    while ($db3 = $thirdRequest->fetch()) {
                                        echo '<a class="dropdown-item" href="index.php?action=category&type='.htmlspecialchars($db3['nameCategory']).'&page=1">' . htmlspecialchars($db3['nameCategory']) . '</a>';
                                    }
                                ?>
                            </div>
                        </li>
                        
                        <div class="marge col-4">
                        <form class="form-inline my-2 my-lg-0 taille13" id="search">
                            <input class="form-control mr-sm-2 taille13" type="search" placeholder="Saisissez un mot clé" aria-label="Search" >
                            <button class="btn btn-outline-secondary my-2 my-sm-0 taille13" type="submit">Recherche</button>
                        </form></div>
                
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Nous contacter <span class="sr-only">(current)</a>
                        </li>
                        <ul>
                        <li class="nav-item dropdown">
                            <?php
                                if(isset($_SESSION['conciergerieDuWebId'])) {
                                    echo '<a class="navbar-brand" href="index.php?action=accountManagement">Bienvenue '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).'</a>';
                                }
                            ?>                    
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    if(isset($_SESSION['conciergerieDuWebId'])) {
                                        echo 'Votre Compte';
                                    }
                                    else {
                                        echo 'Bonjour, Identifiez-vous <pre></pre> Votre Compte';
                                    }
                                ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php    
                                    if(isset($_SESSION['conciergerieDuWebId'])) {
                                        echo '<a class="dropdown-item" href="index.php?action=accountManagement">Modifier le compte</a>';
                                        echo '<hr>';
                                        echo '<a class="dropdown-item" href="index.php?action=deconnection&session=ok">Déconnexion</a>';
                                    }
                                    else {
                                        echo '
                                            <a class="dropdown-item" href="index.php?action=connection">Connexion</a>
                                            <a class="dropdown-item" href="index.php?action=inscription">Nouveau Membre? Commencez ici</a>
                                        ';
                                    }
                                ?>
                            </div>
                        </li>
                        </ul>
                        <!--<li class="nav-item">
                            <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="rounded mx-auto d-block" alt="Responsive image" style="height:100px; width:50px;" id="imagevip" >
                        </li>-->
                

                     </ul>
                </div>            
            </nav><!-- fin de la nav menu +++++++++++-->
           </div><!-- fin de la row ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          </div>  <!-- fin du container ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        </header>
                        
        <!-- Content View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <?= $content ?>

        <!-- Footer ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <footer class="row polygon-footer ">
            
            <div class="card-text text-center col">
                    <div class="row justify-content-center">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                    <span class="navbar-text" data-toggle="collapse" data-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation" >MENU</span>
                    <div class="collapse navbar-collapse col text-center  navbarfooter" id="navbarSupportedContent3">
                    
                        <ul class="nav nav-tabs card-header-tabs ">
                            <li class="nav-item">
                                <a class="nav-link" href="#">ACCUEIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LA SOCIETE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONCIERGERIE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">OFFRES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">NEWSROOM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">NOUS CONTACTER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#up">&uarr; Haut de page</a>
                            </li>
                        </ul>
                        </div>
                    </nav>
                    </div>
                    <div class="row justify-content-center">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <span class="navbar-text" data-toggle="collapse" data-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">Les INFOS LEGALES</span>
                      <div class="collapse navbar-collapse col  navbarfooter2" id="navbarSupportedContent4">
                                <ul class="nav nav-tabs card-header-tabs ">
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Plan du site</a> 
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Mentions Légales </a>  
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#"> Politique de confidentialité</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#">Conditions Générales d’Utilisation </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="row justify-content-center">
                    <span class="taille13">
                        <pre></pre>
                     Copyright &copy; 2018  <h5 class="card-title taille13">TyWebServices.</h5>Tous droits réservés.
                     </span>
                    </div>


            </div>
        </footer>  
                             
                           

        <!-- Script Bootstrap V4 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script src="src/Public/js/script.js" /></script>                           
    </body>