<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Les services !"; ?>
<?php ob_start(); ?>

<!-- Service Card ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="card-deck">
    <?php
        while ($db1 = $firstRequest->fetch()) {            
            echo htmlspecialchars($db1['nomArticle']);
            /*echo                
                '<div class="card">
                    <img class="card-img-top" src="src/Public/images/'.htmlspecialchars($db1['imageArticle']).'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">'.htmlspecialchars($db1['nomArticle']).'</h5>
                        <p class="card-text">'.htmlspecialchars($db1['descriptionArticle']).'</p>
                        <hr>
                        <p class="card-text">Réduction: '.htmlspecialchars($db1['reductionArticle']).'%</p>
                        <p class="card-text">Prix original: '.htmlspecialchars($db1['originalPriceArticle']).'&euro;</p>
                        <h3>Prix avec réduction: '.htmlspecialchars($db1['reductionPriceArticle']).'&euro;</h3>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Voir l\'article</a>
                        <p>*fin de la promotion : '.htmlspecialchars($db1['endDateArticle']).'</p>
                    </div>
                </div>';*/
        }

    ?>
</div>

<!-- Pagination ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <?php    
            for ($i = 1 ; $i <= $numberPage ; $i++) {
                echo '<li class="page-item"><a class="page-link" href="index.php?action=category&type='.htmlspecialchars($category).'&page='.htmlspecialchars($i).'">' . htmlspecialchars($i) . '</a></li>';
            }
        ?>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>