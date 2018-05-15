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
    }