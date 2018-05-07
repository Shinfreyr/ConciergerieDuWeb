<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class AccountManager extends Manager {
        
        //Account Control ++++++++++++++++++++++++++++++++++++++++++++++
        function controlInscription($email) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Email recuperation 
            $request = $db->prepare('SELECT mailAccount FROM accounts WHERE mailAccount=?');
            $request -> execute(array($email));
            
            return $request;
        }

        //Account Control Name + BirthDate +++++++++++++++++++++++++++++
        function controlInscriptionName($lastName,$firstName,$birthDate) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Name + BirthDate recuperation 
            $request = $db->prepare('SELECT lastNameAccount FROM accounts WHERE lastNameAccount=? AND firstNameAccount=? AND birthdayAccount=?');
            $request -> execute(array($lastName,$firstName,$birthDate));
            
            return $request;
        }

        //Account Connection Control +++++++++++++++++++++++++++++++++++
        function connectionControl($email) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Pass and Status recuperation 
            $request = $db->prepare('SELECT passwordAccount, statusAccount FROM accounts WHERE mailAccount=?');
            $request -> execute(array($email));

            return $request;
        }

        //Account Inscription Control ++++++++++++++++++++++++++++++++++
        function controlInscriptionDb($email) {
            // Data Base Connection
            $db=$this->dbConnect();
            // ID recuperation 
            $request = $db->prepare('SELECT idAccount FROM accounts WHERE mailAccount=?');
            $request -> execute(array($email));
            
            return $request;
        }

        //Account Inscription ++++++++++++++++++++++++++++++++++++++++++
        function postInscriptionDb($lastName,$firstName,$email,$password,$birthDate) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account Insert 
            $request = $db->prepare('INSERT INTO accounts (passwordAccount, dateAccount, avatarAccount, statusAccount, lastNameAccount, firstNameAccount, mailAccount, birthdayAccount) VALUES (?, NOW(), ?, ?, ?, ?, ?, ?)');
            $request -> execute(array($password, "defautUser.jpg", "User", $lastName, $firstName, $email, $birthDate));          
        }

        //Account Connection ++++++++++++++++++++++++++++++++++++++++++
        function connectionDbSession($email) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account recuperation 
            $request = $db->prepare('SELECT idAccount, passwordAccount, dateAccount, avatarAccount, statusAccount, lastNameAccount, firstNameAccount, mailAccount FROM accounts WHERE mailAccount=?');
            $request -> execute(array($email));
            
            return $request;
        }

        //Account Management ++++++++++++++++++++++++++++++++++++++++++
        function accountManagemntRequest($accountId) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account recuperation 
            $request = $db->prepare('SELECT idAccount, avatarAccount, statusAccount, lastNameAccount, firstNameAccount, mailAccount, birthdayAccount FROM accounts WHERE idAccount=?');
            $request -> execute(array($accountId));
            
            return $request;
        }

        //Email Insert +++++++++++++++++++++++++++++++++++++++++++++++
        function mailInsert($email,$idAccount) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account update 
            $request = $db->prepare('UPDATE accounts SET mailAccount = ? WHERE idAccount = ?');
            $request -> execute(array($email,$idAccount));
        }

        //Email Insert Control +++++++++++++++++++++++++++++++++++++++
        function mailInsertControl($email) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account recuperation 
            $request = $db->prepare('SELECT mailAccount FROM accounts WHERE mailAccount=?');
            $request -> execute(array($email));

            return $request;
        }

        //Control Mail Management +++++++++++++++++++++++++++++++++++++
        function controlMailManagement($idAccount) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account recuperation 
            $request = $db->prepare('SELECT passwordAccount FROM accounts WHERE idAccount=?');
            $request -> execute(array($idAccount));

            return $request;
        }

        //Password Insert +++++++++++++++++++++++++++++++++++++++++++++++
        function passwordInsert($password,$idAccount) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account update 
            $request = $db->prepare('UPDATE accounts SET passwordAccount = ? WHERE idAccount = ?');
            $request -> execute(array($password,$idAccount));
        }

        //Account Supress +++++++++++++++++++++++++++++++++++++++++++++++++
        function supressAccount($idAccount) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account supress 
            $request = $db->prepare('DELETE FROM accounts WHERE idAccount = ?');
            $request -> execute(array($idAccount));
        }
    }