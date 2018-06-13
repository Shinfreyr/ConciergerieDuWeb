<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Accueil !"; ?>
<?php ob_start(); ?>

<!-- <script src="src/Public/js/script.js"></script> -->

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="row" >
    <div class="alert welcome hauteurclass col-12 someClass parallax" id="up" role="alert"  style="background-image: url('src/Public/images/mains.jpg');">
        <h1 class=" MgHtBs">LA CONCIERGERIE DU WEB</h1>
        <div class="dropdown-divider Pttrait" ></div>    
            <div id="contImgTxt">
                <div class="element col-xl-11 offset-xl-1">
                    <p class="text-justify" >
                    <h2>Facilitateur de vie et d'envies</h2>Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
                    Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
                    Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
                    </p>
                </div>
                <div class="element">
                    <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="Responsive image">
                </div>     
            </div>
                <div class="element1">
                    <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="Responsive image">
                </div>     
    </div>

<!-- Service Card ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="col-12 justify-content-center">
        <h1 class="alert-heading blanc MgHtBs">Nos offres du jour</h1>
    </div>
    <div class="dropdown-divider Pttraitb" ></div>  
    <div class="row justify-content-center">

        <div class="card-deck col-sm-12 col-lg-10" >

            <?php
                while ($db1 = $request->fetch()) {
                    echo                
                        '<div class="card col-10">
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
                                <a href="index.php?action=offre&idOffre='.htmlspecialchars($db1['idArticle']).'" class="btn btn-TywebButton btn-lg btn-block">Voir l\'article <i class="fa fa-search vuebutton"></i></a>
                                <p>*fin de la promotion : '.htmlspecialchars($db1['endDateArticle']).'</p>
                            </div>
                        </div>';
                }

            ?>
        </div>

        <div class="card-deck col-sm-12 col-lg-10" >
            <?php
                while ($db2 = $secondRequest->fetch()) {
                    echo                
                        '<div class="card col-10">
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
                                <a href="index.php?action=offre&idOffre='.htmlspecialchars($db2['idArticle']).'" class="btn btn-TywebButton btn-lg btn-block">Voir l\'article <i class="fa fa-search vuebutton"></i></a>
                                <p>*fin de la promotion : '.htmlspecialchars($db2['endDateArticle']).'</p>
                            </div>
                        </div>';
                }

            ?>
        </div>
    </div>
