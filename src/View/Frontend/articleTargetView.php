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
          <div class="col-xs-12 col-sm-6 justify-content-center"> <!-- bloc de gauche ++++++++++++++++++++++++++++ --> 
                <div class="jumbotron cadrecard">
                    <h1 class="display-5"><?= htmlspecialchars($result['nomArticle']) ?></h1>
                    <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageArticle']) ?>" alt="Card image cap">
                    <h2 class="display-5"><?= htmlspecialchars($result['nomArticle']) ?></h2>
                    <p class="lead"><?= htmlspecialchars($result['descriptionArticle']) ?></p>
                    <hr class="my-4">
                    <p class="card-text"><?= htmlspecialchars($result['reductionArticle']) ?>% <i class="fa fa-tag"></i></p>
                    <p class="card-text">Prix original: <?= htmlspecialchars($result['originalPriceArticle']) ?>&euro;</p>
                    <h2>Prix avec réduction: <?= htmlspecialchars($result['reductionPriceArticle']) ?>&euro;</h2>
                    <?php
                        if(isset($_SESSION['conciergerieDuWebId'])) {
                            echo '<a class="btn btn-TywebButton btn-lg btn-block" href="index.php?action=voucher&idArticle='.htmlspecialchars($result['idArticle']).'&endDate='.htmlspecialchars($result['endDateArticle']).'" role="button">Editer le Bon <br /> de réduction <i class="fa fa-print editbutton"></i></a>';
                        }
                        else {
                            echo '<a class="btn btn-TywebButtonconx btn-lg btn-block pasmarge" href="#" role="button">Connectez-vous <br /> pour générer votre bon   <i class="fa fa-user-times vuebutton"></i></a>';
                        }        
                    ?>
                    <p>*fin de la promotion : <?= htmlspecialchars($result['endDateArticle']) ?></p>
                </div>
            </div>                
<!-- Jumbotron Seller +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<i class="fa fa fa-quote-left vuebutton"></i><i class="fa fa fa fa-quote-right vuebutton"></i> -->
            <div class="col-xs-5 col-sm-5"><!-- bloc de droite ++++++++++++++++++++++++++++ -->     
                <div class="jumbotron cadrecard">
                    <h1 class="display-5"><?= htmlspecialchars($result['societyNameSeller']) ?></h1>
                    <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageSeller']) ?>" alt="Card image cap">
                    <p class="lead"><?= htmlspecialchars($result['descriptionSeller']) ?></p>
                    <hr class="my-4">
                    <p>Numéro de tel : <?= htmlspecialchars($result['staticPhoneSeller']) ?></p>
                    <h3>Adresse : <?= htmlspecialchars($result['adressSeller']) ?> <?= htmlspecialchars($result['postalCodeSeller']) ?> <?= htmlspecialchars($result['citySeller']) ?></h3>
                    <a class="btn btn-TywebButton btn-lg btn-block" href="index.php?action=magazin&idSeller=<?= htmlspecialchars($result['idSeller']) ?>&page=1" role="button">Autres offres  <i class="fa fa-search vuebutton"></i></a>
                </div>
            </div>
        </div>
    </div>
 </div>
<?php
    $content = ob_get_clean();
    require('template.php');    
?>