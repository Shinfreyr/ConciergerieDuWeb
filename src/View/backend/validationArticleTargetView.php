<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Article !"; ?>
<?php ob_start(); ?>

<!-- Jumbotron Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="row justify-content-center">    
    <div class="col-12">
        <h1 class="alert-heading blanc MgHtBs">Votre Offre Sélectionnée    <i class="fa fa-tag vuebutton"></i></h1>
        <div class="dropdown-divider Pttraitb" ></div> 
    </div>   
    <div class="col-12 margeshautetbas justify-content-center aligncard">
        <div class="col-12 justify-content-center"> <!-- bloc de gauche ++++++++++++++++++++++++++++ --> 
            <div class="jumbotron cadrecard">
                <h1 class="display-5"><?= htmlspecialchars($result['nomArticle']) ?></h1>

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#nomArticleModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier nom de l'article
                </button>
                <div class="collapse" id="nomArticleModification">
                    <div class="card card-body">
                        nom article
                    </div>
                </div>

                <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageArticle']) ?>" alt="Card image cap">

                
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#imageModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier l'image
                </button>
                <div class="collapse" id="imageModification">
                    <div class="card card-body">
                        image
                    </div>
                </div>

                <h2 class="display-5"><?= htmlspecialchars($result['nomArticle']) ?></h2>
                <p class="lead"><?= htmlspecialchars($result['descriptionArticle']) ?></p>

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le contenu de l'annonce
                </button>
                <div class="collapse" id="contentModification">
                    <div class="card card-body">
                        contenu
                    </div>
                </div>

                <hr class="my-4">
                <p class="card-text"><?= htmlspecialchars($result['reductionArticle']) ?>% <i class="fa fa-tag"></i></p>

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#reductionModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le pourcentage de la réduction
                </button>
                <div class="collapse" id="reductionModification">
                    <div class="card card-body">
                        réduction
                    </div>
                </div>

                <p class="card-text">Prix original: <?= htmlspecialchars($result['originalPriceArticle']) ?>&euro;</p>

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#originalPriceModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le prix original
                </button>
                <div class="collapse" id="originalPriceModification">
                    <div class="card card-body">
                        prix original
                    </div>
                </div>

                <h2>Prix avec réduction: <?= htmlspecialchars($result['reductionPriceArticle']) ?>&euro;</h2>
                
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#priceReductionModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le prix avec réduction
                </button>
                <div class="collapse" id="priceReductionModification">
                    <div class="card card-body">
                        prix avec réduction
                    </div>
                </div>

                <p class="text-danger MgHt">*fin de la promotion : <?= htmlspecialchars($result['endDateArticle']) ?></p>
                
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#endDateModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier la date de fin de promotion
                </button>
                <div class="collapse" id="endDateModification">
                    <div class="card card-body">
                        date de fin de promotion
                    </div>
                </div>

            </div>
        </div>                
<!-- Jumbotron Seller +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<i class="fa fa fa-quote-left vuebutton"></i><i class="fa fa fa fa-quote-right vuebutton"></i> -->
        <div class="col-12"><!-- bloc de droite ++++++++++++++++++++++++++++ -->     
            <div class="jumbotron cadrecard">
                <h1 class="display-5"><?= htmlspecialchars($result['societyNameSeller']) ?></h1>
                <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageSeller']) ?>" alt="Card image cap">
                <p class="lead"><?= htmlspecialchars($result['descriptionSeller']) ?></p>
                <hr class="my-4">
                <p>Numéro de tel : <?= htmlspecialchars($result['staticPhoneSeller']) ?></p>
                <h3>Adresse : <?= htmlspecialchars($result['adressSeller']) ?> <?= htmlspecialchars($result['postalCodeSeller']) ?> <?= htmlspecialchars($result['citySeller']) ?></h3>
            </div>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require('template.php');    
?>