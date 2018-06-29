<!doctype html>
<html lang="fr">
    <head>
        <title><?= $title ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Style CSS -->
        <link href="src/Public/css/styleAdmin.css" rel="stylesheet" /> 
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    </head>
   
    <body>
        <header>
            <!-- NavBar +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Retour Conciergerie</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?action=backendAdmin">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=adminValidationArticle">
                                <?php
                                    if($result[0] != '0') {
                                        echo '<span class="badge badge-info">New</span>';
                                    }                                    
                                ?>
                                Article en attente de validation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Article mis en avant</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Management
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Articles</a>
                                <a class="dropdown-item" href="#">Comptes Utilisateur/Admin</a>
                                <a class="dropdown-item" href="#">Comptes Vendeurs</a>
                                <a class="dropdown-item" href="#">Comptes Entrepises</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Inscrire un nouvel article</a>
                                <a class="dropdown-item" href="#">Inscrire un nouvel admin</a>
                                <a class="dropdown-item" href="#">Inscrire un nouveau vendeur</a>
                                <a class="dropdown-item" href="#">Inscrire une nouvelle entreprise</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Créer une nouvelle catégorie</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Content View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <?= $content ?>
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

