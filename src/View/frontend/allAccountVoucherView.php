<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Mes bons de réduction !"; ?>
<?php ob_start(); ?>

    <!-- Voucher List ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <span>
        <h1 class="MgHtBs blanc">MES BONS DE REDUCTION <i class="fa fa-tags vuebutton"></i></h1>
        <div class="dropdown-divider Pttraitb" ></div>
    </span>
    <div class="col-12 justify-content-center aligncard">
        <?php    
            while ($db1 = $request->fetch()) {
                echo '
                    <div class="card col-10 cadrecard">
                        <div class="card-body cadrecardcnt">
                            <h2 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h2>
                            <span class="targetVoucher alignimgdroite"><img class="imgAllVoucher" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="Image de l\'article"></span>
                            <p class="card-text">
                                Prix avec Réduction: '.htmlspecialchars($db1['reductionPriceArticle']).'&euro;
                                <hr>
                                <article class="text-danger">
                                    Date de fin de validité : '.htmlspecialchars($db1['dateVoucher']).
                                    ' <a href="index.php?action=dlVoucher&idArticle='.htmlspecialchars($db1['idArticle']).'&codeVoucher='.htmlspecialchars($db1['codeVoucher']).'" class="btn btn-TywebButton float-right voucher margebtn">Télécharger <i class="fa fa-download vuebutton"></i></a>
                                    <a href="index.php?action=supressVoucher&idVoucher='.htmlspecialchars($db1['idVoucher']).'" class="btn btn-danger float-right voucher margebtn">Supprimer</a>
                                </article>
                            </p>                
                        </div>
                    </div>
                ';
            }
        ?>
    </div> 
<?php
    $content = ob_get_clean();
    require('template.php');    
?>