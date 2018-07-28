<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Article !"; ?>
<?php ob_start(); ?>

<!-- Jumbotron Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="row justify-content-center">    
    <div class="col-12">
        <h1 class="alert-heading blanc MgHtBs">Votre Offre Sélectionnée    <i class="fa fa-tag vuebutton"></i></h1>
        <div class="dropdown-divider Pttraitb" ></div> 
    </div>   
    <div class="col-12 margeshautetbas justify-content-center aligncard">
        <div class="col-12 justify-content-center"> <!-- bloc de gauche ++++++++++++++++++++++++++++ --> 
            <div class="jumbotron cadrecard">
                <!-- Name Article ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <h1 class="display-5"><?= htmlspecialchars($result['nomArticle']) ?></h1>

                <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#nomArticleModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier nom de l'article
                </button>
                <div class="collapse" id="nomArticleModification">
                    <div class="card card-body">
                        <form action="index.php?action=nameArticleAdmin&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" id="nameArticleForm" method="post">
                            <div class="form-group">
                                <label for="nameArticleAdmin">Modifier le nom de l'article</label>
                                <textarea class="form-control" name="nameArticleAdmin" id="nameArticleAdmin" rows="3"><?= htmlspecialchars($result['nomArticle']) ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </form>
                    </div>
                </div>
                
                <!-- Image Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                <img class="card-img-top btnArticleAdmin" src="src/Public/images/<?= htmlspecialchars($result['imageArticle']) ?>" alt="Card image cap">

                
                <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#imageModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier l'image
                </button>
                <div class="collapse" id="imageModification">
                    <div class="card card-body">
                        <form enctype="multipart/form-data" action="index.php?action=uploadImageArticle&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" method="post" class="col-12">
                            <fieldset>
                                <legend><h2>Image de L'article: <span class="infoImage"> (800x800 pixel & 1Mo maximum) </span></h2></legend>
                                <p>
                                    <label for="uploadFile" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
                                    <input name="file" type="file" id="uploadFile" />
                                    <input type="submit" class="btn btn-info" name="submit" value="Uploader" />
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <h2 class="display-5 btnArticleAdmin"><?= htmlspecialchars($result['nomArticle']) ?></h2>
                <p class="lead"><?= htmlspecialchars($result['descriptionArticle']) ?></p>

                <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#contentModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le contenu de l'annonce
                </button>
                <div class="collapse" id="contentModification">
                    <div class="card card-body">
                        <form action="index.php?action=contentArticleAdmin&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" id="contentArticleForm" method="post">
                            <div class="form-group">
                                <label for="contentArticleAdmin">Modifier le contenu de l'annonce</label>
                                <textarea class="form-control" name="contentArticleAdmin" id="contentArticleAdmin" rows="3"><?= htmlspecialchars($result['descriptionArticle']) ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </form>
                    </div>
                </div>

                <hr class="my-4">
                <p class="card-text btnArticleAdmin"><?= htmlspecialchars($result['reductionArticle']) ?>% <i class="fa fa-tag"></i></p>

                <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#reductionModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le pourcentage de la réduction
                </button>
                <div class="collapse" id="reductionModification">
                    <div class="card card-body">
                        <form action="index.php?action=reductionArticleAdmin&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" id="reductionArticleForm" method="post">
                            <div class="form-group">
                                <label for="reductionArticleAdmin">Modifier le pourcentage de réduction de l'article</label>
                                <textarea class="form-control" name="reductionArticleAdmin" id="reductionArticleAdmin" rows="3"><?= htmlspecialchars($result['reductionArticle']) ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </form>
                    </div>
                </div>

                <p class="card-text btnArticleAdmin">Prix original: <?= htmlspecialchars($result['originalPriceArticle']) ?>&euro;</p>

                <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#originalPriceModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le prix original
                </button>
                <div class="collapse" id="originalPriceModification">
                    <div class="card card-body">
                        <form action="index.php?action=originalPriceArticleAdmin&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" id="originalPriceArticleForm" method="post">
                            <div class="form-group">
                                <label for="originalPriceArticleAdmin">Modifier le prix original de l'article</label>
                                <textarea class="form-control" name="originalPriceArticleAdmin" id="originalPriceArticleAdmin" rows="3"><?= htmlspecialchars($result['originalPriceArticle']) ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </form>
                    </div>
                </div>

                <h2 class="btnArticleAdmin">Prix avec réduction: <?= htmlspecialchars($result['reductionPriceArticle']) ?>&euro;</h2>
                
                <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#priceReductionModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier le prix avec réduction
                </button>
                <div class="collapse" id="priceReductionModification">
                    <div class="card card-body">
                        <form action="index.php?action=priceWithReductionArticleAdmin&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" id="riceWithReductionArticleForm" method="post">
                            <div class="form-group">
                                <label for="priceWithReductionArticleAdmin">Modifier le prix avec réduction</label>
                                <textarea class="form-control" name="priceWithReductionArticleAdmin" id="priceWithReductionArticleAdmin" rows="3"><?= htmlspecialchars($result['reductionPriceArticle']) ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </form>
                    </div>
                </div>

                <p class="text-danger MgHt btnArticleAdmin">*fin de la promotion : <?= htmlspecialchars($result['endDateArticle']) ?></p>
                
                <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#endDateModification" aria-expanded="false" aria-controls="nomArticleExample">
                    Modifier la date de fin de promotion
                </button>
                <div class="collapse" id="endDateModification">
                    <div class="card card-body">
                        <form action="index.php?action=endDateArticleAdmin&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" id="endDateArticleAdminForm" method="post">
                            <div class="form-group">
                                <label for="endDateArticleAdmin">Modifier le prix avec réduction (aaaa-mm-jj)</label>
                                <textarea class="form-control" name="endDateArticleAdmin" id="endDateArticleAdmin" rows="3"><?= htmlspecialchars($result['endDateArticle']) ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </form>
                    </div>
                </div>

                <button class="btn btn-info col-12 validationArticle" type="button" data-toggle="collapse" data-target="#validationArticle" aria-expanded="false" aria-controls="nomArticleExample">
                    Valider la publication de l'article
                </button>
                <div class="collapse" id="validationArticle">
                    <div class="card card-body">
                        <form action="index.php?action=validationArticleAdmin&idArticle=<?= htmlspecialchars($result['idArticle']) ?>" id="validationArticleAdminForm" method="post">
                            <div class="form-group">
                                <label for="validationArticleAdmin">Choisissez une catégorie</label>
                                <select class="form-control" name="validationArticleAdmin" id="validationArticleAdmin">
                                    <?php
                                        while ($db1 = $requestCategory->fetch()) {
                                            echo '<option>'. htmlspecialchars($db1['nameCategory']) .'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">Envoyer</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>                
<!-- Jumbotron Seller +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<i class="fa fa fa-quote-left vuebutton"></i><i class="fa fa fa fa-quote-right vuebutton"></i> -->
        <div class="col-12"><!-- bloc de droite ++++++++++++++++++++++++++++ -->     
            <div class="jumbotron cadrecard">
                <h1 class="display-5"><?= htmlspecialchars($result['societyNameSeller']) ?></h1>
                <img class="card-img-top" src="src/Public/images/<?= htmlspecialchars($result['imageSeller']) ?>" alt="Card image cap">
                <p class="lead"><?= htmlspecialchars($result['descriptionSeller']) ?></p>
                <hr class="my-4">
                <p>Numéro de tel : <?= htmlspecialchars($result['staticPhoneSeller']) ?></p>
                <h3>Adresse : <?= htmlspecialchars($result['adressSeller']) ?> <?= htmlspecialchars($result['postalCodeSeller']) ?> <?= htmlspecialchars($result['citySeller']) ?></h3>
            </div>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require('template.php');    
?>