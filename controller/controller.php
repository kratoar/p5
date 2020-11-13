<?php
    require_once('./model/UserManager.php');

    $user = new MyBlog\Model\UserManager();

    function displayHome() {
        echo $GLOBALS['twig']->render(
            './front/home.php',
            [
                'title' => 'Home',
                'banner_display' => true,
                'banner_param' => "home",
                'page_params' => $GLOBALS['app']->getPageDatas("home")
            ]
        );
    }
