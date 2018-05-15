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
        function articleCategoryCount() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Article recuperation 
            $secondRequest = $db->prepare('SELECT * FROM articles WHERE statutArticle!=? ORDER BY idArticle DESC LIMIT 3,6');
            $secondRequest -> execute(array("rough"));

            return $secondRequest;
        }
    }