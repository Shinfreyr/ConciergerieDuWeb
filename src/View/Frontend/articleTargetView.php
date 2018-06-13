<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Article !"; ?>
<?php ob_start(); ?>

<!-- Jumbotron Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="row justify-content-center"  >    
    <div class="col-12 justify-content-center">
        <h1 class="alert-heading blanc MgHtBs">Votre Offre Sélectionnée</h1>
        <div class="dropdown-divider Pttraitb" ></div> 
    </div>   
    <div class="row margeshautetbas justify-content-center" >
          <div class="col-sm-6 col-xl-6"> <!-- bloc de gauche ++++++++++++++++++++++++++++ --> 
                <div class="jumbotron">
                    <h1 class="display-5"><?= htmlspecialchars($result['nomArticle']) ?></h1>
                    <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageArticle']) ?>" alt="Card image cap">
                    <p class="lead"><?= htmlspecialchars($result['descriptionArticle']) ?></p>
                    <hr class="my-4">
                    <p class="card-text"><?= htmlspecialchars($result['reductionArticle']) ?>%</p>
                    <p class="card-text">Prix original: <?= htmlspecialchars($result['originalPriceArticle']) ?>&euro;</p>
                    <h3>Prix avec réduction: <?= htmlspecialchars($result['reductionPriceArticle']) ?>&euro;</h3>
                    <?php
                        if(isset($_SESSION['conciergerieDuWebId'])) {
                            echo '<p class="mx-auto text-center"><a class="btn btn-TywebButton" href="index.php?action=voucher&idArticle='.htmlspecialchars($result['idArticle']).'&endDate='.htmlspecialchars($result['endDateArticle']).'" role="button">Editer mon Bon de réduction <i class="fa fa-print editbutton"></i></a></p>';
                        }
                        else {
                            echo '<p class="mx-auto text-center"><a class="btn btn-TywebButton" href="#" role="button">Connectez vous pour générer votre bon <i class="fa fa-eye-slash vuebutton"></i> 	<i class="fa fa-user-times vuebutton"></i></a></p>';
                        }        
                    ?>
                    <p>*fin de la promotion : <?= htmlspecialchars($result['endDateArticle']) ?></p>
                </div>
            </div>                
<!-- Jumbotron Seller +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<i class="fa fa fa-quote-left vuebutton"></i><i class="fa fa fa fa-quote-right vuebutton"></i> -->
            <div class="col-sm-5 col-xl-5 "><!-- bloc de droite ++++++++++++++++++++++++++++ -->     
                <div class="jumbotron">
                    <h1 class="display-5"><?= htmlspecialchars($result['societyNameSeller']) ?></h1>
                    <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageSeller']) ?>" alt="Card image cap">
                    <p class="lead"><?= htmlspecialchars($result['descriptionSeller']) ?></p>
                    <hr class="my-4">
                    <p>Numéro de tel : <?= htmlspecialchars($result['staticPhoneSeller']) ?></p>
                    <h3>Adresse : <?= htmlspecialchars($result['adressSeller']) ?> <?= htmlspecialchars($result['postalCodeSeller']) ?> <?= htmlspecialchars($result['citySeller']) ?></h3>
                    <p class="mx-auto text-center"><a class="btn btn-TywebButton" href="index.php?action=magazin&idSeller=<?= htmlspecialchars($result['idSeller']) ?>&page=1" role="button">Voir toutes les offres du magasin <i class="fa fa-search vuebutton"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require('template.php');    
?>