<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Recherche !"; ?>
<?php ob_start(); ?>

<!-- Resultat recherche +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
    while($db1=$request->fetch()) {
        echo '
            <div class="card col-10">
                <div class="card-body">
                    <h2 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h2>
                    <p class="card-text">'.htmlspecialchars($db1['descriptionArticle']).'</p>
                    <hr>
                    <img class="card-img-top imgSearch float-right" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="Card image cap">
                    <p class="card-text">Réduction: '.htmlspecialchars($db1['reductionArticle']).'% <i class="fa fa-tag"></i></p>
                    <p class="card-text">Prix original: '.htmlspecialchars($db1['originalPriceArticle']).'&euro;</p>
                    <h2>Prix avec réduction: '.htmlspecialchars($db1['reductionPriceArticle']).'&euro; </h2>
                </div>
                <div class="card-footer">
                    <a href="index.php?action=offre&idOffre='.htmlspecialchars($db1['idArticle']).'" class="btn btn-TywebButton btn-lg btn-block">Voir l\'article <i class="fa fa-search vuebutton"></i></a>
                    <p>*fin de la promotion : '.htmlspecialchars($db1['endDateArticle']).'</p>
                </div>
            </div>
        ';
    }
?>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>