<?php
	$app = App::getInstance();
	if ($_POST) {
		if (!empty($_POST['titre'] && $_POST['img'] && $_POST['contenu'])) {
			$res = $app->getTable('New')->create(
				["titre"=>$_POST['titre'],
				"img"=>$_POST['img'], 
				"contenu"=>$_POST['contenu']							
				]);
			if ($res) {
				////message Flash
				header('location: admin.php?p=panel');
				?>
				<div class="alert alert-success">Bien Ajouter</div> 
				<?php
			}
		}
	}
?>


<h2>Add News</h2>

<form method="post">
	<input class="form-control" type="text" name="titre" value="" placeholder="Titre News">
	<input class="form-control" type="text" name="img" value="" placeholder="Link img">
	<textarea class="form-control" name="contenu" placeholder="Contenu News" ></textarea>
	<input class="btn btn-primary" type="submit" name="">

</form>
