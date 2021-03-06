<?php

    //Session Start +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    session_start();

    //Require autoload ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    require_once __DIR__.'/vendor/autoload.php';

    //Rooter ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    try {
        $allUserController = new \Project\Controller\AllUserController();
        $userConnectController = new \Project\Controller\UserConnectController();
        $adminController = new \Project\Controller\AdminController();
        
        //Control GET action, GET Type and GET page 
        if(isset($_GET['action']) && isset($_GET['type']) && isset($_GET['page'])) {
#AllUser    //Category View "Les Services" ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'category' && $_GET['type'] !== '' && $_GET['page'] !== '') {
                $allUserController->category();
            }
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }
        }
        //Control GET action, GET seller and GET page +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        elseif(isset($_GET['action']) && isset($_GET['idSeller']) && isset($_GET['page'])) {
#AllUser    //Magazin View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++            
            if($_GET['action'] === 'magazin' && $_GET['idSeller'] !== '' && $_GET['page'] !== '') {
                $allUserController->category();
            }
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }
        }
        //Control GET Action & IdArticle
        elseif(isset($_GET['action']) && isset($_GET['idArticle']) && isset($_GET['endDate'])) {
#UserCo     //Page Voucher View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'voucher' && $_GET['idArticle'] !== '' && $_GET['endDate'] !== '') {
                $userConnectController->voucherTarget();
            }
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }
        }
        //Control GET Action & IdArticle ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        elseif(isset($_GET['action']) && isset($_GET['idArticle']) && isset($_GET['codeVoucher'])) {
#UserCo     //Voucher Downloading +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'dlVoucher' && $_GET['idArticle'] != '' && $_GET['codeVoucher'] != '') {
                $userConnectController->dlVoucher();
            } 
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }          
        }
        //Control GET action and GET db +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        elseif(isset($_GET['action']) && isset($_GET['db'])) {
