<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Aide !"; ?>
<?php ob_start(); ?>

<!-- Help Card ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron jumbotron-fluid HelpCard colorfontD">
    <div class="container">
        <h1 class="display-5 ptpolh1">Comment profiter du service ?</h1>
        <div class="dropdown-divider Pttraitb MgHtBs" >
        </div> 
        <p class="lead">
            <blockquote class="blockquote">
                <dl class="colorfontA display-8">
                    <dt>Aide</dt>
                    <br />
                    <dd>Pour les services de conciergerie, un contrat est signé avec l’entreprise cliente qui, grâce à un système d’abonnement, fait bénéficier ses salariés de promotions commerciales négociées par la conciergerie et ses partenaires. Les salariés de l’entreprise, grâce à un code unique d’entreprise, s’inscrivent sur le site et peuvent bénéficier des promotions qui sont affichées sur le site durant tout le temps de l’abonnement. 
                    </dd>
                    <dd>
                        Lorsque le salarié inscrit choisi une promotion, il obtient un coupon promo qui lui permettra de bénéficier de remise spéciale conciergerie Tyweb Services auprès du commerçant jusqu’à la date limite de promotion.
                    </dd>
                    <dd>   
                        Pour cela, il doit présenter son coupon au commerçant qui le gardera après le service rendu ou présenter son email reçu pour preuve auprès du commerçant. Le commerçant comptabilisera la vente pour nos statistiques internes.
                    </dd>
                    <dd>
                        Tout visiteur peut consulter les promotions mais ne peuvent en bénéficier que s’ils sont inscrits et connectés. Par contre, ils peuvent formuler une demande de conciergerie pour leur entreprise.
                    </dd>
                </dl> 
                <footer class="blockquote-footer MgHt">La Conciergerie du Web</footer>
            </blockquote>
        </p>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>
