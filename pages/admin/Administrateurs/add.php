
<?php
	$app = App::getInstance();
	if ($_POST) {
		if (!empty($_POST['name'] && $_POST['password'])) {
			$res = $app->getTable('User')->create(
				["name"=>$_POST['name'], 
				"password"=>sha1($_POST['password'])							
				]);
			if ($res) {
				////message Flash
				header('location: admin.php?p=administrateurs.inscrits');
				?>
				<div class="alert alert-success">Bien Ajouter</div> 
				<?php
			}
		}
	}
?>