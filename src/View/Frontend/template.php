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
        <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="../dist/css/bootstrapValidator.css"/>
    </head>

        
    <!-- Template Content ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <body style="width:auto; background-image: linear-gradient(to left bottom, #1c1918, #1c1918, #1c1918, #37669f, #37669f, #37669f, #37669f, #0c4c8c, #1c1918, #1c1918);">
        <!-- Header +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <header class="text-justify col- text-center-lg modNavbar  sticky-top">
            <div class="container-fluid">   <!-- debut container ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <div class="row colortop"> <!-- debut row ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                    <!-- Nos coordonnées et reseaux sociaux  ++++++++++++ -->
                    <div class="blanc petitemarge">
                        <span class="grandemarge" alt="Numéro de téléphone Tyweb Services">
                            06.37.69.34.21
                        </span>
                        <span class="grandemarge">
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
            
                    <div class="row couleursousmenu">        
                        <div class="col MgHtBsGeDe">    
                            <!-- Navbar avec fond noir brillant avec classe bg-navbar  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                            <nav class="navbar navbar-expand-lg navbar-light bg-navbar nav-justified header-nav navbarcenter ghost"> <!-- nav-justified  -->
                                <div id="menumini">
                                <button class="navbar-toggler bg-light ml-auto p-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon "></span>
                                <!--   <span>MENU</span> +++++++++++++++++++++++++++++++ -->
                                </button>
                                
                                <!-- affichage petit logo +++++++++++++++++++++++++++++++ -->
                                    <a class="navbar-brand noghost alogo" href="index.php" id="lienptlogo">
                                    <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-flex align-items-end" id="ptlogo"></a>
                                </div>
                                <!-- navbar ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto modNavbar flexNavbar" id="NAvflex">
                                        <!-- affichage logo moyen logo +++++++++++++++++++++++++++++++ -->
                                        <div class="alogoPt" id="tt">
                                            <a class="navbar-brand taille13 ghost" href="index.php" id="lienmoylogo">
                                            <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" id="moylogo"></a>
                                        </div>      
                                        <!-- affichage logo grand logo +++++++++++++++++++++++++++++++ -->
                                        <div class="Imglogo text-center"> 
                                            <div class="dropdown-divider pasvu" ></div>
                                            <a class="navbar-brand taille13 alogo" href="index.php" id="liengdlogo">
                                            <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" id="gdlogo"></a>
                                        </div>
                                        <li class="nav-item MgHt" id="MnSte">
                                            <div class="dropdown-divider pasvu" ></div>
                                            <a class="nav-link active" href="#" title="Qui sommes nous?">Société <span class="sr-only">(current)</a>
                                        </li>
                                        <li class="nav-item active MgHt" id="Mnoffre">
                                            <div class="dropdown-divider pasvu" ></div>
                                            <a class="nav-link" href="index.php" title="Offres du Jour">Offres <span class="sr-only"></a>
                                        </li>
                                        <li class="nav-item dropdown MgHt" id="Mncat"> <!--  style="min-width: 10%;"+++++++++++++++-->
                                            <div class="dropdown-divider pasvu"></div>
                                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Rechercher dans toutes nos catégories">Catégories</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.php?action=category&type=all&page=1">Toutes </a>
                                                    <?php
                                                        while ($db3 = $thirdRequest->fetch()) {
                                                            echo '<h3><a class="dropdown-item" href="index.php?action=category&type='.htmlspecialchars($db3['nameCategory']).'&page=1">' . htmlspecialchars($db3['nameCategory']) . '</a></h3>';
                                                        }
                                                    ?>
                                            </div>
                                        </li>
                                        <div class="col-md-4 offset-md-1 col-lg-3 col-xl-4 pasmarge MgHt"  id="Mnrech">
                                            <form class="form-inline mr-sm-0 taille13" id="search">
                                                <input class="form-control mr-sm-0 taille12" type="search" placeholder="Recherche par mot clé" aria-label="Search" title="Recherche par mots clés">
                                                <button class="btn btn-outline-secondary my-0 my-sm-0 taille13" type="submit"><i class="fa fa-search"></i></button>
                                            <!-- <button class="btn btn-outline-secondary my-2 my-sm-0 taille13" type="submit">Recherche</button> -->
                                            </form>
                                        </div>                     
                                        <li class="nav-item MgHt" id="MnCont">
                                        <div class="dropdown-divider pasvu" ></div>
                                            <a class="nav-link active" href="#contact" title="Contactez-nous">Contact <span class="sr-only">(current)</a>
                                        </li>                       
                                        <li class="nav-item dropdown MgHt8pasmarge" id="Mnconne"> <!-- "style="min-width: 13%;"+++-->
                                            <?php
                                                if(isset($_SESSION['conciergerieDuWebId'])) {
                                              /*      echo '<h3><a class="navbar-brand taille13" href="index.php?action=accountManagement">Bienvenue '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).'</a></h3>';*/
                                              echo '<h3 class="navbar-brand taille13" id="bienvpol">Bienvenue '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).'</h3>';
                                                    }
                                            ?>                    
                                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php
                                                    if(isset($_SESSION['conciergerieDuWebId'])) {
                                                        echo 'Votre Compte';
                                                    }
                                                    else {
                                                        echo '<h3>Bonjour, Identifiez-vous <pre></pre></h3> <h4> Votre Compte </h4>';
                                                    }
                                                ?>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <?php    
                                                    if(isset($_SESSION['conciergerieDuWebId'])) {
                                                        echo '<h3><a class="dropdown-item" href="index.php?action=accountManagement">Modifier le compte</a></h3>';
                                                        echo '<hr>';
                                                        echo '<h3><a class="dropdown-item" href="index.php?action=deconnection&session=ok">Déconnexion</a></h3>';
                                                    }
                                                    else {
                                                        echo '
                                                        <h3><a class="dropdown-item" href="index.php?action=connection">Connexion</a></h3>
                                                        <h3><a class="dropdown-item" href="index.php?action=inscription">Nouveau Membre? <pre></pre> Commencez ici</a></h3>
                                                        ';
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- fin de la navbar grand modele  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->            
                            </nav><!-- fin de la nav menu grand modele +++++++++++-->
                </div><!-- fin de la row ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            </div>  <!-- fin du container ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        </header>
        
        <!-- Content View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <?= $content ?>
                               
        <!-- Footer ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->      
        <footer class="row align-items-center justify-content-center polygon-footer flexcontainer" id="footer">
                        <nav class="navbar navbar-expand-lg navbar-light"> <!-- 1ere ligne footer ++++++++++++++++-->
                            <div class="collapse navbar-collapse text-center navbarcenter navbarfooter clearfix " id="navbarSupportedContent3">
                                <ul class="nav nav-tabs card-header-tabs col nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#up"><span class="fa fa-arrow-circle-up"></span></a>
                                    </li>
                                    <div> <!-- pour regrouper les li ++++++++++++++++-->
                                        <li class="nav-item ">
                                            <a class="nav-link" href="#"><span class="fa fa-archive"></span> Société</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="#"><span class="fa fa-group"></span> Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><span class="fa fa-bell"></span> Conciergerie</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="#"><span class="fa fa-tag"></span> Offres</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="#"><span class="fa fa-commenting"></span> Newsroom</a>
                                        </li>
                                        <li class="nav-item  ">
                                            <a class="nav-link" href="#contact"><span class="fa fa-commenting-o"> Contact</a>
                                        </li> 
                                    </div>
                                </ul>
                            </div>
                        </nav>
                        <nav class="navbar navbar-expand-lg navbar-light"> <!-- 2eme ligne footer2 ++++++++++++++++-->
                            <div class="collapse navbar-collapse text-center navbarcenter navbarfooter2  clearfix" id="navbarSupportedContent4">
                                <ul class="nav nav-tabs card-header-tabs col nav-justified">
                                    <li class="nav-item col-sm-3"></li>
                                    <div> <!-- pour regrouper les li ++++++++++++++++-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Plan du site</a> 
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Mentions Légales </a>  
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Politique de confidentialité</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="#">C. G. U. </a>
                                        </li>
                                    </div>   
                                </ul>
                            </div>
                        </nav>
                            <span> <!-- 3eme ligne du footer ++++++++++++++++-->
                                <pre></pre>
                                <h4 class="taille12">Copyright &copy; 2018  TyWebServices. Tous droits réservés.</h4>
                            </span>
                  
        </footer>  <!-- fin footer class="row polygon-footer ++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                            
                             
                           


        <!-- Script Bootstrap V4 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="src/Public/js/script.js" /></script>         
        <!-- jquery pour indexview ++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../dist/js/bootstrapValidator.js"></script>       

    </body>