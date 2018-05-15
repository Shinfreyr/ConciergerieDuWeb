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

        //Article Category Request +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function articleCategoryRequest($category,$first,$second) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $firstRequest = $db->prepare('SELECT articles.nomArticle FROM articles INNER JOIN categories ON articles.idCategory=categories.idCategory WHERE articles.statutArticle!=?  AND categories.nameCategory=? ORDER BY articles.nomArticle LIMIT '.$first.','.$second);
            $firstRequest -> execute(array("rough",$category));

            return $firstRequest;
        }
    }