<?php $title = 'Home'; ?>

<?php ob_start(); ?>

<main>
    <!-- 
        votre nom et votre prénom ;
        une photo et/ou un logo ;
        une phrase d’accroche qui vous ressemble (exemple : “Martin Durand, le développeur qu’il vous faut !”) ;
        un menu permettant de naviguer parmi l’ensemble des pages de votre site web ;
        un formulaire de contact (à la soumission de ce formulaire, un e-mail avec toutes ces informations vous sera envoyé) avec les champs suivants :
        nom/prénom,
        e-mail de contact,
        message,
        un lien vers votre CV au format PDF ;
        et l’ensemble des liens vers les réseaux sociaux où l’on peut vous suivre (GitHub, LinkedIn, Twitter…).
    -->
</main>
<?php $content = ob_get_clean(); ?>

<?php require('./view/front/template.php'); ?>