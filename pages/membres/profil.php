<?php




	
	$app = App::getInstance();
	$profilID = $app->getTable('Membre')->last();




?>



<h2>Mon Profil</h2>



<?= var_dump($_SESSION); ?>
<?=var_dump($profilID);?>
