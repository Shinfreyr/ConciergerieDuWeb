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
    <body style="background-image: linear-gradient(to right bottom, #1c1918, #1c1918, #1c1918, #37669f, #0c4c8c);">
      <div class="container-fluid sticky-top ">   <!-- debut container ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="row"> <!-- debut row ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <header class="text-center-xs col text-center-lg modNavbar">
             <!-- Nos coordonnées et reseaux sociaux  ++++++++++++ -->
         <div class="colortop row">
                <div class="col">
                    <div class="blanc">
                    <span class="petitemarge" alt="Numéro de téléphone Tyweb Services">
                    06.37.69.34.21
                    </span>
                    <span class="petitemarge">
                    <a href="mailto:contact@tywebservices.fr"  style="color:#ffffff;" alt="Contact Email Tyweb Services">contact@tywebservices.fr</a>
                    </span>
                    <span class="petitemarge">
                    <a href="#" alt="Facebook Tyweb Services"><i class="fa fa-facebook-official blanc"></i></a>
                    </span>
                    <span class="petitemarge">
                    <a href="#" alt="Twitter Tyweb Services"><i class="fa fa-twitter blanc"></i></a>
                    </span>
                    <span>
                    <a href="#" alt="Google + Tyweb Services"><i class="fa fa-google-plus blanc"></i></a>
                    </span>
                    </div>
                </div>
         </div>
         <div class="row couleursousmenu">        
          <div class="col">     <!-- <div class="offset-xl-1" -->
            <!-- Navbar avec fond noir brillant avec classe bg-navbar  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <nav class="navbar navbar-expand-lg navbar-light bg-navbar nav-justified header-nav navbarcenter ghost"> <!-- nav-justified  -->
            <div class="row">   
                <div class="col-12 MgHtBsGeDe">   
                    <div class="col-6 offset-sm-1"> 
                    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                       <!--   <span>MENU</span> +++++++++++++++++++++++++++++++ -->
                    </button>
                    </div>
              <!-- affichage logo grand +++++++++++++++++++++++++++++++ -->
                    <div class="Imglogo text-center"> 
                            <a class="navbar-brand taille13 noghost " href="index.php" id="alogo">
                            <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" style="height:100px; width:100px;" id="logo"></a>
                    </div>
                </div>  
            </div>  
