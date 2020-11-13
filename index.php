<?php
    require_once('./model/App.php');

    $app = new MyBlog\Model\App();
    
    require_once './vendor/autoload.php';

    require_once './tools/twig_config.php';

    require_once('./controller/controller.php');

    $http_host = $_SERVER['HTTP_HOST'];
    $server_name = $_SERVER['SERVER_NAME'];
    $request_scheme = $_SERVER['REQUEST_SCHEME'];
    $request_uri = $_SERVER['REQUEST_URI'];
    $script_name = $_SERVER['SCRIPT_NAME'];
    $php_self = $_SERVER['PHP_SELF'];
    
    displayHome();