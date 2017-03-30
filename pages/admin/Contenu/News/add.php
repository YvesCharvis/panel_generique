<?php
	$app = App::getInstance();
	if ($_POST) {
		if (!empty($_POST['titre'] && $_POST['img'] && $_POST['contenu'])) {
			$res = $app->getTable('New')->create(
				["titre"=>$_POST['titre'],
				"img"=>$_POST['img'], 
				"contenu"=>$_POST['contenu'],
				"category_id"=>$_POST['category_id']							
				]);
			if ($res) {
				////message Flash
				header('location: admin.php?p=edit.news');
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


<SELECT name="category_id">
<?php foreach (App::getInstance()->getTable("Categorie")->all() as $category): ?>
<option value="<?= $category->id ?>">
				<?= $category->titre ?>		
</option>
<?php endforeach ?>
</SELECT>
	<input class="btn btn-primary" type="submit" name="">
</form>
