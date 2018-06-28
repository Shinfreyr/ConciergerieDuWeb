<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class EnterpriseManager extends Manager {
        //Code Enterprise control +++++++++++++++++++++++++++++++++++++++++
        function controlEnterpriseCode($enterpriseCode) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Enterprise code recuperation 
            $request = $db->prepare('SELECT codeEnterprise, idEnterprise FROM enterprises WHERE codeEnterprise=? AND statutEnterprise=?');
            $request -> execute(array($enterpriseCode, "Abonné"));
            
            return $request;
        } 

        //Seller Count +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function enterpriseCount() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Enterprise recuperation 
            $request = $db->query('SELECT COUNT(*) FROM enterprises');

            return $request;
        }
    }