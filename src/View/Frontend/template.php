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
                                        <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-flex align-items-end" id="ptlogo"></img>
                                    </a>
                                </div>
                                <!-- navbar ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto modNavbar flexNavbar" id="NAvflex">
                                        <!-- affichage logo moyen logo +++++++++++++++++++++++++++++++ -->
                                        <div class="alogoPt" id="tt">
                                            <a class="navbar-brand taille13 ghost" href="index.php" id="lienmoylogo">
                                                <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" id="moylogo"></img>
                                            </a>
                                        </div>      
                                        <!-- affichage logo grand logo +++++++++++++++++++++++++++++++ -->
                                        <div class="Imglogo text-center"> 
                                            <div class="dropdown-divider pasvu" ></div>
                                            <a class="navbar-brand taille13 alogo" href="index.php" id="liengdlogo">
                                                <img src="src/Public/images/logoTywebServices.jpg" alt="Accueil" class="rounded mx-auto d-block" id="gdlogo"></img>
                                            </a>
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
                                                <h3>
                                                    <a class="dropdown-item" href="index.php?action=category&type=all&page=1">Toutes </a>
                                                </h3>
                                                <?php
                                                    while ($db3 = $thirdRequest->fetch()) {
                                                        echo '<h3><a class="dropdown-item" href="index.php?action=category&type='.htmlspecialchars($db3['nameCategory']).'&page=1">' . htmlspecialchars($db3['nameCategory']) . '</a></h3>';
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <div class="col-md-4 offset-md-1 col-lg-3 col-xl-4 pasmarge MgHt"  id="Mnrech">
                                            <form class="form-inline mr-sm-0 taille13" id="search">
                                                <input class="form-control mr-sm-0 taille12" type="search" placeholder="Recherche par mot clé" aria-label="Search" title="Recherche par mots clés" />
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
                                                        echo '<h3><a class="dropdown-item" href="index.php?action=allAccountVoucher">Mes bon de réduction</a></h3>';
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
                        </div>
                    </div> 
                </div>
            </div> 
        </header>
        
        <!-- Content View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <?= $content ?>

        <!-- formulaire de contact et nos coordonnées ++++++++++++++++++++++++++++ -->    
        <!-- BLOC IMAGE DE FOND DERRIERE GAUCHE + DROITE +++++++++++++++++++++++-->    
        <div id="contact" class="row someClasscont justify-content-center parallax MgHt">   
            <!-- BLOC GAUCHE + DROITE +++++++++++++++++++++++-->   
            <div class="col-12 margeshautetbas justify-content-center aligncard" >
                <!-- BLOC GAUCHE +++++++++++++++++++++++-->
                <div class="col-sm-5 col-xl-4 someClassgauche">  <!-- bloc de gauche ++++++++++++++++++++++++++++ -->  
                    <div> <!-- tite formulaire de contact ++++++++++++++++++++++++++++ -->   
                        <div class="titleprghp text-center">
                            <span class="blanc"><h5>Comment pouvons-nous vous aider ?</h5></span> 
                        </div>
                    </div>
                    <!-- debut du formulaire de contact form partie gauche ++++++++++++++++++++++++++++ -->  
                    <span class="col">
                        *Mentions obligatoires
                    </span>
                    <form action="index.php?action=mail" id="contactForm" method="post">
                        <div class="form-group col">
                            <label for="societe" class="col-sm-2 control-label alignement">Société :</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" placeholder="Ex: Action56" name="societe" id="societe">
                            </div>
                            <label for="nom" class="col-sm-2 control-label alignement">Nom* :</label>
                            <div class="col-sm-11 contactControl">
                                <input type="text" class="form-control" placeholder="Ex: Dupont" name="name" id="name" required>
                                <span></span>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="prenom" class="col-sm-2 control-label alignement">Prenom* :</label>
                            <div class="col-sm-11 contactControl">
                                <input type="text" class="form-control" placeholder="Ex: Anne" name="prenom" id="prenom" required>
                                <span></span>
                            </div>
                        </div>                              
                        <div class="form-group col">
                            <label for="email" class="col-sm-2 control-label alignement">Email* :</label>
                            <div class="col-sm-11 has-success tester contactControl">
                                <input type="email" class="form-control" placeholder="Ex: a.dupont@gmail.com" name="email" id="email" required />
                                <span></span>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="telephone" class="col-sm-2 control-label alignement">T&eacute;l&eacute;phone :</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" placeholder="Ex: 02.97.66.00.00" name="tel" id="tel" size="20" minlength="9" maxlength="14">
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="services" class="col-sm-2 control-label alignement">Sélectionnez le thème de votre demandes* :</label>
                            <div class="col-sm-11">
                                <select class="form-control" name="services" id="services" required />
                                    <option value="" disabled selected>Choix</option>
                                    <option>Services Web</option>
                                    <option>Services Conciergerie</option>
                                    <option>Partenariat</option>
                                    <option>Contactez notre administrateur</option>
                                    <option>Autres</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="message" class="col-sm-2 control-label alignement">Message</label>
                            <div class="col-sm-11">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Laissez votre message" rows="4" required="required" data-error="Laissez votre message"></textarea>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col">
                            <label class="Ptpolice">Confirmez nous que vous n'êtes pas un robot svp *</label>
                            <div class="col-sm-4">
                                <label class="col-sm-3 control-label" id="captchaOperation">Ecrivez le mot "oui"</label>
                                <input type="text" class="form-control" name="captcha" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="checkbox col-sm-11 alignement Ptpolice Ptpolice">
                                <label for="RGPD">
                                    <input type="checkbox" name="agree" value="agree" required /> J'accepte les termes et les conditions*
                                </label>
                            </div><!-- fin de div class="checkbox col-sm-11 alignement Ptpolice Ptpolice" +++++++++++++++++++++++++++++++++++ -->
                        </div> <!-- fin de div class="form-group row" +++++++++++++++++++++++++++++++++++ -->
                        <!-- Button fenêtre aperçu des conditions /* Bouton qui ouvre une fenêtre modale */ ++++++++++++++++++++-->
                        <button type="button" class="btn btn-outline-secondary my-2 my-sm-0 taille13" data-toggle="modal" data-target="#feuilconditModalLong">
                            Aperçu des Conditions et modalités
                        </button><!-- Feuille des conditions +++++++++++++++++++++-->
                        <div class="modal fade" id="feuilconditModalLong" tabindex="-1" role="dialog" aria-labelledby="feuilconditModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="feuilconditModalLongTitle">Conditions et Modalités</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem quaerat ipsa pariatur aperiam ab laboriosam et numquam minima nulla, nihil molestiae, nisi dolorem modi reiciendis quas voluptate, neque laborum debitis!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Fermer la fenêtre</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center" id="validation_contact">
                            <button name="annuler" id="resetBtn" type="reset" value="reset" class="btn btn-TywebButtonW btn-xs">Annuler</button>
                            <button name="envoyer" id="validateBtn" type="submit" value="submit" class="btn btn-TywebButton btn-xs">Envoyez votre demande</button>
                        </div><!-- fin de <div class="form-group"> +++++++++++++++++++++++++++++++++ -->
                    </form>
                </div>
                <!-- BLOC DROITE +++++++++++++++++++++++-->
                <div class="col-sm-4 col-xl-4 someClassdroite" id="coordonnees"><!-- bloc de droite ++++++++++++++++++++++++++++ -->     
                    <div class="col"><!--+++++++++++++++++++++++++++++++++++++debut du formulaire de contact form partie droite-->
                        <div class="titleprghp text-center"><!-- ENTETE COORDONNEES +++++++++++++++++++++++-->    
                            <span class="blanc"><h5>Nos coordonnées</h5></span> 
                        </div>
                    </div>
                    <!--<div class="blochp_contact">++++++++++++++++++++++++++-->
                    <div class="col">
                        <div class="form-group text-center margeshautetbas">
                            <br><h1>Tyweb services</h1> 
                            <!-- <br><h4>16 rue victor Schoelcher +++++++++++++++++++++++++++++++-->
                            <h4>
                                <br>BP
                                <br>56890 Saint avé
                                <br>
                                <br>France-Tél : + 33 6 37 69 34 21
                                <br>
                                <br> <a href="mailto:contact@tywebservices.fr" alt="Contact Email Tyweb Services" id="mailtocont">contact@tywebservices.fr</a>
                            </h4>
                        </div>          
                        <!-- la map et coordonnées <form class="form-horizontal" role="form">++++++++++++++++++++++++++++++-->
                        <div class="embed-responsive embed-responsive-16by9 MgHtBs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1342.8371519239618!2d-2.739550191633932!3d47.69074484479758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101fb2ce4316e7%3A0x8f4b25780f647313!2sMairie!5e0!3m2!1sfr!2sfr!4v1528793078819" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>    
                        </div>
                    </div><!-- fin de <div class="col"> +++++++++++++++++++++++++++ -->
                </div> <!-- fin de <div class="col-sm-4 col-xl-4 someClassdroite" id="coordonnees" BLOC DROITE ++++++++++++++++++++++++++++ -->     
            </div><!--  <div class="col-12 margeshautetbas justify-content-center aligncard" > BLOC GAUCHE + DROITE ++++++++++++++++++++++++++++ -->  
        </div><!-- fin de <div class="row"> formulaire de contact et nos coordonnées BLOC IMAGE DE FOND DANS LA ROW +++++++++++++++++++++++-->    

                               
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