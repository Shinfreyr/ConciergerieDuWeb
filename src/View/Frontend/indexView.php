<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Accueil !"; ?>
<?php ob_start(); ?>

<!-- <script src="src/Public/js/script.js"></script> -->

<!-- Welcome message +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div  style=" background-image: linear-gradient(to right bottom, #1c1918, #1c1918, #1c1918, #37669f, #0c4c8c);">
<div class="alert welcome hauteurclass col-12 someClass parallax" id="up" role="alert"  style="background-image: url('src/Public/images/mains.jpg');">
        <h1 class=" MgHtBs blanc">La Conciergerie du Web</h1>
        <div id="contImgTxt">
            <div class="element offset-xl-1">
                <p class="text-justify blanc" >Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
                Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
                Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
                </p>
            </div>
            <div class="element">
                <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-thumbnail rounded mx-auto d-block" alt="Responsive image">
            </div>     
            </div>
            <div class="element1">
                <img src="src/Public/images/cartevip.png" alt="Accès membre VIP la conciergerie du web" class="img-thumbnail rounded mx-auto d-block" alt="Responsive image">
            </div>     
</div>

<!-- Service Card ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="row justify-content-center"><h1 class="alert-heading ">Nos offres du jour</h1></div>
<div col-12>
<div class="card-deck col-10 text-center" >

    <?php
        while ($db1 = $request->fetch()) {
            echo                
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
                        <a href="index.php?action=offre&idOffre='.htmlspecialchars($db1['idArticle']).'" class="btn btn-primary">Voir l\'article</a>
                        <p>*fin de la promotion : '.htmlspecialchars($db1['endDateArticle']).'</p>
                    </div>
                </div>';
        }

    ?>
</div>

<div class="card-deck col-10 text-center" >
    <?php
        while ($db2 = $secondRequest->fetch()) {
            echo                
                '<div class="card">
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
                        <a href="index.php?action=offre&idOffre='.htmlspecialchars($db2['idArticle']).'" class="btn btn-primary">Voir l\'article</a>
                        <p>*fin de la promotion : '.htmlspecialchars($db2['endDateArticle']).'</p>
                    </div>
                </div>';
        }

    ?>
</div>
</div>
                                                       
<!-- formulaire de contact et nos coordonnées ++++++++++++++++++++++++++++ -->            
<div class="row someClassvannes margeshautetbas" style="background-image: url('src/Public/test.jpg');" >
          <div class="col-xs-12 col-sm-6 col-lg-5 offset-md-1 someClassgauche">
                                             
