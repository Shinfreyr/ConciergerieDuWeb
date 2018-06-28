<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Panel Admin !"; ?>
<?php ob_start(); ?>

<!-- Waiting Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-3">Articles en Attente de Validation</h2>
        <p class="lead"><?=htmlspecialchars($result[0])?></p>
        <hr class="my-2">
        <p>Plus d'infos</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Gestion Articles Validations</a>
        </p>
    </div>
</div>

<!-- Voucher Count +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-3">Bons Généré Actifs</h2>
        <p class="lead"><?=htmlspecialchars($result1[0])?></p>
        <hr class="my-2">
        <p>Plus d'infos</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Voir les Bons</a>
        </p>
    </div>
</div>

<!-- User Count +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-3">Comptes Utilisateurs Actifs</h2>
        <p class="lead">756211</p>
        <hr class="my-2">
        <p>Plus d'infos</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Gestion Comptes Utilisateur/Administration</a>
        </p>
    </div>
</div>

<!-- Vendor Count ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-3">Comptes Vendeurs Actifs</h2>
        <p class="lead">102</p>
        <hr class="my-2">
        <p>Plus d'infos</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Gestion Comptes Vendeurs</a>
        </p>
    </div>
</div>

<!-- Entreprise Count +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-3">Comptes Entreprises Actives</h2>
        <p class="lead">14702</p>
        <hr class="my-2">
        <p>Plus d'infos</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Gestion Entreprise</a>
        </p>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>