#AllUser    //Inscription Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'inscription' && $_GET['db'] === 'ok') {
                if(isset($_POST['enterpriseCode']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordComp']) && isset($_POST['birthDay']) && isset($_POST['birthMonth']) && isset($_POST['birthYear']) && isset($_POST['checkCondition'])) {
                    if(isset($_POST['checkHuman'])) {
                        if($_POST['enterpriseCode'] !== '' && $_POST['lastName'] !== '' && $_POST['firstName'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['passwordComp'] !== '' && $_POST['checkHuman'] !== '' && $_POST['birthDay'] !== '' && $_POST['birthMonth'] !== '' && $_POST['birthYear'] !== '' && $_POST['checkCondition'] !== '') {
                            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {  
                                if($_POST['password'] === $_POST['passwordComp']) {
                                    $uppercase = preg_match('@[A-Z]@', $_POST['password']);
                                    $lowercase = preg_match('@[a-z]@', $_POST['password']);
                                    $number    = preg_match('@[0-9]@', $_POST['password']);
                                    if($uppercase && $lowercase && $number && strlen($_POST['password']) >= 8) {   
                                        $day = preg_match('@[0-3][0-9]@', $_POST['birthDay']);
                                        $month = preg_match('@[0-1][0-9]@', $_POST['birthMonth']);
                                        $year = preg_match('@[1-2][0,9][0-9][0-9]@', $_POST['birthYear']);
                                        $now = getdate();
                                        $nowYear = $now['year'];
                                        if($day && $month && $year) {
                                            if($_POST['birthDay'] <= 31 && $_POST['birthDay'] > 0 && $_POST['birthMonth'] <= 12 && $_POST['birthMonth'] > 0 && ($nowYear - $_POST['birthYear']) >= 16 ) {
                                                $allUserController->inscriptionDb();
                                            }
                                            else {
                                                throw new Exception('Date de naissance non conforme');
                                            }
                                        }
                                        else {
                                            throw new Exception('Date de naissance non conforme');
                                        }
                                    }
                                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                    else {
                                        throw new Exception('Mot de passe non conforme');
                                    }
                                }                                
                                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                else {
                                    throw new Exception('Mot de passe non concordant');    
                                }
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Email non valide');
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Champs manquants');    
                        }
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Check Box non coché');    
                    }
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }
#AllUSer    //Connection Data Base ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'connection' && $_GET['db'] === 'ok') {
                if(isset($_POST['email']) && isset($_POST['password'])) {
                    if($_POST['email'] !== '' && $_POST['password'] !== '') {
                        $allUserController->connectionDB();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Champs manquants');
                    }
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');
                }
            }
#UserCo     //Mail Management Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'mailManagement' && $_GET['db'] === 'ok') {
                if(isset($_POST['email'])) {
                    if($_POST !== '') {
                        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $userConnectController->mailManagementDb();
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Email non valide');
                        }
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Champ non remplie');    
                    }
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }
#UserCo     //Password Management Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'passwordManagement' && $_GET['db'] === 'ok') {
                if(isset($_POST['oldPassword']) && isset($_POST['password']) && isset($_POST['passwordComp'])) {
                    if($_POST['oldPassword'] !== '' && $_POST['password'] !== '' && $_POST['passwordComp'] !== '') {
                        if($_POST['password'] === $_POST['passwordComp']) {
                            $uppercase = preg_match('@[A-Z]@', $_POST['password']);
                            $lowercase = preg_match('@[a-z]@', $_POST['password']);
                            $number    = preg_match('@[0-9]@', $_POST['password']);
                            if($uppercase && $lowercase && $number && strlen($_POST['password']) >= 8) {
                                $userConnectController->passwordManagementDb();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Mot de passe non conforme');
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Mot de passe non concordant');
                        }
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Champs manquants');    
                    }
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }
#UserCo     //Delet Accompt Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'deletAccount' && $_GET['db'] === 'ok') {
                if(isset($_POST['passwordDel'])) {
                    if($_POST['passwordDel'] !== '') {
                        $userConnectController->deletAccount();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Champ manquant'); 
                    }
                }
                //Error ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');
                }
            }                                 
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }
        }
        //Control GET Action & Session
        elseif(isset($_GET['action']) && isset($_GET['session'])) {
#UserCo     //Déconnection Session ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'deconnection' && $_GET['session'] === 'ok') {
                $userConnectController->deconnectionSession();
            }
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }
        }
        //Control GET Action & idOffre ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        elseif(isset($_GET['action']) && isset($_GET['idOffre'])) {
#AllUser    //Page Article Target View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'offre' && $_GET['idOffre'] !== '') {
                $allUserController->articleTarget();
            }
#BackAdmin  //Validation Article Target View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'adminArticleView' && $_GET['idOffre'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        $adminController->adminValidationTargetArticle();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                } 
            }          
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }          
        }
        //Control GET Action & idVoucher ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        elseif(isset($_GET['action']) && isset($_GET['idVoucher'])) {
#UserCo     //Supress Target Voucher ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'supressVoucher' && $_GET['idVoucher'] !== '') {
                $userConnectController->supressTargetVoucher();
            }
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }  
        }
        //Control GET Action & idArticle ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        elseif(isset($_GET['action']) && isset($_GET['idArticle'])) {
#BackAdmin  //Change Article Name +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'nameArticleAdmin' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        if(isset($_POST['nameArticleAdmin'])) {
                            if($_POST['nameArticleAdmin'] != '') {
                                $adminController->nameArticleAdmin();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Champs manquants');    
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Variable inattendu'); 
                        }      
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }  
            }
#BackAdmin  //Change Article Image ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'uploadImageArticle' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        $adminController->uploadImageArticle();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                } 
            }
