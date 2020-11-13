<?php
    namespace MyBlog\Model;
    
    class App
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
            $db = $use_mode == "production" ? "PRODUCTION" : "DEVELOP";
        }
        /**
         * Short - Secure the by passed foreign string parameter
         *
         * Detailed - 
         *
         * @param string $str Secured string
         *
         * @return str 
         */
        private function secureForeignString($str = "")
        {
            return htmlspecialchars(htmlentities($str));
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
        public function getVersion()
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
         * Short - Get mode env vars
         *
         * Detailed - 
         *
         * @param Type $name Description
         *
         * @return retour
         */
        protected function getModeEnvVars()
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
        public function getHost()
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
        public function getDbName()
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
        public function getDbUser()
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
        public function getDbPass()
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
        public function encrypt($str)
        {
            return !$str ? null : md5($str);
        }

        /**
         * Short - Get the current full url
         * 
         * Detailed- 
         * 
         * @return url The current url
         */
        public function getCurrentURL()
        {
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
                $link = "https";
            else
                $link = "http";
            
            // Here append the common URL characters. 
            $link .= "://"; 
            
            // Append the host(domain name, ip) to the URL. 
            $link .= $_SERVER['HTTP_HOST']; 
            
            // Append the requested resource location to the URL 
            $link .= $_SERVER['REQUEST_URI']; 

            return $link;
        }

        /**
         * Short - Get the current page datas
         * 
         * Detailed- 
         * 
         * @return datas The current page datas
         */
        public function getPageDatas($page = "")
        {
            switch($page)
            {
                case "home":
                default:
                    return [
                        "banner" => [
                            "text" => "Votre blog tech sur vos techs !",
                        ],
                    ];
            }
        }

        /**
         * Short - Get the default icons src
         * 
         * Detailed- 
         * 
         * @return datas The current src of a default icon
         */
        public function getDefaultIconSrc($name)
        {
            if(file_exists(self::DEFAULT['ICONS_PATH'].$this->secureForeignString($name)))
            {
                return $_SERVER['REQUEST_URI'].self::DEFAULT['ICONS_PATH'].$this->secureForeignString($name);
            }
            else
            {
                return $_SERVER['REQUEST_URI'].self::DEFAULT['ICONS_PATH'].'no-icon';
            }
        }

        /**
         * Short - Get the default icons set
         * 
         * Detailed - 
         * 
         * @return icons_set The current icons default set
         */
        public function getDefaultIconsSet()
        {
            $temp = [];
            foreach(scandir(self::DEFAULT['ICONS_PATH']) as $value)
            {
                !in_array($value, ['.', '..']) && $temp[pathinfo($value, PATHINFO_FILENAME)] = $_SERVER['REQUEST_URI'].self::DEFAULT['ICONS_PATH'].$value;
            }
            return $temp;
        }

        /**
         * Short - Get the default images src
         * 
         * Detailed- 
         * 
         * @return datas The current src of a default image
         */
        public function getDefaultImageSrc($name)
        {
            if(file_exists(self::DEFAULT['IMAGES_PATH'].$this->secureForeignString($name)))
            {
                return $_SERVER['REQUEST_URI'].self::DEFAULT['IMAGES_PATH'].$this->secureForeignString($name);
            }
            else
            {
                return $_SERVER['REQUEST_URI'].self::DEFAULT['IMAGES_PATH'].'no-icon';
            }
        }

        /**
         * Short - Get the default images set
         * 
         * Detailed - 
         * 
         * @return images The current images default set
         */
        public function getDefaultImagesSet()
        {
            $temp = [];
            foreach(scandir(self::DEFAULT['IMAGES_PATH']) as $value)
            {
                !in_array($value, ['.', '..']) && $temp[pathinfo($value, PATHINFO_FILENAME)] = $_SERVER['REQUEST_URI'].self::DEFAULT['IMAGES_PATH'].$value;
            }
            return $temp;
        }

        private $mode;

        const DEFAULT = [
            'ICONS_PATH' => "public/icons/techs/",
            'IMAGES_PATH' => "public/images/",
        ];

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