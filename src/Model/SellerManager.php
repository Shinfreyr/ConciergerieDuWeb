<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class SellerManager extends Manager {
        //Seller request ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function sellerRequest($idSeller) {    
            // Data Base Connection
            $db=$this->dbConnect();
            // Seller recuperation 
            $requestSeller = $db->prepare('SELECT * FROM sellers WHERE idSeller=? ');
            $requestSeller -> execute(array($idSeller));

            return $requestSeller;
        }

        //Seller Count +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function sellerCount() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Seller recuperation 
            $request = $db->query('SELECT COUNT(*) FROM sellers');

            return $request;
        }
    }