#BackAdmin  //Change Content Article ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'contentArticleAdmin' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        if(isset($_POST['contentArticleAdmin'])) {
                            if($_POST['contentArticleAdmin'] != '') {
                                $adminController->contentArticleAdmin();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Champs manquants');    
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Variable inattendu'); 
                        }      
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }
#BackAdmin  //Change Reduction Article ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'reductionArticleAdmin' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        if(isset($_POST['reductionArticleAdmin'])) {
                            if($_POST['reductionArticleAdmin'] != '') {
                                $adminController->reductionArticleAdmin();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Champs manquants');    
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Variable inattendu'); 
                        }      
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }
#BackAdmin  //Change Original Price +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'originalPriceArticleAdmin' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        if(isset($_POST['originalPriceArticleAdmin'])) {
                            if($_POST['originalPriceArticleAdmin'] != '') {
                                $adminController->originalPriceArticleAdmin();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Champs manquants');    
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Variable inattendu'); 
                        }      
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            } 
#BackAdmin  //Change Price with Reduction +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'priceWithReductionArticleAdmin' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        if(isset($_POST['priceWithReductionArticleAdmin'])) {
                            if($_POST['priceWithReductionArticleAdmin'] != '') {
                                $adminController->priceWithReductionArticleAdmin();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Champs manquants');    
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Variable inattendu'); 
                        }      
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }
#BackAdmin  //Change End Promotion Date +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'endDateArticleAdmin' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        if(isset($_POST['endDateArticleAdmin'])) {
                            if($_POST['endDateArticleAdmin'] != '') {
                                $adminController->endDateArticleAdmin();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Champs manquants');    
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Variable inattendu'); 
                        }      
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }  
#BackAdmin  //Validation Article ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'validationArticleAdmin' && $_GET['idArticle'] != '') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        if(isset($_POST['validationArticleAdmin'])) {
                            if($_POST['validationArticleAdmin'] != '') {
                                $adminController->validationArticleAdmin();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Champs manquants');    
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Variable inattendu'); 
                        }      
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }
            }                    
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }  
        }       
        //Control GET Action ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        elseif(isset($_GET['action'])) {
#AllUser    //Inscription View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++            
            if($_GET['action'] === 'inscription') {
                $allUserController->inscription();
            }
#AllUser    //Connection View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'connection') {
                $allUserController->connection();
            }
#UserCo     //Account Management View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'accountManagement') {
                $userConnectController->accountManagement();
            } 
#UserCo     //All Account Voucher +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'allAccountVoucher') {
                $userConnectController->allAccountVoucher();
            }
#AllUser    //Contact Mail To +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'mail') {
                if(isset($_POST['societe']) && isset($_POST['name']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['services']) && isset($_POST['message']) && isset($_POST['captcha']) && isset($_POST['agree'])) {
                    if($_POST['name'] != '' && $_POST['prenom'] != '' && $_POST['email'] != '' && $_POST['services'] != '' && $_POST['message'] != '' && $_POST['captcha'] != '' && $_POST['agree'] != '') {
                        $reponse = preg_match('@oui@i', $_POST['captcha']);
                        if($reponse) {
                            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                $allUserController->contactMailTo();
                            }
                            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                            else {
                                throw new Exception('Email non valide');
                            }
                        }
                        //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                        else {
                            throw new Exception('Capcha non valide');
                        }
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Champ manquant'); 
                    }
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }   
            }
#AllUser    //Help VIP ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'helpVIP') {
                $allUserController->helpVip();
            }
#AllUser    //Search Bar ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'search') {
                if(isset($_POST['search'])) {
                    if($_POST['search'] != '') {
                        $allUserController->search();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Champ manquant'); 
                    }                    
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }                
            }
#BackAdmin  //Admin Panel View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'backendAdmin') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        $adminController->backendAdmin();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }  
            }
#BackAdmin  //Validation Article View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'adminValidationArticle') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        $adminController->adminValidationArticle();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                }  
            }
#BackAdmin  //Light Article View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            elseif($_GET['action'] === 'lightArticle') {
                if(isset($_SESSION['conciergerieDuWebStatus'])) {
                    if($_SESSION['conciergerieDuWebStatus'] === 'Admin' || $_SESSION['conciergerieDuWebStatus'] === 'AdminSU') {
                        $adminController->adminLightArticle();
                    }
                    //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    else {
                        throw new Exception('Variable inattendu'); 
                    }  
                }
                //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                else {
                    throw new Exception('Variable inattendu');    
                } 
            }                  
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }
        }
        else {
#AllUser    //Index View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++        
            $allUserController->index();
        }
    }

    //If error, echo message and index return
    catch(Exception $e) {
        echo '<h3 class="error">Erreur : '. $e->getMessage() .'</h3>';
        $allUserController->index();
    }
    