<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Panel Admin !"; ?>
<?php ob_start(); ?>

<!-- Welcom Message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Fluid jumbo heading</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>