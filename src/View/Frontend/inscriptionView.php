<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Inscription !"; ?>
<?php ob_start(); ?>




<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="alert welcome hauteurclass parallax blanc" role="alert" >   <!-- affichage du titre et du paragraphe attenant+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <h1 class=" MgHtBs">Inscription à la Conciergerie du WEB</h1>
    <div class="dropdown-divider Pttraitb" ></div>
        <div id="contImgTxt">
            <div class="element col-xl-11 offset-xl-1">
                <p class="mb-0"><h4>Dans le cadre de la nouvelle Réglementation Générale sur la Protection des Données, nous vous informons que toutes vos informations enregistrées sur notre site, resteront confidentielles et pouront être supprimées à tout moment par vos soins. </h4></p>
                <p class="mb-0">Modalité d'inscription:<br /> Vous devez vous munir de..............Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.<br />Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.<h3>
                <br /><i class="fa fa-cogs"></i> Attention ! Vous devez être en possession d'un code Entreprise pour vous inscrire.</h3></p>
            </div>
            <div class="element">
                <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-thumbnail rounded mx-auto d-block" alt="Carte VIP membre Conciergerie du web">
            </div>     
        </div>
    <div class="element1">
        <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-thumbnail rounded mx-auto d-block" alt="Carte VIP membre Conciergerie du web">
    </div>     
</div>
<!-- Inscription Forms ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div><h1 class="MgHtBs"></h1></div>

<div class="row parallax justify-content-center imgfdintro">
    <div class="card-deck col-sm-10 col-12 text-justify MgHtBs blanc fdcartevip borddt">
        <span><h1>VIP CLUB</h1><img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" id="minivip" alt="Carte VIP membre Conciergerie du web"></span>
        <form action="index.php?action=inscription&db=ok" id="inscriptionForm" method="post" class="MgHtBs bord-form">
            <legend>Entreprise</legend>
            <div class="dropdown-divider Gdtraitb"></div>
            <div class="form-group ">
                <label for="enterpriseCode">Code Entreprise <small>(1)</small></label>
                <input type="text" class="form-control col-xs-8 col-sm-5" name="enterpriseCode" id="enterpriseCode" placeholder="Code de votre entreprise">
                <small id="password" class="form-text text-muted"><small>(1)</small> Ce code vous est fourni par votre entreprise.</small>
            </div>    
            <legend>Compte</legend>
            <div class="dropdown-divider Gdtraitb" ></div>
            <div class="form-group">
                <label for="lastName">Nom </label>
                <input type="text" class="form-control col-xs-8 col-sm-5" name="lastName" id="lastName" placeholder="Votre Nom">
                <label for="firstName">Prénom </label>
                <input type="text" class="form-control col-xs-8 col-sm-5" name="firstName" id="firstName" placeholder="Votre Prénom">
                <label for="Date_naissance">Date de Naissance <small>(2)</small></label>
                <p class="d-flex flex-nowrap">
                <input type="text" class="form-control birthForm col-xs-2 col-4 pasmarge text-center" name="birthDay" id="birthDay" placeholder="Jour, ex : 01" maxlength="02">
                <input type="text" class="form-control col-xs-2 col-4 text-center" name="birthMonth" id="birthMonth" placeholder="Mois, ex : 04" maxlength="02">
                <input type="text" class="form-control col-xs-2 col-4 text-center" name="birthYear" id="birthYear" placeholder="Année, ex : 1984" maxlength="04">
                </p>
                <small id="Date_naissance" class="form-text text-muted col-xs-2 colpolgold"><small>(2)</small> Ex : vous êtes né(e) le 01/04/1984, écrivez 01 puis 04 et enfin 1984</small>   
                <label for="email">Email <small>(3)</small></label>
                <input type="email" class="form-control col-xs-12 col-sm-8" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre Email">
                <small id="email" class="form-text text-muted"><small>(3)</small> Votre email restera confidentiel</small>
            </div>
            <legend>Sécurité </legend>
            <div class="dropdown-divider Gdtraitb" ></div>
            <div class="form-group">
                <label for="password">Mot de Passe <small>(4)</small></label>
                <input type="password" class="form-control col-xs-8 col-sm-5" name="password" id="password" placeholder="Votre Mot de Passe">
                <small id="password" class="form-text text-muted"><small>(4)</small> Votre mot de passe doit comporter au minimum 8 caractères 1 chiffre, 1 minuscule, 1 majuscule</small>
                <label for="passwordComp">Confirmez votre Mot de Passe</label>
                <input type="password" class="form-control col-xs-8 col-sm-5" name="passwordComp" id="passwordComp" placeholder="Retapez Votre Mot de Passe">
            </div>
            <div class="form-check offset-sm-1" id="checkBot" >
                <input type="checkbox" class="form-check-input" name="checkHuman" id="checkHuman" value="ok">
                <label class="form-check-label" for="checkHuman">Je ne suis pas un robot</label>
            </div>               
        <!--<div class="form-check offset-sm-1" id="checkBot" >
                <input type="checkbox" class="form-check-input" name="checkHuman" id="checkHuman" value="ok">
                <label class="form-check-label" for="checkHuman">J'accepte les <a ref="#exampleModalLong" data-toggle="modal">Conditions et Modalités</a> de La Conciergerie du web</label>
            </div>     -->
            <div class="row justify-content-center MgHt">
                <button type="submit" class="btn btn-TywebButton btn-lg btn-block btn-validation center-block col-6">Souscrire</button>
            </div>  
        </form>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require('template.php');    
?>