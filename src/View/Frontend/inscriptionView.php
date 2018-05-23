<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Inscription !"; ?>
<?php ob_start(); ?>

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="alert welcome col-12" id="up" role="alert">
    <h1 class="alert-heading triangle-code-chip">Inscription</h1>
    <p class="mb-0">Dans le cadre de la nouvelle Réglementation Générale sur la Protection des Données, nous vous informons que toutes vos informations enregistrées sur notre site, resteront confidentielles et pouront être supprimées à tout moment par vos soins. </p>
    <hr>
    <p class="mb-0">Attention ! Vous devez être en possession d'un code Entreprise pour vous inscrire.</p>
</div>

<!-- Inscription Forms ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<form action="index.php?action=inscription&db=ok" id="inscriptionForm" method="post" class="col-12  polygon-body ">
    <div class="form-group">
        <label for="enterpriseCode">Code Entreprise*</label>
        <input type="text" class="form-control" name="enterpriseCode" id="enterpriseCode" placeholder="Code de votre entreprise">
        <small id="password" class="form-text text-muted">Ce code vous est fournie par votre entreprise.</small>
    </div>    
    <div class="form-group">
        <label for="lastName">Nom*</label>
        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Votre Nom">
    </div>
    <div class="form-group">
        <label for="firstName">Prénom*</label>
        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Votre Prénom">
    </div>
    <div class="form-group">
        <label for="birthDay">Date de Naissance*</label>
            <div class="row">
                <input type="text" class="form-control col-2 birthForm" name="birthDay" id="birthDay" placeholder="Jours de naissance" maxlength="02">
                <input type="text" class="form-control col-2" name="birthMonth" id="birthMonth" placeholder="Mois de naissance" maxlength="02">
                <input type="text" class="form-control col-2" name="birthYear" id="birthYear" placeholder="Année de naissance" maxlength="04">
            </div>        
        <small id="birthDay" class="form-text text-muted">Par exemple si vous êtes né le premier jours du mois d'Avril 1984, écrivez 01 puis 04 et enfin 1984.</small>
    </div>       
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre Email">
        <small id="emailHelp" class="form-text text-muted">Votre email restera confidentiel</small>
    </div>
    <div class="form-group">
        <label for="password">Mot de Passe*</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Votre Mot de Passe">
        <small id="password" class="form-text text-muted">Votre mot de passe doit comporter au minimum: 8 charactères, 1 chiffre, 1 minuscule, 1 majuscule</small>
    </div>
    <div class="form-group">
        <label for="passwordComp">Retapez votre Mot de Passe*</label>
        <input type="password" class="form-control" name="passwordComp" id="passwordComp" placeholder="Retapez Votre Mot de Passe">
    </div>
    <div class="form-check" id="checkBot" >
        <input type="checkbox" class="form-check-input" name="checkHuman" id="checkHuman" value="ok">
        <label class="form-check-label" for="checkHuman">Je ne suis pas un robot</label>
    </div>
    <button type="submit" class="btn btn-info btn-validation col-12">Envoyer</button>
</form>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>