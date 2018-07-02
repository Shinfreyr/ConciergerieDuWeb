<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Panel Admin !"; ?>
<?php ob_start(); ?>

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="alert welcome col-12 text-center" id="up" role="alert">
    <h1 class="alert-heading blanc MgHtBs">Articles en attentes de validation</h1>
    <div class="dropdown-divider Pttraitb" ></div>
</div>

<!-- Validation Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
    while ($db1 = $request->fetch()) {
        echo '    
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h4>
                    <h5>Vendeur: '.htmlspecialchars($db1['societyNameSeller']).'</h5>
                    <p>Date de création de l\'offre : '.htmlspecialchars($db1['beginingDateArticle']).'</p>
                    <hr></hr>
                    <img class="card-img-top imgValidation float-right" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="image article">
                    <p class="card-text">'.htmlspecialchars($db1['descriptionArticle']).'</p>
                    <p>Prix avec Réduction: '.htmlspecialchars($db1['reductionPriceArticle']).' <i class="fas fa-euro-sign"></i></p>
                    <p>Fin de validité de l\'offre: '.htmlspecialchars($db1['endDateArticle']).'</p>
                    <a href="index.php?action=adminArticleView&idOffre='.htmlspecialchars($db1['idArticle']).'" class="btn btn-info col-12">Voir <i class="fas fa-eye"></i></a>
                </div>
            </div>
        ';
    }
?>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>