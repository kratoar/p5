<?php
    namespace MyBlog\Model;

    require_once('./model/Manager.php');

    ////// PROFILE //////
    class UserManager extends Manager
    {
        /**
         * Short - __construct
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function __construct()
        {
            // TODO create users table
        }

        //// Basics  ////

        /**
         * Short - Is loged
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function isLoged()
        {
            return false;
        }

        //// Data ////

        /**
         * Short - Get data
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function getData()
        {
            
        }
    
        /**
         * Short - Set data
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function setData()
        {
            
        }
    
        //// Settings ////
    
        /**
         * Short - Get settings
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function getSettings()
        {
            
        }
    
        /**
         * Short - Set settings
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function setSettings()
        {
            
        }
    
        //// Comments ////
    
        /**
         * Short - Get comments
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function getComments()
        {
            
        }
    
        /**
         * Short - Set comments
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function setComments()
        {
            
        }
    
        /**
         * Short - Delete comments
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        public function deleteComments()
        {
            
        }
    }