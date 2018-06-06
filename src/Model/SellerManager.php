<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class SellerManager extends Manager {
        function sellerRequest($idSeller) {    
            // Data Base Connection
            $db=$this->dbConnect();
            // Voucher recuperation 
            $requestSeller = $db->prepare('SELECT * FROM sellers WHERE idSeller=? ');
            $requestSeller -> execute(array($idSeller));

            return $requestSeller;
        }
    }