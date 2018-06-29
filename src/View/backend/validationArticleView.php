<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Panel Admin !"; ?>
<?php ob_start(); ?>

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="alert welcome col-12 text-center" id="up" role="alert">
    <h1 class="alert-heading blanc MgHtBs">Articles en attentes de validation</h1>
    <div class="dropdown-divider Pttraitb" ></div>
</div>

<!-- Validation Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
    while ($db1 = $request->fetch()) {
        echo '    
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h4>
                    <img class="card-img-top imgValidation float-right" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="image article">
                    <p class="card-text">Text</p>
                </div>
            </div>
        ';
    }
?>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>