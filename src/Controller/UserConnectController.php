<?php
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Controller;
    
    //Object ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class UserConnectController {
        
        //Account Management View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function accountManagement() {
            $accountId = htmlspecialchars($_SESSION['conciergerieDuWebId']);

            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->accountManagemntRequest($accountId);

            $result = $request->fetch();

            $categoryManager = new \Project\Model\CategoryManager();
            $thirdRequest = $categoryManager->categoryRequest();

            require('src/View/frontend/accountManagementView.php');
        }

        //Mail Management Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function mailManagementDb() {
            $email = htmlspecialchars($_POST['email']);
            $idAccount = htmlspecialchars($_SESSION['conciergerieDuWebId']);

            //Email existing Control ++++++++++++++++++++++++++++++++++++
            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->controlInscription($email);

            $result = $request->fetch();
            //If email already exist do exception +++++++++++++++++++++++
            if($result['mailAccount'] === $email){
                echo '<h3 class="error">Erreur : Email déja existant </h3>';
                $userConnectController = new \Project\Controller\UserConnectController();
                $userConnectController->accountManagement();
            }
            //Mail Insert ++++++++++++++++++++++++++++++++++++++++++++++
            else {
                $accountManager = new \Project\Model\AccountManager();
                $accountManager->mailInsert($email,$idAccount);

                //Control Insert +++++++++++++++++++++++++++++++++++++++
                $accountManager = new \Project\Model\AccountManager();
                $request = $accountManager->mailInsertControl($email);

                $result = $request->fetch();
                //If email match do success +++++++++++++++++++++++++++
                if(isset($result['mailAccount'])) {
                    session_destroy();
                    header("Refresh:0; index.php");
                }
                //Else don't match do Error +++++++++++++++++++++++++++
                else {
                    echo '<h3 class="error">Erreur : Problème lors de la modification du mail, veuillez réessayer ultérieurement ! </h3>';
                    $userConnectController = new \Project\Controller\UserConnectController();
                    $userConnectController->accountManagement();
                }
            }
        }

        //Password Management Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function passwordManagementDb() {
            $oldPassword = htmlspecialchars($_POST['oldPassword']);
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $idAccount = htmlspecialchars($_SESSION['conciergerieDuWebId']);

            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->controlMailManagement($idAccount);

            $result = $request->fetch();
           
            $resultVerify = password_verify($oldPassword,$result['passwordAccount']);
            //If password verify true do success +++++++++++++++++++++
            if($resultVerify) {
                $accountManager = new \Project\Model\AccountManager();
                $accountManager->passwordInsert($password,$idAccount);

                session_destroy();
                header("Refresh:0; index.php");

            }
            //Else password verify false do Error ++++++++++++++++++++
            else {
                echo '<h3 class="error">Erreur : Mot de passe incorecte </h3>';
                $userConnectController = new \Project\Controller\UserConnectController();
                $userConnectController->accountManagement();
            }
        }

        //Delet Account +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function deletAccount() {
            $passwordDel = htmlspecialchars($_POST['passwordDel']);
            $idAccount = htmlspecialchars($_SESSION['conciergerieDuWebId']);

            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->controlMailManagement($idAccount);

            $result = $request->fetch();
           
            $resultVerify = password_verify($passwordDel,$result['passwordAccount']);
            //If password verify true do success +++++++++++++++++++++
            if($resultVerify) {
                $linkedManager = new \Project\Model\LinkedManager();
                $linkedManager->supressLink($idAccount);
                
                $accountManager = new \Project\Model\AccountManager();
                $accountManager->supressAccount($idAccount);

                session_destroy();
                header("Refresh:0; index.php");

            }
            //Else password verify false do Error ++++++++++++++++++++
            else {
                echo '<h3 class="error">Erreur : Mot de passe incorecte </h3>';
                $userConnectController = new \Project\Controller\UserConnectController();
                $userConnectController->accountManagement();
            }
        }

        //Unique Voucher Creation +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function voucherTarget() {
            $categoryManager = new \Project\Model\CategoryManager();
            $thirdRequest = $categoryManager->categoryRequest();
            
            
            require('src/View/frontend/voucherView.php');
        }

        //Deconnection Session ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function deconnectionSession() {
            session_destroy();
            header("Refresh:0; index.php");
        }
    }