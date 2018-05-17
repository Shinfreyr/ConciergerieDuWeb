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

    </head>

        
    <!-- Template Content ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <body class="bodyFront container-fluid row">
                
        <header class="sticky-top col-12">
            <!-- Navbar ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a class="navbar-brand" href="index.php">La Conciergerie du Web</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto header-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Les Services</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?action=category&type=all&page=1">Toutes les catégories</a>
                                <?php
                                    while ($db3 = $thirdRequest->fetch()) {
                                        echo '<a class="dropdown-item" href="index.php?action=category&type='.htmlspecialchars($db3['nameCategory']).'&page=1">' . htmlspecialchars($db3['nameCategory']) . '</a>';
                                    }
                                ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    if(isset($_SESSION['conciergerieDuWebId'])) {
                                        echo 'Déconnexion';
                                    }
                                    else {
                                        echo 'Accès Membre';
                                    }
                                ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php    
                                    if(isset($_SESSION['conciergerieDuWebId'])) {
                                        echo '<a class="dropdown-item" href="index.php?action=deconnection&session=ok">Déconnexion</a>';
                                    }
                                    else {
                                        echo '
                                            <a class="dropdown-item" href="index.php?action=connection">Connexion</a>
                                            <a class="dropdown-item" href="index.php?action=inscription">Inscription</a>
                                        ';
                                    }
                                ?>
                            
                            </div>
                        </li>
                    </ul>
                    <?php
                        if(isset($_SESSION['conciergerieDuWebId'])) {
                            echo '<a class="navbar-brand" href="index.php?action=accountManagement">Bienvenue '.htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']).'</a>';
                        }
                    ?>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>            
            </nav>
        </header>

        <!-- Content View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <?= $content ?>

        <!-- Footer ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <footer class="col-12">
            <div class="card text-center polygon-footer">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mentions légales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#up">&uarr; Up</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Maison du Web</h5>
                    <p class="card-text">&copy; 2018</p>
                    <a href="#" class="btn btn-info">Plus d'infos</a>
                </div>
            </div>
        </footer>

        <!-- Script Bootstrap V4 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>