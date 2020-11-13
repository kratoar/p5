<?php
    $loader = new \Twig\Loader\FilesystemLoader('./views/templates');
    $twig = new \Twig\Environment($loader, [
        // 'cache' => './comp_cache',
    ]);

    // ADD GLOBAL VARIABLES

    $twig->addGlobal('tech_list', $GLOBALS['app']->getDefaultTechList());

    // ADD FILTERS



    // ADD FUNCTIONS
    

    //// App functions
    $twig->addFunction(new \Twig\TwigFunction('appVersion', function () {
        return $GLOBALS['app']->getVersion();
    }));
    $twig->addFunction(new \Twig\TwigFunction('encrypt', function ($string) {
        return $GLOBALS['app']->encrypt($string);
    }));
    $twig->addFunction(new \Twig\TwigFunction('getCurrentURL', function () {
        return $GLOBALS['app']->getCurrentURL();
    }));
    $twig->addFunction(new \Twig\TwigFunction('getDefIconSrc', function ($string) {
        return $GLOBALS['app']->getDefaultIconSrc($string);
    }));
    $twig->addFunction(new \Twig\TwigFunction('getDefImageSrc', function ($string) {
        return $GLOBALS['app']->getDefaultImageSrc($string);
    }));
    $twig->addFunction(new \Twig\TwigFunction('defaultIcons', function () {
        return $GLOBALS['app']->getDefaultIconsSet();
    }));
    $twig->addFunction(new \Twig\TwigFunction('defaultImages', function () {
        return $GLOBALS['app']->getDefaultImagesSet();
    }));

    //// Generic functions
    $twig->addFunction(new \Twig\TwigFunction('print_r', function ($array) {
        return print_r($array);
    }));
    