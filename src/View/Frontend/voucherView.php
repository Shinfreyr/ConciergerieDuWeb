<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Bon d'achat !"; ?>
<?php ob_start(); ?>

<div class="card text-center justify-content-center col-xs-8">
    <div class="card-header">
        <img class="card-img-top mx-auto" src="src/Public/images/logoTywebServices.jpg" alt="Card image cap">
    </div>
    <div class="card-body cadrecardcnt mx-auto">
        <h2 class="card-title">- Carte VIP -</h2>
        <h1>La conciergerie du Web</h1>
        <p class="card-text"><h2><?= htmlspecialchars($result['societyNameSeller']) ?></h2></p>
        <hr>
        <h5><?= htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']) ?></h5>
        <h2><?= htmlspecialchars($secondResult['nomArticle']) ?></h2>
        <p>Prix Client= <?= htmlspecialchars($secondResult['reductionPriceArticle']) ?> &euro; (prix original <?= htmlspecialchars($secondResult['originalPriceArticle']) ?>&euro;)</p>
        <p>Validité jusqu'au : <?= htmlspecialchars($secondResult['endDateArticle']) ?></p>
        
        <a href="index.php?action=dlVoucher&idArticle=<?=htmlspecialchars($secondResult['idArticle'])?>&codeVoucher=<?=htmlspecialchars($secondResult['codeVoucher'])?>" class="btn btn-TywebButton btn-lg btn-block">Télécharger le <br />Bon de réduction</a>
    </div>
    <div class="card-footer text-muted">
        <p>N° de Bon : <?= htmlspecialchars($secondResult['codeVoucher']) ?></p>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>