<!-- tite formulaire de contact ++++++++++++++++++++++++++++ -->   
            <div class="col-lg-12">
                 <div class="titleprghp text-center">
                  <span class="prg"><h5>Comment pouvons-nous vous aider ?</h5></span> 
                 </div>
           </div>
           <!-- debut du formulaire de contact form partie gauche ++++++++++++++++++++++++++++ -->  
           <div class="col-lg-12">
               *Mentions oblligatoires
            <!--<form class="form-horizontal" role="form">-->
                <div class="form-group">
                <label for="nom" class="col-sm-2 control-label alignement">Société :</label>
                        <div class="col-sm-11">
                           <input type="text" class="form-control" placeholder="Ex: Action56" name="societe" id="societe">
                        </div>
                    <label for="nom" class="col-sm-2 control-label alignement">Nom* :</label>
                        <div class="col-sm-11">
                           <input type="text" class="form-control" placeholder="Ex: Dupont" name="name" id="name" required>
                        </div>
                </div>
                <div class="form-group" >
                    <label for="prenom" class="col-sm-2 control-label alignement">Prenom* :</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" placeholder="Ex: Anne" name="prenom" id="prenom" required>
                        </div>
               </div>                                  
               <div class="form-group">
                   <label for="mail" class="col-sm-2 control-label alignement">Email* :</label>
                      <div class="col-sm-11  has-success">
                           <input type="email" class="form-control" placeholder="Ex: a.dupont@gmail.com" name="email" id="email" required />
                      </div>
               </div>
               <div class="form-group">
                    <label for="telephone" class="col-sm-2 control-label alignement">T&eacute;l&eacute;phone* :</label>
                      <div class="col-sm-11">
                          <input type="text" class="form-control" placeholder="Ex: 02.97.66.00.00" name="tel" id="tel" size="20" minlength="9" maxlength="14" required >
                      </div>
               </div>
               <div class="form-group">
                    <label for="services" class="col-sm-2 control-label alignement">Sélectionnez le thème de votre demande :</label>
                      <div class="col-sm-11">
                           <select class="form-control" required>
                                <option value="" disabled selected>Choix</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>Autres</option>
                           </select>
                      </div>
               </div>
                <div class="form-group">
                     <label for="message" class="col-sm-2 control-label alignement">Message</label>
                     <div class="col-sm-11">
                            <textarea id="form_message" name="message" class="form-control" placeholder="Laissez votre message" rows="4" required="required"
                                data-error="Laissez votre message"></textarea>
                     </div>
                      <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                <label class=" alignement">Confirmez nous que vous n'ëtes pas un robot svp *</label>
                        <label class="col-sm-3 control-label" id="captchaOperation">*</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha" required />
                        </div>
                    </div>
                <div class="form-group">
                            <div class="checkbox col-sm-11 alignement">
                                <label  for="RGPD">
                                    <input type="checkbox" name="agree" value="agree" required /> J'accepte les termes et les conditions*
                                </label>
                            </div>
                    </div>
                <div class="form-group">
                       <div class="boutton col-lg-12 col-md-12 col-xs-12">
                            <div class="text-center">
                                <button name="submit" id="cancel" type="reset" value="reset" class="btn btn-outline-secondary my-2 my-sm-0 taille13">Annuler</button>
                        
                                <button name="submit" id="submit" type="submit" value="submit" class="btn btn-outline-secondary my-2 my-sm-0 taille13">Envoyez votre demande<span class="glyphicon glyphicon-chevron-right"></span></button>
                            </div>  
                     </div><!--+++++++++++++++++++++++++++++++++++++</div> -->
                </div><!--+++++++++++++++++++++++++++++++++++++ fin div row -->

             </div> <!--+++++++++++++++++++++++++++++++++++++</form> </div du formulaire de contact form-->
          </div> <!--+++++++++++++++++++++++++++++++++++++ fin du formulaire de contact form partie gauche-->
         <div class="col-xs-12"><br> </div>
          <div class="col-xs-12 col-sm-5 offset-sm-1 col-md-3  offset-md-1 col-lg-4 offset-lg-1 someClassdroite"><!--+++++++++++++++++++++++++++++++++++++debut du formulaire de contact form partie droite-->
            <div class="col-lg-12">
                <div class="titleprghp text-center">
                    <span class="prg"><h5>Nos coordonnées</h5></span> 
                </div>
            </div>
            <!--<div class="blochp_contact">-->
            <div class="col-lg-12">
               
                <div class="form-group text-center margeshautetbas">
                    <br><h1>Tyweb services</h1> 
                   <!-- <br><h4>16 rue victor Schoelcher -->
                    <br><h4>56890 Saint avé
                    <br>France-Tél : + 33 6 37 69 34 21
                    <br>contact@tywebservices.fr</h4>
               </div>          
               <!-- la map et coordonnées <form class="form-horizontal" role="form">-->
               <div class="form-group">
              
                      <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85925.17089422251!2d-2.8132461345629993!3d47.70070024050662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101e4c25b592bf%3A0xdc6d0d2d21dc309!2s56890+Saint-Av%C3%A9!5e0!3m2!1sfr!2sfr!4v1527593624396" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>      
                     </div>
               </div>
           </div><!--+++++++++++++++++++++++++++++++++++++ fin du formulaire de contact form partie droite-->
        </div>
    </div><!-- formulaire de contact et nos coordonnées ++++++++++++++++++++++++++++ -->  

<?php
    $content = ob_get_clean();
    require('template.php');    
?>





    
