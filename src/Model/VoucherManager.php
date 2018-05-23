<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class VoucherManager extends Manager {
        //Voucher Inscription ++++++++++++++++++++++++++++++++++++++++++
        function voucherCreation($idAccount,$idArticle,$codeVoucher,$endDate) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Voucher Insert 
            $request = $db->prepare('INSERT INTO vouchers (codeVoucher,dateEditionVoucher,dateVoucher,idArticle,idAccount) VALUES (?, NOW(), ?, ?, ?)');
            $request -> execute(array($codeVoucher,$endDate,$idArticle,$idAccount));
        }

        //Control Inscription Voucher ++++++++++++++++++++++++++++++++++
        function voucherCreationControl($idAccount,$idArticle,$codeVoucher,$endDate) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Voucher recuperation 
            $request = $db->prepare('SELECT * FROM vouchers WHERE idAccount=? AND idArticle=? AND codeVoucher=? AND dateVoucher=?');
            $request -> execute(array($idAccount,$idArticle,$codeVoucher,$endDate));

            return $request;
        }

    }