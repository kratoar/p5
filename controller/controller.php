<?php
    require_once('./model/UserManager.php');
    // use MyBlog\Model\UserManager;

    $user = new MyBlog\Model\UserManager();

    function displayHome() {
        require_once('./view/front/home.php');
    }