<!-- navbar grand modele  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                <div class="Imglogo text-center"> 
                            <a class="navbar-brand taille13 noghost " href="index.php" id="alogo">
                            <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" style="height:100px; width:100px;" id="logo"></a>
                    </div>
                    <ul class="navbar-nav mr-auto modNavbar flexNavbar">
                         <!-- affichage logo petit +++++++++++++++++++++++++++++++ -->
                    <div class="alogoPt"" id="tt"">
                            <a class="navbar-brand taille13 ghost" href="index.php">
                            <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" style="height:80px; width:80px;" id="logo"></a>
                    </div> 
                    <div class="Imglogo text-center"> 
                            <a class="navbar-brand taille13 " href="index.php" id="alogo">
                            <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" style="height:100px; width:100px;" id="logo"></a>
                    </div>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" >Société <span class="sr-only">(current)</a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="index.php">Offres <span class="sr-only"></a>
                        </li>
                        <li class="nav-item dropdown">
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
                        <div class=" col-lg-5 col-xl-5 pasmarge" style="max-width: 39%;">
                        <form class="form-inline my-2 my-lg-0 taille13" id="search">
                            <input class="form-control mr-sm-2 taille13" type="search" placeholder="Saisissez un mot clé" aria-label="Search" >
                            <button class="btn btn-outline-secondary my-2 my-sm-0 taille13" type="submit"><i class="fa fa-search"></i></button>
                           <!-- <button class="btn btn-outline-secondary my-2 my-sm-0 taille13" type="submit">Recherche</button> -->
                        </form></div>
                     
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact <span class="sr-only">(current)</a>
                        </li>
                       
                        <li class="nav-item dropdown ">
                            <?php
                                if(isset($_SESSION['conciergerieDuWebId'])) {
                                    echo '<a class="navbar-brand taille13" href="index.php?action=accountManagement">Bienvenue '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).'</a>';
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
                </div><!-- fin de la navbar grand modele  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->            
         </nav><!-- fin de la nav menu grand modele +++++++++++-->
 <!-- debut de la navbar petit modele  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->   
        <nav class="navbar navbar-expand-lg navbar-light bg-navbar header-nav navbarcenter nav-justified noghost"> 
            <div class="row">   
                    <div class="col MgHtBsGeDe">   
                        <div class="col contImgmenulogo">    
                             <div class="col alogoPt" id="tt">
                                    
                                      <button class="navbar-toggler bg-light elementptmenu" style="height:70px; width:70px;" type="button" data-toggle="collapse" data-target="#navbarSupportedContentpt" aria-controls="navbarSupportedContentpt" aria-expanded="false" aria-label="Toggle navigation">
                                      <span class="navbar-toggler-icon"></span>
                               
                                         <!--   <span>MENU</span> +++++++++++++++++++++++++++++++ -->
                                      </button>                        
              <!-- affichage logo petit +++++++++++++++++++++++++++++++ -->
                                        <a class="navbar-brand taille13 elementptmenu" href="index.php"><img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" style="height:70px; width:70px;" id="logo"></a>
                                  
                            </div>

                        </div>
                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContentpt">
                    <ul class="navbar-nav mr-auto modNavbar flexNavbar">
                    <li class="nav-item dropdown colortop">
                            <?php
                                if(isset($_SESSION['conciergerieDuWebId'])) {
                                    echo '<a class="navbar-brand taille13" href="index.php?action=accountManagement">Bienvenue '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).'</a>';
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
                        <li class="nav-item active ">
                            <a class="nav-link" href="index.php">Offres <span class="sr-only"></a>
                        </li>
                        <li class="nav-item dropdown">
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
                        <div class=" col-lg-5 col-xl-5 pasmarge" style="max-width: 39%;">
                        <form class="form-inline my-2 my-lg-0 taille13" id="search">
                            <input class="form-control mr-sm-2 taille13" type="search" placeholder="Saisissez un mot clé" aria-label="Search" >
                            <button class="btn btn-outline-secondary my-2 my-sm-0 taille13" type="submit"><i class="fa fa-search"></i></button> 
                        </form></div>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact <span class="sr-only">(current)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" >Société<span class="sr-only">(current)</a>
                        </li>
                        
                   </ul> 
    </div><!-- fin de la navbar petit modele  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 
 </nav><!-- fin de la nav menu petit modele +++++++++++-->
             </div><!-- fin de   <div class=" offset-xl-1">+++++++++++++++++++++++++++++++ -->
             </div> <!-- fin de <div class="col-12 couleursousmenu">+++++++++++++++++++++ -->
             </div><!-- fin de la row ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          </div>  <!-- fin du container ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        </header>
                        
        <!-- Content View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <?= $content ?>
                               
        <!-- Footer ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        </div>      
        <footer class="row polygon-footer" id="footer">
            <div class="card-text text-center row">
                    <div class="row justify-content-center">
                            <div class="col-12">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                       <div class="collapse navbar-collapse text-center navbarcenter navbarfooter clearfix " id="navbarSupportedContent3">
                                          <ul class="nav nav-tabs card-header-tabs col nav-justified">
                                                <li class="nav-item col-sm-4">
                                                    <a class="nav-link disabled" href="#up"><span class="fa fa-arrow-circle-up"></span></a>
                                                </li>
                                                <div>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="#"><span class="fa fa-pencil">Société</a>
                                                </li>
                                                <li class="nav-item 2">
                                                    <a class="nav-link" href="#"><span class="fa fa-pencil"></span> Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><span class="fa fa-pencil"></span> Conciergerie</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="#"><span class="fa fa-pencil"></span>Offres</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="#"><span class="fa fa-commenting"></span>Newsroom</a>
                                                </li>
                                                <li class="nav-item  ">
                                                    <a class="nav-link" href="#up"><span class="fa fa-commenting">Contact</a>
                                                </li> 
                                                </div>
                                            </ul>
                                          </div>
                                 </nav>
                                </div>
                                <div class="col-12">
                                    <nav class="navbar navbar-expand-lg navbar-light">
                                                     <div class="collapse navbar-collapse text-center navbarcenter navbarfooter2  clearfix" id="navbarSupportedContent4">
                                                            <ul class="nav nav-tabs card-header-tabs col nav-justified">
                                                            <li class="nav-item col-sm-3">
                                                            </li>
                                                            <div>
                                                                <li class="nav-item">
                                                                <a class="nav-link" href="#">Plan du site</a> 
                                                                </li>
                                                                <li class="nav-item ">
                                                                <a class="nav-link" href="#">Mentions Légales </a>  
                                                                </li>
                                                                <li class="nav-item  ">
                                                                <a class="nav-link" href="#"> Politique de confidentialité</a>
                                                                </li>
                                                                <li class="nav-item ">
                                                                <a class="nav-link" href="#">Conditions Générales d’Utilisation </a>
                                                                </li>
                                                            </div>   
                                                            </ul>
                                                    </div>
                                    </nav>
                                </div>
                                <div class="col justify-content-center copyright">
                                        <span class="taille13">
                                            <pre></pre>
                                        Copyright &copy; 2018  <h5 class="card-title taille13">TyWebServices.</h5>Tous droits réservés.
                                        </span>
                                </div>
                     </div><!-- fin de div class="row justify-content-center"+++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            </div><!-- fin card-text text-center row ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        </footer>  <!-- fin footer class="row polygon-footer ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                            
                             
                           


        <!-- Script Bootstrap V4 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script src="src/Public/js/script.js" /></script>                           
    </body>