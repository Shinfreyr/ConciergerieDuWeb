<?php
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Controller;
    
    //Object ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class AllUserController {
        
        //Index View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function index() {
            $articleManager = new \Project\Model\ArticleManager();
            $request = $articleManager->articleOnLight();
            $secondRequest = $articleManager->articleOnLightSecond();
            
            require('src/view/frontend/indexView.php');
        }

        //Inscription View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function inscription() {
            require('src/view/frontend/inscriptionView.php');
        }

        //Inscription View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function connection() {
            require('src/view/frontend/connectionView.php');
        }

        //Inscription Data Base +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function inscriptionDb() {
            $enterpriseCode = htmlspecialchars($_POST['enterpriseCode']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $firstName = htmlspecialchars($_POST['firstName']);            
            $email = htmlspecialchars($_POST['email']);
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $birthDay = htmlspecialchars($_POST['birthDay']);
            $birthMonth = htmlspecialchars($_POST['birthMonth']);
            $birthYear = htmlspecialchars($_POST['birthYear']);           
            $birthDate = $birthYear.'-'.$birthMonth.'-'.$birthDay;
            
            //Email existing Control ++++++++++++++++++++++++++++++++++++
            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->controlInscription($email);

            $result = $request->fetch();
            //If email already exist do exception +++++++++++++++++++++++
            if($result['mailAccount'] === $email){
                echo '<h3 class="error">Erreur : Email déja existant </h3>';
                $allUserController= new \Project\Controller\AllUserController();
                $allUserController->inscription();
            }        
            //Enterprise Code exist and activate control +++++++++++++++++
            else {
                //Email existing Control ++++++++++++++++++++++++++++++++++++
                $accountManager = new \Project\Model\AccountManager();
                $request = $accountManager->controlInscriptionName($lastName,$firstName,$birthDate);

                $result = $request->fetch();
                if($result['lastNameAccount'] === $lastName) {
                    echo '<h3 class="error">Erreur : Compte déja existant </h3>';
                    $allUserController= new \Project\Controller\AllUserController();
                    $allUserController->inscription();
                }
                else {   
                    $enterpriseManager = new \Project\Model\EnterpriseManager();
                    $request = $enterpriseManager->controlEnterpriseCode($enterpriseCode);

                    $result = $request->fetch();
                    //If Enterprise Code existing and validate inscription +++
                    if($result['codeEnterprise'] === $enterpriseCode) {
                        $idEnterprise = htmlspecialchars($result['idEnterprise']);

                        $accountManager = new \Project\Model\AccountManager();
                        $request = $accountManager->postInscriptionDb($lastName,$firstName,$email,$password,$birthDate);

                        $accountManager = new \Project\Model\AccountManager();
                        $request = $accountManager->controlInscriptionDb($email);
                        
                        $result = $request->fetch();
                        //If account exist in Data Base go injection in Linked
                        if($result['idAccount']) {
                            $idAccount = htmlspecialchars($result['idAccount']);

                            $linkedManager = new \Project\Model\LinkedManager();
                            $linkedManager->linkAccountEnterprise($idAccount,$idEnterprise);
                            
                            echo '<h3 class="validation">Validation : Votre inscription a réussi </h3>';
                            $allUserController= new \Project\Controller\AllUserController();
                            $allUserController->index();
                        }
                        //Else account wasn't inject +++++++++++++++++++++++++
                        else {
                            echo '<h3 class="error">Erreur : Le compte n\'a pas été enregistré </h3>';
                            $allUserController= new \Project\Controller\AllUserController();
                            $allUserController->inscription();
                        }                    
                    }
                    //Else Enterprise Code not exist or enterprise not subscription
                    else {
                        echo '<h3 class="error">Erreur : code invalide ou périmé </h3>';
                        $allUserController= new \Project\Controller\AllUserController();
                        $allUserController->inscription();
                    }
                }
            }
        }

        //Connection Data Base ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function connectionDb() {
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->connectionControl($email);

            $result = $request->fetch();

            // Control status +++++++++++++++++++++++++++++++++++++++++++
            if(!$result['statusAccount'] || $result['statusAccount'] === "Bann") {
                echo '<h3 class="error">Erreur : Le compte que vous cherchez à connecter n\'existe pas ou est banni </h3>';
                    $allUserController= new \Project\Controller\AllUserController();
                    $allUserController->connection();
            }
            else {
                // Password Verify ++++++++++++++++++++++++++++++++++++
                $resultVerify = password_verify($password,$result['passwordAccount']);

                // Connection and Session ++++++++++++++++++++++++++++++++
                if($resultVerify) {
                    $accountManager = new \Project\Model\AccountManager();
                    $request = $accountManager->connectionDbSession($email);

                    $result = $request->fetch();

                    $_SESSION['conciergerieDuWebId'] = $result['idAccount'];
                    $_SESSION['conciergerieDUWebLastName'] = $result['lastNameAccount'];
                    $_SESSION['conciergerieDuWebFirstName'] = $result['firstNameAccount'];
                    $_SESSION['conciergerieDuWebStatus'] = $result['statusAccount'];

                    header("Refresh:0; index.php");
                }
                // Error +++++++++++++++++++++++++++++++++++++++++++++
                else {
                    echo '<h3 class="error">Erreur : Mot de passe incorect </h3>';
                    $allUserController= new \Project\Controller\AllUserController();
                    $allUserController->connection();
                }
            }
        }
        

    }