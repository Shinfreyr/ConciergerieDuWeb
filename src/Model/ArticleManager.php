<?php    
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class ArticleManager extends Manager {
        
        //Article on light first three +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleOnLight() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT * FROM articles WHERE statutArticle=? ORDER BY idArticle DESC LIMIT 0,3');
            $request -> execute(array("light"));

            return $request;
        }

        //Article on light last three +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleOnLightSecond() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $secondRequest = $db->prepare('SELECT * FROM articles WHERE statutArticle=? ORDER BY idArticle DESC LIMIT 3,6');
            $secondRequest -> execute(array("light"));

            return $secondRequest;
        }

        //Article Category Count ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleCategoryCount($category) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT COUNT(*) FROM articles INNER JOIN categories ON articles.idCategory=categories.idCategory WHERE articles.statutArticle!=?  AND categories.nameCategory=? ORDER BY articles.nomArticle');
            $request -> execute(array("rough","$category"));

            return $request;
        }

        //Article All Category Count ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleAllCategoryCount() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT COUNT(*) FROM articles WHERE articles.statutArticle!=? ORDER BY articles.nomArticle');
            $request -> execute(array("rough"));

            return $request;
        }

        //Article Seller Count +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleSellerCount($idSeller) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT COUNT(*) FROM articles INNER JOIN sellers ON articles.idSeller=Sellers.idSeller WHERE articles.statutArticle!=?  AND sellers.idSeller=? ORDER BY articles.nomArticle');
            $request -> execute(array("rough","$idSeller"));

            return $request;
        }

        //Article Category Request first three +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleCategoryRequest($category,$first,$second) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $firstRequest = $db->prepare('SELECT * FROM articles INNER JOIN categories ON articles.idCategory=categories.idCategory WHERE articles.statutArticle!=?  AND categories.nameCategory=? ORDER BY articles.idArticle LIMIT '.$first.','.$second);
            $firstRequest -> execute(array("rough",$category));

            return $firstRequest;
        }

        //Article Category Request last three ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleCategoryRequestSecond($category,$third,$fourth) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $secondRequest = $db->prepare('SELECT * FROM articles INNER JOIN categories ON articles.idCategory=categories.idCategory WHERE articles.statutArticle!=?  AND categories.nameCategory=? ORDER BY articles.idArticle LIMIT '.$third.','.$fourth);
            $secondRequest -> execute(array("rough",$category));

            return $secondRequest;
        }

        //Article All Category Request first three +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleAllCategoryRequest($first,$second) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $firstRequest = $db->prepare('SELECT * FROM articles WHERE statutArticle!=? ORDER BY idArticle LIMIT '.$first.','.$second);
            $firstRequest -> execute(array("rough"));

            return $firstRequest;
        }

        //Article Category Request last three ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleAllCategoryRequestSecond($third,$fourth) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $secondRequest = $db->prepare('SELECT * FROM articles WHERE statutArticle!=? ORDER BY idArticle LIMIT '.$third.','.$fourth);
            $secondRequest -> execute(array("rough"));

            return $secondRequest;
        }

        //Article Target Request +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleTargetRequest($idArticle) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $firstRequest = $db->prepare('SELECT * FROM articles INNER JOIN sellers ON articles.idSeller=sellers.idSeller WHERE articles.idArticle=? ORDER BY idArticle');
            $firstRequest -> execute(array($idArticle));

            return $firstRequest;
        }

        //Article Seller Request first three +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleSellerRequest($idSeller,$first,$second) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $firstRequest = $db->prepare('SELECT * FROM articles INNER JOIN sellers ON articles.idSeller=sellers.idSeller WHERE articles.statutArticle!=?  AND sellers.idSeller=? ORDER BY articles.idArticle LIMIT '.$first.','.$second);
            $firstRequest -> execute(array("rough",$idSeller));

            return $firstRequest;
        }

        //Article Seller Request last three ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleSellerRequestSecond($idSeller,$third,$fourth) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $secondRequest = $db->prepare('SELECT * FROM articles INNER JOIN sellers ON articles.idSeller=sellers.idSeller WHERE articles.statutArticle!=?  AND sellers.idSeller=? ORDER BY articles.idArticle LIMIT '.$third.','.$fourth);
            $secondRequest -> execute(array("rough",$idSeller));

            return $secondRequest;
        }

        //Article Voucher First Request ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function firstArticleVoucherRequest($idArticle) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT * FROM articles INNER JOIN sellers ON articles.idSeller=sellers.idSeller WHERE articles.idArticle=?');
            $request -> execute(array($idArticle));

            return $request;
        }

        //Article Voucher Second Request ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function secondArticleVoucherRequest($idArticle,$codeVoucher) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT * FROM articles INNER JOIN vouchers ON articles.idArticle=vouchers.idArticle WHERE articles.idArticle=? AND vouchers.codeVoucher=?');
            $request -> execute(array($idArticle,$codeVoucher));

            return $request;
        }

        //Article Search Request ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function searchBd($search) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT * FROM articles WHERE nomArticle LIKE ? OR descriptionArticle LIKE ?');
            $request -> execute(array('%'.$search.'%','%'.$search.'%'));

            return $request;
        }

        //Article Rough Count ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleRoughCount() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT COUNT(*) FROM articles WHERE statutArticle=?');
            $request -> execute(array("rough"));

            return $request;
        }

        //Article Rough Validation Request +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleRoughRequest() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $request = $db->prepare('SELECT * FROM articles INNER JOIN sellers ON articles.idSeller=sellers.idSeller WHERE articles.statutArticle=?');
            $request -> execute(array("rough"));

            return $request;
        }

        //Article Name Rough Modifiaction ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function nameArticleAdminDb($nameArticle,$idArticle) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article modification 
            $request = $db->prepare('UPDATE articles SET nomArticle = ? WHERE idArticle = ?');
            $request -> execute(array($nameArticle,$idArticle));
        }

        //Article Image Rough Modification ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function updateArticleImage($nameImage,$id) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article modification 
            $request = $db->prepare('UPDATE articles SET imageArticle = ? WHERE idArticle = ?');
            $request -> execute(array($nameImage,$id));
        }

        //Article Content Rough Modification ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function contentArticleAdminDb($contentArticle,$idArticle) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article modification 
            $request = $db->prepare('UPDATE articles SET descriptionArticle = ? WHERE idArticle = ?');
            $request -> execute(array($contentArticle,$idArticle));
        }

        //Article Reduction Rough Modification ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function reductionArticleAdminDb($reductionArticle,$idArticle) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article modification 
            $request = $db->prepare('UPDATE articles SET reductionArticle = ? WHERE idArticle = ?');
            $request -> execute(array($reductionArticle,$idArticle));
        }
        
        //Article Original Price Rough Modification +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function originalPriceArticleAdminDb($originalPriceArticle,$idArticle) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article modification 
            $request = $db->prepare('UPDATE articles SET originalPriceArticle = ? WHERE idArticle = ?');
            $request -> execute(array($originalPriceArticle,$idArticle));
        }
    }