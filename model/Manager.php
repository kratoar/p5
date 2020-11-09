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
            $db = $use_mode == "development" ? "DEVELOP" : "PRODUCTION";
        }

        /**
         * Short - 
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        protected function getVersion()
        {
            return [
                'version' => $this->getVersionIteration(),
                'creation' => $this->getVersionCreation()
            ];
        }

        /**
         * Short - 
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        private function getVersionCreation()
        {
            
        }

        /**
         * Short - 
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        private function getVersionIteration()
        {
            
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
        protected function dbConnect()
        {
            $db = new \PDO('mysql:host='.$this->getHost().';dbname='.$this->getDbName().';charset=utf8', ''.$this->getDbUser().'', ''.$this->getDbPass());
            return $db;
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

        /**
         * Short - Get mode env vars
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        private function getModeEnvVars()
        {
            switch(self::$mode)
            {
                case "DEVELOP":
                    return self::DEVELOP;
                case "PRODUCTION":
                default:
                    return self::PRODUCTION;
            }
        }

        /**
         * Short - Get host
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        private function getHost()
        {
            return $this->getModeEnvVars()['HOST'];
        }

        /**
         * Short - Get database name
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        private function getDbName()
        {
            return $this->getModeEnvVars()['DB_NAME'];
        }

        /**
         * Short - Get database user
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        private function getDbUser()
        {
            return $this->getModeEnvVars()['USER_NAME'];
        }

        /**
         * Short - Get database password
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        private function getDbPass()
        {
            return $this->getModeEnvVars()['USER_PASSWORD'];
        }

        /**
         * Short - 
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        protected function encrypt($str)
        {
            return !$str ? null : md5($str);
        }

        private $mode;

        const DEVELOP = [
            'HOST'=> 'localhost',
            'DB_NAME'=> 'sp5',
            'USER_NAME'=> 'root',
            'USER_PASSWORD'=> '',
        ];

        const PRODUCTION = [
            'HOST'=> 'localhost',
            'DB_NAME'=> 'sp5',
            'USER_NAME'=> 'root',
            'USER_PASSWORD'=> '',
        ];

        
        
        
    }