</div>                                                      
<!-- formulaire de contact et nos coordonnées ++++++++++++++++++++++++++++ -->     
<div class="row someClasscont justify-content-center parallax MgHt" style="background-image: url('src/Public/images/bateaux.jpg');">       
    <div class="row margeshautetbas justify-content-center" >
          <div class="col-sm-10 col-xl-7 someClassgauche">  <!-- bloc de gauche ++++++++++++++++++++++++++++ -->                         
                <div ><!-- tite formulaire de contact ++++++++++++++++++++++++++++ -->   
                      <div class="titleprghp text-center">
                            <span class="blanc"><h5>Comment pouvons-nous vous aider ?</h5></span> 
                       </div>
                </div>
                <!-- debut du formulaire de contact form partie gauche ++++++++++++++++++++++++++++ -->  
                 <div class="col">
                       *Mentions obligatoires
                <!--<form class="form-horizontal" role="form">-->
                      <div class="form-group col">
                            <label for="societe" class="col-sm-2 control-label alignement">Société :</label>
                                  <div class="col-sm-11">
                                       <input type="text" class="form-control" placeholder="Ex: Action56" name="societe" id="societe">
                                  </div>
                            <label for="nom" class="col-sm-2 control-label alignement">Nom* :</label>
                                   <div class="col-sm-11">
                                      <input type="text" class="form-control" placeholder="Ex: Dupont" name="name" id="name" required>
                                      <span class=" alignement">Validation de votre saisie</span>
                                    </div>
                     </div>
                     <div class="form-group col" >
                           <label for="prenom" class="col-sm-2 control-label alignement">Prenom* :</label>
                                 <div class="col-sm-11">
                                      <input type="text" class="form-control" placeholder="Ex: Anne" name="prenom" id="prenom" required>
                                      <span class=" alignement">Validation de votre saisie</span>
                                 </div>
                     </div>                                  
                     <div class="form-group col">
                           <label for="email" class="col-sm-2 control-label alignement">Email* :</label>
                                 <div class="col-sm-11  has-success">
                                      <input type="email" class="form-control" placeholder="Ex: a.dupont@gmail.com" name="email" id="email" required />
                                      <span class=" alignement">Validation de votre saisie</span>
                                 </div>
                     </div>
                     <div class="form-group col">
                           <label for="telephone" class="col-sm-2 control-label alignement">T&eacute;l&eacute;phone :</label>
                                 <div class="col-sm-11">
                                       <input type="text" class="form-control" placeholder="Ex: 02.97.66.00.00" name="tel" id="tel" size="20" minlength="9" maxlength="14">
                                 </div>
                     </div>
                     <div class="form-group col">
                           <label for="services" class="col-sm-2 control-label alignement">Sélectionnez le thème de votre demandes* :</label>
                                 <div class="col-sm-11">
                                    <select class="form-control" required />
                                         <option value="" disabled selected>Choix</option>
                                         <option>Services Web</option>
                                         <option>Services Conciergerie</option>
                                         <option>Partenariat</option>
                                         <option>Contactez notre administrateur</option>
                                         <option>Autres</option>
                                    </select>
                                </div>
                    </div>
                    <div class="form-group col">
                         <label for="message" class="col-sm-2 control-label alignement">Message</label>
                              <div class="col-sm-11">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Laissez votre message" rows="4" required="required" data-error="Laissez votre message"></textarea>
                              </div>
                              <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col">
                         <label class="Ptpolice">Confirmez nous que vous n'êtes pas un robot svp *</label>
                         <div class="col-sm-4">
                               <label class="col-sm-3 control-label" id="captchaOperation">*</label>
                               <input type="text" class="form-control" name="captcha" required />
                         </div>
                    </div>
                    <div class="form-group col">
                          <div class="checkbox col-sm-11 alignement Ptpolice Ptpolice">
                               <label  for="RGPD">
                                   <input type="checkbox" name="agree" value="agree" required /> J'accepte les termes et les conditions*
                               </label>
                   <!-- Button fenêtre aperçu des conditions -->
                                <button type="button" class="btn btn-outline-secondary my-2 my-sm-0 taille13" data-toggle="modal" data-target="#exampleModalLong">
                            Aperçu des Conditions et modalités
                                </button><!-- Feuille des conditions -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Conditions et Modalités de TyWeb services La Conciergerie</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary BTN-XS" data-dismiss="modal">Fermer la fenêtre</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div><!-- fin de <div class="checkbox col-sm-11 alignement"> +++++++++++++++++++++++++++++++++++ -->
                    </div> <!-- fin de <div class="form-group col"> +++++++++++++++++++++++++++++++++++ -->
                    <div class="form-group text-center" id="validation_contact">
                        <button name="annuler" id="resetBtn" type="reset" value="reset" class="btn btn-TywebButtonW btn-xs">Annuler</button>
                        <button name="envoyer" id="validateBtn" type="submit" value="submit" class="btn btn-TywebButton btn-xs">Envoyez votre demande</button>
                    </div><!-- fin de <div class="form-group"> +++++++++++++++++++++++++++++++++ -->
                 </div> <!-- fin de  <div class="col-lg-12">+++++++++++++++-->   
            </div><!-- fin de <div class="offset-sm-1 col-5 someClassgauche"> bloc de gauche+++++++++++++++++++++++++++++++++++++++ -->
            <!-- <div class="col-1"><br> </div>  bloc de 1 colonne separation ++++++++++++++++++++++++++++ -->   
            <div class="col-sm-10 col-xl-5 someClassdroite" id="coordonnees"><!-- bloc de droite ++++++++++++++++++++++++++++ -->     
                <div class="col"><!--+++++++++++++++++++++++++++++++++++++debut du formulaire de contact form partie droite-->
                    <div class="titleprghp text-center">
                        <span class="blanc"><h5>Nos coordonnées</h5></span> 
                    </div>
                </div>
                <!--<div class="blochp_contact">-->
                <div class="col">
                    <div class="form-group text-center margeshautetbas">
                        <br><h1>Tyweb services</h1> 
                    <!-- <br><h4>16 rue victor Schoelcher -->
                        <h4>
                        <br>BP
                        <br>56890 Saint avé
                        <br>
                        <br>France-Tél : + 33 6 37 69 34 21
                        <br>
                        <br>contact@tywebservices.fr</h4>
                    </div>          
            <!-- la map et coordonnées <form class="form-horizontal" role="form">-->
                   
                            <div class="embed-responsive embed-responsive-16by9 MgHtBs">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1342.8371519239618!2d-2.739550191633932!3d47.69074484479758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101fb2ce4316e7%3A0x8f4b25780f647313!2sMairie!5e0!3m2!1sfr!2sfr!4v1528793078819" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>    
                            </div>
                
                </div><!-- fin de <div class="col"> +++++++++++++++++++++++++++ -->
           </div><!--+++++++++++++++++++++++++++++++++++++ fin du formulaire de contact form partie droite-->       
        </div><!-- <div class="col someClassvannes margeshautetbas" style="background-image: url('src/Public/test.jpg');" >++++++++++++++++++++++++++++ -->  
</div><!-- fin de <div class="row"> formulaire de contact et nos coordonnées  +++++++++++++++++++++++++++++++++++++++++++++++++ ->
<?php
    $content = ob_get_clean();
    require('template.php');    
?>





    
