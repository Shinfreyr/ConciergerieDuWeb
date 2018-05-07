<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class LinkedManager extends Manager {
        //Linked Inscription ++++++++++++++++++++++++++++++++++++++++++
        function linkAccountEnterprise($idAccount,$idEnterprise) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Link Insert 
            $request = $db->prepare('INSERT INTO linked (idAccount, idEnterprise) VALUES (?, ?)');
            $request -> execute(array($idAccount,$idEnterprise));
            
            return $request;           
        }

        //Supress Link +++++++++++++++++++++++++++++++++++++++++++++++++
        function supressLink($idAccount) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account supress 
            $request = $db->prepare('DELETE FROM linked WHERE idAccount = ?');
            $request -> execute(array($idAccount));
        }
    }