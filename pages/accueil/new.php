
<div class="row">
	<div class="col-md-8">
		<?php  foreach (App::getInstance()->getTable('New')->all() as $news): ?>
		  <h2>
		  	 <a href="<?= $news->Url; ?>">
		      	<?= $news->titre;?>  
		     </a>
		  </h2>
		  <img src="<?= $news->img; ?>" width="200px">
		  <p><?= $news->Extrait; ?></p>
	
		<p><em><?= $news->category_id; ?></em></p>
	
		<?php endforeach; ?>
	</div>


</div>