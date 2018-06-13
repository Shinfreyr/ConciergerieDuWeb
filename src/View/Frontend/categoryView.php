<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Les services !"; ?>
<?php ob_start(); ?>


<!-- Service Card ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<h1 class="alert-heading blanc MgHtBs">
    <?php
        if(isset($_GET['idSeller'])) {
            echo htmlspecialchars($resultSeller['societyNameSeller']);
        }
        else {
            echo htmlspecialchars($_GET['type']);
        }
    ?>
</h1>
    <div class="dropdown-divider Pttraitb" ></div> 
        <div class="row justify-content-center">
            <div class="card-deck col-sm-12 col-xl-10 justify-content-center">
                <?php
                    while ($db1 = $firstRequest->fetch()) {            
                        echo                
                            '<div class="card col-10">
                            <h1>Article :</h1><h5 class="card-title text-center">'.htmlspecialchars($db1['nomArticle']).'</h5>
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
                                    <a href="index.php?action=offre&idOffre='.htmlspecialchars($db1['idArticle']).'" class="btn btn-TywebButton ">Voir l\'article <i class="fa fa-search vuebutton"></i></a>
                                    <p>*fin de la promotion : '.htmlspecialchars($db1['endDateArticle']).'</p>
                                </div>
                            </div>';
                    }
                ?>
         </div>
   
                <div class="card-deck col-sm-12 col-xl-10 justify-content-center" >
                        <?php
                        while ($db2 = $secondRequest->fetch()) {            
                            echo                
                                '<div class="card col-10">
                                <h1>Article :</h1><h5 class="card-title text-center">'.htmlspecialchars($db1['nomArticle']).'</h5>
                                <img class="card-img-top" src="src/Public/images/'.htmlspecialchars($db2['imageArticle']).'" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">'.htmlspecialchars($db2['nomArticle']).'</h5>
                                        <p class="card-text">'.htmlspecialchars($db2['descriptionArticle']).'</p>
                                        <hr>
                                        <p class="card-text">Réduction: '.htmlspecialchars($db2['reductionArticle']).'%</p>
                                        <p class="card-text">Prix original: '.htmlspecialchars($db2['originalPriceArticle']).'&euro;</p>
                                        <h3>Prix avec réduction: '.htmlspecialchars($db2['reductionPriceArticle']).'&euro;</h3>
                                    </div>
                                    <div class="card-footer">
                                        <a href="index.php?action=offre&idOffre='.htmlspecialchars($db2['idArticle']).'" class="btn btn-TywebButton ">Voir l\'article <i class="fa fa-search vuebutton"></i></a>
                                        <p>*fin de la promotion : '.htmlspecialchars($db2['endDateArticle']).'</p>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
    </div>
</div>
<!-- Pagination ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center MgHt">
        <?php    
            if(isset($_GET['idSeller'])) {
                if($_GET['page']!=1) {    
                    echo '<li class="page-item"><a class="page-link btn btn-TywebButton" href="index.php?action=magazin&idSeller='.htmlspecialchars($idSeller).'&page='.htmlspecialchars($_GET['page']-1).'"><span aria-hidden="true">&laquo;</span>  Précédent</a></li>';
                }
                
                for ($i = 1 ; $i <= $numberPage ; $i++) {
                    echo '<li class="page-item"><a class="page-link btn btn-TywebButton" href="index.php?action=magazin&idSeller='.htmlspecialchars($idSeller).'&page='.htmlspecialchars($i).'">' . htmlspecialchars($i) . '</a></li>';
                }

                if($_GET['page']!=$numberPage) {
                    echo '<li class="page-item"><a class="page-link btn btn-TywebButton" href="index.php?action=magazin&idSeller='.htmlspecialchars($idSeller).'&page='.htmlspecialchars($_GET['page']+1).'">Suivant  <span aria-hidden="true">&raquo;</span></a></li>';
                } 
            }
            else {    
                if($_GET['page']!=1) {
                    echo '<li class="page-item"><a class="page-link btn btn-TywebButton" href="index.php?action=category&type='.htmlspecialchars($category).'&page='.htmlspecialchars($_GET['page']-1).'"><span aria-hidden="true">&laquo;</span>  Précédent</a></li>';
                }
                
                for ($i = 1 ; $i <= $numberPage ; $i++) {
                    echo '<li class="page-item"><a class="page-link btn btn-TywebButton" href="index.php?action=category&type='.htmlspecialchars($category).'&page='.htmlspecialchars($i).'">' . htmlspecialchars($i) . '</a></li>';
                }

                if($_GET['page']!=$numberPage) {
                    echo '<li class="page-item"><a class="page-link btn btn-TywebButton" href="index.php?action=category&type='.htmlspecialchars($category).'&page='.htmlspecialchars($_GET['page']+1).'">Suivant  <span aria-hidden="true">&raquo;</span></a></li>';
                }
            }
        ?>        
    </ul>
</nav>

<?php
    $content = ob_get_clean();
    require('template.php');    
?>
