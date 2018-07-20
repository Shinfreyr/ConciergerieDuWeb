<?php
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Controller;
    
    //Object ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class AdminController {

        //Admin Panel View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function backendAdmin() {
            $articleManager = new \Project\Model\ArticleManager();
            $request = $articleManager->articleRoughCount();
            $result = $request->fetch();

            $voucherManager = new \Project\Model\VoucherManager();
            $request = $voucherManager->voucherCount();
            $result1 = $request->fetch();

            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->accountUserCount();
            $result2 = $request->fetch();

            $sellerManager = new \Project\Model\SellerManager();
            $request = $sellerManager->sellerCount();
            $result3 = $request->fetch();

            $enterpriseManager = new \Project\Model\EnterpriseManager();
            $request = $enterpriseManager->enterpriseCount();
            $result4 = $request->fetch();
            
            require('src/View/backend/adminPanelView.php');
        }

        //Validation Article View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function adminValidationArticle() {
            $articleManager = new \Project\Model\ArticleManager();
            $request = $articleManager->articleRoughCount();
            $result = $request->fetch();

            $articleManager = new \Project\Model\ArticleMAnager();
            $request = $articleManager->articleRoughRequest();

            require('src/View/backend/validationArticleView.php');
        }

        //Validation Article Target View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function adminValidationTargetArticle() {
            $idArticle = htmlspecialchars($_GET['idOffre']);

            $categoryManager = new \Project\Model\CategoryManager();
            $thirdRequest = $categoryManager->categoryRequest();

            $articleManager = new \Project\Model\ArticleManager();
            $request = $articleManager->articleTargetRequest($idArticle);

            $result = $request->fetch();

            require('src/View/backend/validationArticleTargetView.php');
        }

        //Modification Article Name ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function nameArticleAdmin() {
            $idArticle = htmlspecialchars($_GET['idArticle']);
            $nameArticle = htmlspecialchars($_POST['nameArticleAdmin']);

            $articleManager = new \Project\Model\ArticleManager();
            $articleManager->nameArticleAdminDb($nameArticle,$idArticle);

            $adminController = new \Project\Controller\AdminController();
            $adminController->adminValidationArticle();
        }

        //Modification Article Image +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function uploadImageArticle() {
            /************************************************************
             * Setup
             *************************************************************/
            
            define('TARGET', 'src/Public/images/');    // Target Folder
            define('MAX_SIZE', 1000000);    // Max Weight Files (octet)
            define('WIDTH_MAX', 800);    // Max Width Image (pix)
            define('HEIGHT_MAX', 800);    // Max Height Image (pix)
            
            // Data Table
            $tabExt = array('jpg','gif','png','jpeg');    // Authorized extension
            $infosImg = array();
            
            // Variables
            $extension = '';
            $message = '';
            $nameImage = '';
            $id = htmlspecialchars($_GET['idArticle']);

            /************************************************************
             * New Folder if doesn't exist
             *************************************************************/
            if( !is_dir(TARGET) ) {
                if( !mkdir(TARGET, 0755) ) {
                    echo '<h3 class="error">Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !</h3>';
                }
            }
            
            /************************************************************
             * Upload Script
             *************************************************************/
            // Verify Field
            if(!empty($_POST)){
                if( !empty($_FILES['file']['name'])){                
                    $extension  = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);        
                    
                    if(in_array(strtolower($extension),$tabExt)){
                        $infosImg = getimagesize($_FILES['file']['tmp_name']);        
                        
                        if($infosImg[2] >= 1 && $infosImg[2] <= 14){
                            if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['file']['tmp_name']) <= MAX_SIZE)){
                                if(isset($_FILES['file']['error']) && UPLOAD_ERR_OK === $_FILES['file']['error']){
                                    $nameImage = md5(uniqid()) .'.'. $extension;        
                                    
                                    if(move_uploaded_file($_FILES['file']['tmp_name'], TARGET.$nameImage)){
                                        $message = 'Upload réussi !';
                                        $articleManager = new \Project\Model\ArticleManager;
                                        $request = $articleManager->updateArticleImage($nameImage,$id);
                                    }
                                    else{
                                        echo '<h3 class="error">Problème lors de l\'upload !</h3>';
                                        $adminController = new \Project\Controller\AdminController();
                                        $adminController->adminValidationArticle();
                                    }
                                }
                                else{
                                    echo '<h3 class="error">Une erreur interne a empêché l\'uplaod de l\'image</h3>';
                                    $adminController = new \Project\Controller\AdminController();
                                    $adminController->adminValidationArticle();
                                }
                            }
                            else{
                                echo '<h3 class="error">Erreur dans les dimensions de l\'image !</h3>';
                                $adminController = new \Project\Controller\AdminController();
                                $adminController->adminValidationArticle();
                            }
                        }
                        else{
                            echo '<h3 class="error">Le fichier à uploader n\'est pas une image !</h3>';
                            $adminController = new \Project\Controller\AdminController();
                            $adminController->adminValidationArticle();
                        }
                    }
                    else{
                        echo '<h3 class="error">L\'extension du fichier est incorrecte !</h3>';
                        $adminController = new \Project\Controller\AdminController();
                        $adminController->adminValidationArticle();
                    }
                }
                else{
                    echo '<h3 class="error">Veuillez remplir le formulaire svp !</h3>';
                    $adminController = new \Project\Controller\AdminController();
                    $adminController->adminValidationArticle();
                }
            }     
            
            $adminController = new \Project\Controller\AdminController();
            $adminController->adminValidationArticle();           
        
        }

        //Modification Content Article +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function contentArticleAdmin() {
            $idArticle = htmlspecialchars($_GET['idArticle']);
            $contentArticle = htmlspecialchars($_POST['contentArticleAdmin']);
            
            $articleManager = new \Project\Model\ArticleManager();
            $articleManager->contentArticleAdminDb($contentArticle,$idArticle);

            $adminController = new \Project\Controller\AdminController();
            $adminController->adminValidationArticle();
        }

        //Modification Reduction Article ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function reductionArticleAdmin() {
            $idArticle = htmlspecialchars($_GET['idArticle']);
            $reductionArticle = htmlspecialchars($_POST['reductionArticleAdmin']);

            $articleManager = new \Project\Model\ArticleManager();
            $articleManager->reductionArticleAdminDb($reductionArticle,$idArticle);

            $adminController = new \Project\Controller\AdminController();
            $adminController->adminValidationArticle();
        }

        //Modification Original Price +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function originalPriceArticleAdmin() {
            $idArticle = htmlspecialchars($_GET['idArticle']);
            $originalPriceArticle = htmlspecialchars($_POST['originalPriceArticleAdmin']);

            $articleManager = new \Project\Model\ArticleManager();
            $articleManager->originalPriceArticleAdminDb($originalPriceArticle,$idArticle);

            $adminController = new \Project\Controller\AdminController();
            $adminController->adminValidationArticle();

        }
    }