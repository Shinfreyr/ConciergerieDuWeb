<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Article !"; ?>
<?php ob_start(); ?>

<!-- Jumbotron Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron col-12 col-md-6">
    <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageArticle']) ?>" alt="Card image cap">
    <h1 class="display-4"><?= htmlspecialchars($result['nomArticle']) ?></h1>
    <p class="lead"><?= htmlspecialchars($result['descriptionArticle']) ?></p>
    <hr class="my-4">
    <p class="card-text"><?= htmlspecialchars($result['reductionArticle']) ?>%</p>
    <p class="card-text">Prix original: <?= htmlspecialchars($result['originalPriceArticle']) ?>&euro;</p>
    <h3>Prix avec réduction: <?= htmlspecialchars($result['reductionPriceArticle']) ?>&euro;</h3>
    <?php
        if(isset($_SESSION['conciergerieDuWebId'])) {
            echo '<a class="btn btn-primary btn-lg" href="index.php?action=voucher&idArticle='.htmlspecialchars($result['idArticle']).'&endDate='.htmlspecialchars($result['endDateArticle']).'" role="button">Editer mon Bon de réduction</a>';
        }
        else {
            echo '<a class="btn btn-primary btn-lg" href="#" role="button">Connectez vous pour générer votre bon</a>';
        }        
    ?>
    <p>*fin de la promotion : <?= htmlspecialchars($result['endDateArticle']) ?></p>
</div>

<!-- Jumbotron Seller +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron col-12 col-md-6">
    <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageSeller']) ?>" alt="Card image cap">
    <h1 class="display-4"><?= htmlspecialchars($result['societyNameSeller']) ?></h1>
    <p class="lead"><?= htmlspecialchars($result['descriptionSeller']) ?></p>
    <hr class="my-4">
    <p>Numéro de tel : <?= htmlspecialchars($result['staticPhoneSeller']) ?></p>
    <h3>Adresse : <?= htmlspecialchars($result['adressSeller']) ?> <?= htmlspecialchars($result['postalCodeSeller']) ?> <?= htmlspecialchars($result['citySeller']) ?></h3>
    <a class="btn btn-primary btn-lg" href="index.php?action=magazin&idSeller=<?= htmlspecialchars($result['idSeller']) ?>&page=1" role="button">Voir toutes les offres du magazin</a>
</div>


<?php
    $content = ob_get_clean();
    require('template.php');    
?>