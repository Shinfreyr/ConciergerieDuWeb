<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Gestion de Compte !"; ?>
<?php ob_start(); ?>



<div class="row parallax justify-content-center imgfdmodifscpte">
    <div class="card-deck col-sm-8 text-center  blanc borddtgd" style="background-image: linear-gradient(to right bottom, #1c1918, #1c1918, #1c1918, #37669f, #0c4c8c);">
        
        <!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="alert welcome col-12 text-center blanc" id="up" role="alert">
            <h1 class="alert-heading ">Gestion de compte
            <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" id="minivip" alt="Responsive image">
            </h1>
            <div class="dropdown-divider Pttraitb" ></div> 
            <p class="mb-0">Modifiez et vérifiez vos informations enregistrer ! <br />
            <i class="fa fa-cogs"></i>  Attention en cas de demande de supression de compte, il sera nécessaire d'en créer un nouveau !</p>
            <hr>

            <!-- Panel Admin Access ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


        <!-- Account info ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 
    
            <div class="card-header colorbgrdtitre">
                <?= '<h2 class="colorfontD"> Nom: ' . htmlspecialchars($result['lastNameAccount']) . ' ' . htmlspecialchars($result['firstNameAccount']) . '</h2>' ?>
            </div>
            <div class="card-body d-block mx-auto fdforminscri">
                <h5 class="card-title">
                    <?= 'Adresse Email : ' . htmlspecialchars($result['mailAccount']) ?> <i class="fa fa-envelope-open-o"></i>
                </h5>
                <a class="btn btn-TywebButton" data-toggle="collapse" href="#mailManagement" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Changer l'adresse Email
                </a>
                <div class="collapse" id="mailManagement">
                    <div class="card card-body">
                    <label for="email">GESTION DE L'ADRESSE EMAIL <i class="fa fa-envelope-open-o"></i></label><br />
                        <form action="index.php?action=mailManagement&db=ok" id="inscriptionForm" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control mx-auto col-4" name="email" id="email" aria-describedby="emailHelp" placeholder="Entrez votre nouvelle adresse">
                                <small id="emailHelp" class="form-text text-muted">Saisissez votre nouvelle adresse Email</small>
                                <button type="submit" class="btn btn-TywebButton">Confirmer la nouvelle adresse</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <a class="btn btn-TywebButton" data-toggle="collapse" href="#passwordManagement" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Changer le mot de passe
                </a>
                <div class="collapse" id="passwordManagement">
                    <div class="card card-body">
                    <label for="email">GESTION DE VOTRE MOT DE PASSE <i class="fa fa-lock"></i></label><br />
                        <form action="index.php?action=passwordManagement&db=ok" id="inscriptionForm" method="post" class="MgHtBs">
                            <div class="form-group">
                                <label for="oldPassword">Votre Mot de passe <strong>Actuel</strong></label>
                                <input type="password" class="form-control mx-auto col-4" name="oldPassword" id="oldPassword" placeholder="Entrez votre Mot de Passe Actuel">
                            </div>
                            <div class="form-group">
                                <label for="password"><strong>Nouveau</strong> Mot de passe</label>
                                <input type="password" class="form-control mx-auto col-4" name="password" id="password" placeholder="Entrez votre Nouveau Mot de Passe">
                                <small id="password" class="form-text text-muted">Votre mot de passe doit comporter au minimum : 8 charactères, 1 chiffre, 1 minuscule, 1 majuscule</small>
                            </div>
                            <div class="form-group">
                                <label for="passwordComp"><strong>Controle du Nouveau</strong> Mot de passe</label>
                                <input type="password" class="form-control mx-auto col-4" name="passwordComp" id="passwordComp" placeholder="Retapez votre Nouveau Mot de passe">
                            </div>
                            <button type="submit" class="btn btn-TywebButton">Changer de mot de passe</button>
                        </form>
                    </div>
                </div>
                
                <!-- Button trigger modal +++++++++++++++++++++++++++++++++ -->
                <?php 
                    if($_SESSION['conciergerieDuWebStatus'] != 'Admin' && $_SESSION['conciergerieDuWebStatus'] != 'AdminSU') {
                        echo '
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Supprimer le compte
                            </button>
                        ';
                    } 
                ?>
                    

                <!-- Modal  +++++++++++++++++++++++++++++++++ -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-warning"></i>  ATTENTION !</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Vous êtes sur le point de supprimer votre compte, ce qui aura pour effet d'arrêter le service dont vous bénificiez.
                                    <hr>
                                    <strong>Voulez-vous vraiment supprimer votre compte?</strong>
                                </div>
                                <div class="modal-footer">                        
                                    <form action="index.php?action=deletAccount&db=ok" id="inscriptionForm" method="post">    
                                        <div class="form-group">
                                            <label for="passwordDel">Mot de passe</label>
                                            <input type="password" class="form-control  mx-auto" name="passwordDel" id="passwordDel" placeholder="Entrez votre Mot de passe">
                                        </div>
                                            <button type="button" class="btn btn-TywebButton" data-dismiss="modal">Ne pas supprimer mon compte</button>
                                            <button type="submit" class="btn btn-danger">Supprimer mon compte</button>
                                    </form>
                                 </div>
                            </div>
                        </div> 
                    </div><!-- fin Modal  +++++++++++++++++++++++++++++++++ -->
                </div> <!-- fin de     <div class="alert welcome col-12 text-justify blanc" id="up" role="alert"> +++++++++++++++++++++++++++++++++ -->
            <div class="card-footer text-muted text-center">
              <small> <?= 'Date de naissance: ' . htmlspecialchars($result['birthdayAccount']) ?></small>
            </div>
        </div> <!-- fin de   <div class="card-deck col-sm-8 text-center MgHtBs blanc borddtgd" style="background-image: linear-gradient(to right bottom, #1c1918, #1c1918, #1c1918, #37669f, #0c4c8c);"> ++++++++++++++++++++++++-->
    </div> <!-- fin de <div class="row parallax justify-content-center" style="background-image: url('src/Public/images/mains.jpg');">+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>
