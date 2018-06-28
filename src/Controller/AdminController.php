<?php
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Controller;
    
    //Object ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class AdminController {

        //Admin Panel View ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function backendAdmin() {
            $articleManager = new \Project\Model\ArticleManager();
            $request = $articleManager->articleRoughCount();

            $result = $request->fetch();

            $voucherManager = new \Project\Model\VoucherManager();
            $request = $voucherManager->voucherCount();

            $result1 = $request->fetch();
            
            require('src/View/backend/adminPanelView.php');
        }
    }