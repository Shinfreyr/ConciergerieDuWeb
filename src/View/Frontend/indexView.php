<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Accueil !"; ?>
<?php ob_start(); ?>

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="alert welcome" id="up" role="alert">
    <h1 class="alert-heading">La Conciergerie du Web</h1>
    <p>Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.</p>
    <hr>
    <p class="mb-0">Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.</p>
</div>

<!-- Service Card ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="card-deck">
    <?php
        while ($db1 = $request->fetch()) {
            echo                
                '<div class="card">
                    <img class="card-img-top" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h5>
                        <p class="card-text">'.htmlspecialchars($db1['descriptionArticle']).'</p>
                        <hr>
                        <p class="card-text">Réduction: '.htmlspecialchars($db1['reductionArticle']).'%</p>
                        <p class="card-text">Prix original: '.htmlspecialchars($db1['originalPriceArticle']).'&euro;</p>
                        <h3>Prix avec réduction: '.htmlspecialchars($db1['reductionPriceArticle']).'&euro;</h3>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Voir l\'article</a>
                        <p>*fin de la promotion : '.htmlspecialchars($db1['endDateArticle']).'</p>
                    </div>
                </div>';
        }

    ?>
</div>

<div class="card-deck">
    <?php
        while ($db2 = $secondRequest->fetch()) {
            echo                
                '<div class="card">
                    <img class="card-img-top" src="src/Public/images/'.htmlspecialchars($db2['imageArticle']).'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">'.htmlspecialchars($db2['nomArticle']).'</h5>
                        <p class="card-text">'.htmlspecialchars($db2['descriptionArticle']).'</p>
                        <hr>
                        <p class="card-text">Réduction: '.htmlspecialchars($db2['reductionArticle']).'%</p>
                        <p class="card-text">Prix original: '.htmlspecialchars($db2['originalPriceArticle']).'&euro;</p>
                        <h3>Prix avec réduction: '.htmlspecialchars($db2['reductionPriceArticle']).'&euro;</h3>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Voir l\'article</a>
                        <p>*fin de la promotion : '.htmlspecialchars($db2['endDateArticle']).'</p>
                    </div>
                </div>';
        }

    ?>
</div>


<?php
    $content = ob_get_clean();
    require('template.php');    
?>