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
        <p class="card-text">Nom Entreprise</p>
        <p>Date</p>
        <hr>
        <h5>Prénom Nom</h5>
        <h6>Article</h6>
        <p>Prix Promo (prix sans promo)</p>
        <p>Date de validité</p>
        
        <a href="#" class="btn btn-primary">envoyer le bon sur ma boite mail</a>
    </div>
    <div class="card-footer text-muted">
        <p>Numéro de bon</p>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>