
<div class="row">
	<div class="col-md-9">
		<?php  foreach (App::getInstance()->getTable('New')->all()->$this->id as $news): ?>
		  <h2>		  	 
		      	<?= $news->titre;?>  
		     
		  </h2>
		  <img src="<?= $news->img; ?>" width="350px">
		  <p><?= $news->contenu; ?></p>
		<?php endforeach; ?>	
	</div>
	<div class="col-md-2">
		
		<h2>Categorie</h2>
	</div>


</div>