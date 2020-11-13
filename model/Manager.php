<?php
    namespace MyBlog\Model;

    class Manager
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
        public function __construct($use_mode = "")
        {
            // TODO create app table
        }

        /**
         * Short - Database connection
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        protected function dbConnect($db_vars)
        {
            return new \PDO('mysql:host='.$db_vars->getHost().';dbname='.$db_vars->getDbName().';charset=utf8', ''.$db_vars->getDbUser().'', ''.$db_vars->getDbPass());
        }

        /**
         * Short - Database request
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        protected function dbRequest($table, $params)
        {

        }

    }