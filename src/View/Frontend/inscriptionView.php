<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Inscription !"; ?>
<?php ob_start(); ?>




<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="alert welcome hauteurclass someClass parallax blanc" role="alert" >   <!-- affichage du titre et du paragraphe attenant+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <h1 class=" MgHtBs">Inscription à la Conciergerie du WEB</h1>
        <div class="dropdown-divider Pttraitb" ></div>
            <div id="contImgTxt">
                <div class="element col-xl-11 offset-xl-1">
                <p class="mb-0"><h4>Dans le cadre de la nouvelle Réglementation Générale sur la Protection des Données, nous vous informons que toutes vos informations enregistrées sur notre site, resteront confidentielles et pouront être supprimées à tout moment par vos soins. </h4></p>
                <p class="mb-0">Modalité d'inscription:<br /> Vous devez vous munir de..............Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.<br />Et quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.<h3>
                    <br /><i class="fa fa-cogs"></i> Attention ! Vous devez être en possession d'un code Entreprise pour vous inscrire.</h3></p>
                </div>
                <div class="element">
                    <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-thumbnail rounded mx-auto d-block" alt="Responsive image">
                </div>     
            </div>
        <div class="element1">
            <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-thumbnail rounded mx-auto d-block" alt="Responsive image">
        </div>     
    </div>
<!-- Inscription Forms ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div><h1 class="MgHtBs"></h1></div>

<div class="row parallax justify-content-center" style="background-image: url('src/Public/images/mains.jpg');">
    <div class="card-deck col-sm-10 text-justify MgHtBs blanc fdcartevip borddt">
      <h1>VIP CLUB</h1> <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" id="minivip" alt="Responsive image">
        <form action="index.php?action=inscription&db=ok" id="inscriptionForm" method="post" class="MgHtBs bord-form">
            <legend>Entreprise</legend>
            <div class="dropdown-divider Gdtraitb"></div>
            <div class="form-group offset-sm-1">
                <label for="enterpriseCode">Code Entreprise*</label>
                <input type="text" class="form-control col-7" name="enterpriseCode" id="enterpriseCode" placeholder="Code de votre entreprise">
                <small id="password" class="form-text text-muted">Ce code vous est fournie par votre entreprise.</small>
            </div>    
            <legend>Compte</legend>
            <div class="dropdown-divider Gdtraitb" ></div>
            <div class="form-group offset-sm-1">
                <label for="lastName">Nom*</label>
                <input type="text" class="form-control col-7" name="lastName" id="lastName" placeholder="Votre Nom">
    
                <label for="firstName">Prénom*</label>
                <input type="text" class="form-control col-7" name="firstName" id="firstName" placeholder="Votre Prénom">
      
                <label for="Date_naissance">Date de Naissance*</label>
                <p class="d-flex flex-nowrap">
                <input type="text" class="form-control birthForm col-3" name="birthDay" id="birthDay" placeholder="Jour" maxlength="02">
                <input type="text" class="form-control col-3" name="birthMonth" id="birthMonth" placeholder="Mois" maxlength="02">
                <input type="text" class="form-control col-3" name="birthYear" id="birthYear" placeholder="Année" maxlength="04">
                </p>
                <small id="Date_naissance" class="form-text text-muted">Par exemple si vous êtes né le premier jours du mois d'Avril 1984, écrivez 01 puis 04 et enfin 1984.</small>       
   
                <label for="email">Email*</label>
                <input type="email" class="form-control col-8" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre Email">
                <small id="email" class="form-text text-muted">Votre email restera confidentiel</small>
            </div>
            <legend>Sécurité </legend>
            <div class="dropdown-divider Gdtraitb" ></div>
            <div class="form-group offset-sm-1">
                <label for="password">Mot de Passe*</label>
                <input type="password" class="form-control col-8" name="password" id="password" placeholder="Votre Mot de Passe">
                <small id="password" class="form-text text-muted">Votre mot de passe doit comporter au minimum: 8 charactères, 1 chiffre, 1 minuscule, 1 majuscule</small>
           
                <label for="passwordComp">Retapez votre Mot de Passe*</label>
                <input type="password" class="form-control col-8" name="passwordComp" id="passwordComp" placeholder="Retapez Votre Mot de Passe">
            </div>
            <div class="form-check offset-sm-1" id="checkBot" >
                <input type="checkbox" class="form-check-input" name="checkHuman" id="checkHuman" value="ok">
                <label class="form-check-label" for="checkHuman">Je ne suis pas un robot</label>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-TywebButton btn-lg btn-block btn-validation center-block col-6">Souscrire</button>
            </div>  
        </form>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require('template.php');    
?>