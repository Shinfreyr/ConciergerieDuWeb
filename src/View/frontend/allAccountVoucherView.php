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
                                <h4 class="card-title"><span class="voucherCardText">Test</span> vous invite à rejoindre le Cercle : <span class="invitCardText">TEst</span> </h4>
                                <p class="card-text">Blavla
                                    <hr>
                                    Test
                                    <a href="#" class="btn btn-danger float-right voucher">Refuser</a>
                                    <a href="#" class="btn btn-success float-right voucher">Accepter</a>
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