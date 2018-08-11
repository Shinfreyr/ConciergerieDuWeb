<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Article mis en valeur !"; ?>
<?php ob_start(); ?>

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="alert welcome col-12 text-center" id="up" role="alert">
    <h1 class="alert-heading blanc MgHtBs">Articles à mettre en valeur</h1>
    <div class="dropdown-divider Pttraitb" ></div>
</div>

<!-- Light choice ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<form action="index.php?action=#" id="lightArticleValidation" method="post">    
    <?php            
        while ($db1 = $request->fetch()) {
            echo '
                <div class="form-group">
                    <label for="validationArticleAdmin">Choisissez une catégorie</label>
                    <select class="form-control" name="validationArticleAdmin" id="validationArticleAdmin">
                        <option>'. htmlspecialchars($db1['nomArticle']) .'</option>';
                        foreach($valueArticle as $db2) {
                            echo '<option>'. $db2 .'</option>';
                        }
            echo '  
                    </select>
                </div>
            ';
        }
    ?>
    <button type="submit" class="btn btn-info">Envoyer</button>
</form>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>