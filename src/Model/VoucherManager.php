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

        //Request Account Voucher ++++++++++++++++++++++++++++++++++++++
        function allVoucher($idAccount) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Voucher recuperation 
            $request = $db->prepare('SELECT * FROM vouchers INNER JOIN articles ON vouchers.idArticle = articles.idArticle WHERE vouchers.idAccount=? ORDER BY vouchers.dateEditionVoucher DESC');
            $request -> execute(array($idAccount));

            return $request;
        }

        //Delet Voucher ++++++++++++++++++++++++++++++++++++++++++++++++
        function supressVoucher($idVoucher) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Account supress 
            $request = $db->prepare('DELETE FROM vouchers WHERE idVoucher = ?');
            $request -> execute(array($idVoucher));
        }

        //Voucher Count ++++++++++++++++++++++++++++++++++++++++++++++++
        function voucherCount() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Voucher recuperation 
            $request = $db->query('SELECT COUNT(*) FROM vouchers');

            return $request;
        }


    }