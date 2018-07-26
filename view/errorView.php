<?php $title = 'Erreur 404'; ?>

<?php ob_start(); ?>
<div class="container">
 	
	<p>Erreur : <?php echo $errorMessage ?></p>

 </div>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>