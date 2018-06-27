<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Accueil !"; ?>
<?php ob_start(); ?>

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="row" >
    <div class="alert welcome hauteurclass col-12 someClass parallax imgfdintro" id="up" role="alert">
        <span>
            <h1 class="MgHtBs colorfontD">LA CONCIERGERIE DU WEB</h1>
            <div class="dropdown-divider Pttrait" >
            </div>
        </span>
        <div id="contImgTxt">
            <div class="element col-xl-11 offset-xl-1 shadowfd">
                <p class="text-justify">
                <blockquote class="fdcolorbgind">
                    <h2>Facilitateur de vie et d'envies</h2> <br />
                    Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. 
                    <br /><br />Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. <br /> Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
                </blockquote>
                </p>
            </div>
            <div class="element">
                <a href="index.php?action=helpVIP">
                    <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-fluid img-thumbnail rounded mx-auto d-block">
                </a>
            </div>
        </div>
        <div class="element1">
            <a href="index.php?action=helpVIP">
                <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-fluid img-thumbnail rounded mx-auto d-block">
            </a>
        </div>
    </div>

<!-- Service Card ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="col-12 justify-content-center">
        <h1 class="alert-heading blanc MgHtBs">  Nos offres du jour    <i class="fa fa-tags"></i></h1>
    </div>
    <div class="dropdown-divider Pttraitb" >
    </div>  
    <div class="row justify-content-center">
        <div class="card-deck col-sm-12 col-lg-10" >
            <?php
                while ($db1 = $request->fetch()) {
                    echo                
                        '<div class="card col-10 cadrecard">
                            <img class="card-img-top" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h2>
                                <p class="card-text">'.htmlspecialchars($db1['descriptionArticle']).'</p>
                                <hr>
                                <p class="card-text">Réduction: '.htmlspecialchars($db1['reductionArticle']).'% <i class="fa fa-tag"></i></p>
                                <p class="card-text">Prix original: '.htmlspecialchars($db1['originalPriceArticle']).'&euro;</p>
                                <h2>Prix avec réduction: '.htmlspecialchars($db1['reductionPriceArticle']).'&euro; </h2>
                            </div>
                            <div class="card-footer">
                                <a href="index.php?action=offre&idOffre='.htmlspecialchars($db1['idArticle']).'" class="btn btn-TywebButton btn-lg btn-block">Voir l\'article <i class="fa fa-search vuebutton"></i></a>
                                <p>*fin de la promotion : '.htmlspecialchars($db1['endDateArticle']).'</p>
                            </div>
                        </div>';
                }

            ?>
        </div>

        <div class="card-deck col-sm-12 col-lg-10" >
            <?php
                while ($db2 = $secondRequest->fetch()) {
                    echo                
                        '<div class="card col-10 cadrecard">
                            <img class="card-img-top" src="src/Public/images/'.htmlspecialchars($db2['imageArticle']).'" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">'.htmlspecialchars($db2['nomArticle']).'</h2>
                                <p class="card-text">'.htmlspecialchars($db2['descriptionArticle']).'</p>
                                <hr>
                                <p class="card-text">Réduction: '.htmlspecialchars($db2['reductionArticle']).'% <i class="fa fa-tag"></i> </p>
                                <p class="card-text">Prix original: '.htmlspecialchars($db2['originalPriceArticle']).'&euro;</p>
                                <h2>Prix avec réduction: '.htmlspecialchars($db2['reductionPriceArticle']).'&euro; </h2>
                            </div>
                            <div class="card-footer">
                                <a href="index.php?action=offre&idOffre='.htmlspecialchars($db2['idArticle']).'" class="btn btn-TywebButton btn-lg btn-block">Voir l\'article <i class="fa fa-search vuebutton"></i></a>
                                <p>*fin de la promotion : '.htmlspecialchars($db2['endDateArticle']).'</p>
                            </div>
                        </div>';
                }

            ?>
        </div>
        <p class="dropdown-divider PttraitbGd blanc MgHtBs"><i class="fa fa-cogs"></i> Pour Rappel, il faut utiliser la connexion avec votre compte pour pouvoir EDITER le(s) bon(s) de réduction</p>
    </div><!-- fin des visues des offres ++++++++++++++++++++++++++++ -->    
</div>  <!-- fin de <div class="row" > ++++++++++++++++++++++++++++ -->     

<?php
    $content = ob_get_clean();
    require('template.php');    
?>





    
