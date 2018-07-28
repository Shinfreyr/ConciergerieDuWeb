<?php
    //Namespace +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    namespace Project\Model;

    // Class ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    class CategoryManager extends Manager {
        //Category request +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function categoryRequest() {
            // Data Base Connection
            $db=$this->dbConnect();
            // Category recuperation 
            $thirdRequest = $db->query('SELECT * FROM categories ORDER BY nameCategory');

            return $thirdRequest;
        }

        //Id Category Request ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function selectCategoryId($categoryArticle) {
            // Data Base Connection
            $db=$this->dbConnect();
            // Category recuperation 
            $request = $db->prepare('SELECT idCategory FROM categories WHERE nameCategory=? ');
            $request -> execute(array($categoryArticle));

            return $request;
        }
    }