<h1>Gestion Utilisateurs</h1>


<table class="table">
	<thead>
		<tr>
			<td>ID</td>
			<td>FirstName</td>
			<td>lastName</td>
			<td>Age</td>
			<td>Adresse Mail</td>
			<td>Password sha1</td>
			<td>Numéro De Télèphone</td>			
		</tr>
	</thead>
	<tbody>
	<?php foreach (App::getInstance()->getTable("Membre")->all() as $membre): ?>

		<tr>			
			<td><?= $membre->id ?></td>
			<td><?= $membre->name ?></td>
			<td><?= $membre->last_name ?></td>
			<td><?= $membre->Age ?></td>
			<td><?= $membre->adress_mail ?></td>
			<td><?= $membre->password ?></td>
			<td><?= $membre->phone ?></td>
		
		<td>
<form method="post" action="admin.php?p=utilisateur.delete">
	<input type="hidden" name="id" value="<?= $membre->id; ?>">
	<input class="btn btn-danger" type="submit" name="OK" value="Delete">
</form>
	</a>
</td>


</tr>
	
	<?php endforeach ?>
	</tbody>
</table>

</div>