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

            $accountManager = new \Project\Model\AccountManager();
            $request = $accountManager->accountUserCount();
            $result2 = $request->fetch();

            $sellerManager = new \Project\Model\SellerManager();
            $request = $sellerManager->sellerCount();
            $result3 = $request->fetch();

            $enterpriseManager = new \Project\Model\EnterpriseManager();
            $request = $enterpriseManager->enterpriseCount();
            $result4 = $request->fetch();
            
            require('src/View/backend/adminPanelView.php');
        }

        //Validation Article View +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function adminValidationArticle() {
            $articleManager = new \Project\Model\ArticleManager();
            $request = $articleManager->articleRoughCount();
            $result = $request->fetch();

            $articleManager = new \Project\Model\ArticleMAnager();
            $request = $articleManager->articleRoughRequest();

            require('src/View/backend/validationArticleView.php');
        }
    }