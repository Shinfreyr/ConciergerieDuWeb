<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Connexion !"; ?>
<?php ob_start(); ?>


<div class="row parallax justify-content-center" style="background-image: url('src/Public/images/mains.jpg');">
    <div class="card-deck col-sm-6 text-justify  text-center MgHtBs blanc borddt" style="background-image: linear-gradient(to right bottom, #1c1918, #1c1918, #1c1918, #37669f, #0c4c8c);">
    <!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="alert welcome col-12 text-center" id="up" role="alert">
            <h1 class="alert-heading blanc MgHtBs">Connection</h1>
            <img src="src/Public/images/cartevip.png" class="MgBs" alt="Accès membre VIP la conciergerie du web" id="minivip" alt="Responsive image">
            <div class="dropdown-divider Pttraitb" ></div>
            
            <p class="mb-0">Profitez de nos offres !</p>
            <p class="mb-0">Connectez vous ici !</p>
        </div>

        <!-- Connection Forms ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <form action="index.php?action=connection&db=ok" id="inscriptionForm" method="post" class="col-12 MgHtBs">   
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre Email">
            </div>
            <div class="form-group">
                <label for="password">Mot de Passe*</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Votre Mot de Passe">
            </div>
            <button type="submit" class="btn btn-TywebButton btn-lg btn-block btn-validation col-12">Connection</button>
        </form>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>
