<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Bon d'achat !"; ?>
<?php ob_start(); ?>

<div class="card text-center">
    <div class="card-header">
        <img class="card-img-top" src="src/Public/images/defautLogo.jpg" alt="Card image cap">
    </div>
    <div class="card-body">
        <h5 class="card-title">Carte VIP</h5>
        <h6>La conciergerie du Web</h6>
        <p class="card-text"><?= htmlspecialchars($result['societyNameSeller']) ?></p>
        <hr>
        <h5><?= htmlspecialchars($_SESSION['conciergerieDuWebFirstName']).' '.htmlspecialchars($_SESSION['conciergerieDUWebLastName']) ?></h5>
        <h6><?= htmlspecialchars($secondResult['nomArticle']) ?></h6>
        <p>Prix Client= <?= htmlspecialchars($secondResult['reductionPriceArticle']) ?> &euro; (prix original <?= htmlspecialchars($secondResult['originalPriceArticle']) ?>&euro;)</p>
        <p>Validité jusqu'au : <?= htmlspecialchars($secondResult['endDateArticle']) ?></p>
        
        <a href="index.php?action=dlVoucher&idArticle=<?=htmlspecialchars($secondResult['idArticle'])?>&codeVoucher=<?=htmlspecialchars($secondResult['codeVoucher'])?>" class="btn TywebButton">Télécharger le bon</a>
    </div>
    <div class="card-footer text-muted">
        <p>N° de Bon : <?= htmlspecialchars($secondResult['codeVoucher']) ?></p>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>