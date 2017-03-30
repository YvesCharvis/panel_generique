<ul>
<?php foreach (App::getInstance()->getTable("Categorie")->all() as $category):?>
		<li><a><?= $category->titre ?><a></li>	
<?php endforeach ?>
</ul>