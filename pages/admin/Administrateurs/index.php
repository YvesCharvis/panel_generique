


<h1>Gestion Des Administrateurs</h1>


<table class="table">
	<thead>
		<tr>
			<td>ID</td>
			<td>Users Names</td>
			<td>PWD</td>			
		</tr>
	</thead>
	<tbody>
	<?php foreach (App::getInstance()->getTable("User")->All() as $admin): ?>
		<tr>			
			<td><?= $admin->id ?></td>
			<td><?= $admin->name ?></td>
			<td><?= $admin->password ?></td>

			<td><form method="post" action="admin.php?p=administrateurs.delete">
					<input type="hidden" name="id" value="<?= $admin->id; ?>">
					<input class="btn btn-danger" type="submit" name="OK" value="Delete">
				</form></td>
		</tr>	
	<?php endforeach ?>
	</tbody>
	<fbody>
	<td></td>
		<td>
			<form method="post" action="admin.php?p=administrateurs.add" >
				<input class="form-control" type="text" name="name" value="" placeholder="admin name">
		</td>
		<td>
				<input class="form-control" type="password" name="password" value="" placeholder="admin password">			
		</td>
		<td>
				<input class="btn btn-primary" type="submit" name="Ajouter" value="Add">


			</form>
		</td>




	</fbody>
	
</table>

</div>