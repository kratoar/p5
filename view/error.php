<?php $title = 'Erreur'; ?>

<?php ob_start(); ?>


<?php $content = ob_get_clean(); ?>

<?php require('./view/front/template.php'); ?>