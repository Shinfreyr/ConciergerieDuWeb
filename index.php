<?php

    //Session Start +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    session_start();

    //Require autoload ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    require_once __DIR__.'/vendor/autoload.php';

    //Rooter ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    try {
        $allUserController = new \Project\Controller\AllUserController();
        $userConnectController = new \Project\Controller\UserConnectController();
        
        //Control GET action and GET db +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        if(isset($_GET['action']) && isset($_GET['db'])) {
#AllUser    //Inscription Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'inscription' && $_GET['db'] === 'ok') {
                if(isset($_POST['enterpriseCode']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordComp']) && isset($_POST['birthDay']) && isset($_POST['birthMonth']) && isset($_POST['birthYear'])) {
                    if(isset($_POST['checkHuman'])) {
                        if($_POST['enterpriseCode'] !== '' && $_POST['lastName'] !== '' && $_POST['firstName'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['passwordComp'] !== '' && $_POST['checkHuman'] !== '' && $_POST['birthDay'] !== '' && $_POST['birthMonth'] !== '' && $_POST['birthYear'] !== '') {
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
            if($_GET['action'] === 'deconnection' && $_GET['session'] === "ok") {
                $userConnectController->deconnectionSession();
            }
            //Error +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            else {
                throw new Exception('Variable inattendu');    
            }
        }
        elseif(isset($_GET['action']) && isset($_GET['page'])) {
#AllUser    //Category View "Les Services" ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            if($_GET['action'] === 'category' && $_GET['page'] !== '') {
                $allUserController->category();
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
    