<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class VoucherManager extends Manager {
        //Linked Inscription ++++++++++++++++++++++++++++++++++++++++++
        function voucherCreation($idAccount,$idArticle,$codeVoucher,$endDate) {
        // Data Base Connection
        $db=$this->dbConnect();
        // Voucher Insert 
        $request = $db->prepare('INSERT INTO vouchers (codeVoucher,dateVoucher,idArticle,idAccount) VALUES (?, ?, ?, ?)');
        $request -> execute(array($codeVoucher,$endDate,$idArticle,$idAccount));
        }
    }