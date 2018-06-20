<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Mes bons de réduction !"; ?>
<?php ob_start(); ?>

    <!-- Voucher List ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="card content">
        <div class="card-body scroll">
            <?php    
                while ($db1 = $request->fetch()) {
                    echo '
                        <div class="card border-primary voucherCard">
                            <div class="card-body">
                                <h4 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h4>
                                <p class="card-text">'
                                    .htmlspecialchars($db1['reductionPriceArticle']).'&euro;
                                    <hr>
                                    Date de fin de validité : '.htmlspecialchars($db1['dateVoucher']).
                                    '<a href="index.php?action=supressVoucher&idVoucher='.htmlspecialchars($db1['idVoucher']).'" class="btn btn-danger float-right voucher">Supprimer</a>
                                    <a href="index.php?action=voucher&idArticle='.htmlspecialchars($db1['idArticle']).'&endDate='.htmlspecialchars($db1['endDateArticle']).'" class="btn btn-success float-right voucher">Voir le Bon</a>
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