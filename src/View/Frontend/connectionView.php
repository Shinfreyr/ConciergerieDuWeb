<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Accueil !"; ?>
<?php ob_start(); ?>

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="alert welcome" id="up" role="alert">
    <h1 class="alert-heading">Connection</h1>
    <p class="mb-0">Connectez vous ici !</p>
    <hr>
    <p class="mb-0">Proffitez de nos offres en vous connectant !</p>
</div>

<!-- Inscription Forms ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<form action="index.php?action=connection&db=ok" id="inscriptionForm" method="post">   
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre Email">
    </div>
    <div class="form-group">
        <label for="password">Mot de Passe*</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Votre Mot de Passe">
    </div>
    <button type="submit" class="btn btn-info btn-validation col-12">Connection</button>
</form>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>