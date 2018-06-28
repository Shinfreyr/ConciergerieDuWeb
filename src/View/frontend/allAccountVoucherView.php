<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Mes bons de réduction !"; ?>
<?php ob_start(); ?>

    <!-- Voucher List ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <span>
            <h1 class="MgHtBs colorfontD">MES BONS DE REDUCTION</h1>
            <div class="dropdown-divider Pttrait" >
            </div>
    </span>
   
    <div class="card content justify-content-center">
        <div class="card-body scroll col">
            <?php    
                while ($db1 = $request->fetch()) {
                    echo '
                        <div class="card voucherCard col-12">
                            <div class="card-body shadowfdbreduc">
                                <h2 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h2>
                                <span class="targetVoucher"><img class="imgAllVoucher" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="Image de l\'article"></span>
                                <p class="card-text">
                                    Prix avec Réduction: '.htmlspecialchars($db1['reductionPriceArticle']).'&euro;
                                    <hr>
                                    <article class="text-danger">
                                        Date de fin de validité : '.htmlspecialchars($db1['dateVoucher']).
                                        ' <a href="index.php?action=voucher&idArticle='.htmlspecialchars($db1['idArticle']).'&endDate='.htmlspecialchars($db1['endDateArticle']).'" class="btn btn-TywebButton float-right voucher margebtn">Télécharger <i class="fa fa-search vuebutton"></i></a>
                                          <a href="index.php?action=supressVoucher&idVoucher='.htmlspecialchars($db1['idVoucher']).'" class="btn btn-danger float-right voucher margebtn">Supprimer</a>
                                    </article>
                                </p>                
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>