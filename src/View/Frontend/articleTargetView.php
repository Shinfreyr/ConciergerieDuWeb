<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Article !"; ?>
<?php ob_start(); ?>

<!-- Jumbotron Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron col-12 col-md-6">
    <img class="card-img-top" src="src/Public/images/defaut.jpg" alt="Card image cap">
    <h1 class="display-4">Nom de l'offre</h1>
    <p class="lead">Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae doloribus sint nobis et praesentium quae ea modi consequatur, voluptatibus maiores, sapiente placeat nulla molestias, commodi labore. Voluptatibus nihil aliquid vero!</p>
    <hr class="my-4">
    <p class="card-text">Réduction: 50%</p>
    <p class="card-text">Prix original: 10'&euro;</p>
    <h3>Prix avec réduction: 5&euro;</h3>
    <a class="btn btn-primary btn-lg" href="#" role="button">Editer mon Bon de réduction</a>
    <p>*fin de la promotion : 20/04/2030</p>
</div>

<!-- Jumbotron Seller +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="jumbotron col-12 col-md-6">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>


<?php
    $content = ob_get_clean();
    require('template.php');    
?>