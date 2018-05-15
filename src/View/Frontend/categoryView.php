<!DOCTYPE html>
<?php $title = "La Conciergerie du Web, Les services !"; ?>
<?php ob_start(); ?>



<?php
    $content = ob_get_clean();
    require('template.php');    
?>