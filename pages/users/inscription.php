<?php
	$app = App::getInstance();
	if ($_POST) {
		if (!empty($_POST['name'] && $_POST['last_name'] && $_POST['first_day'] && $_POST['password'] && $_POST['adress_mail'] && $_POST['phone'])) {
			$res = $app->getTable('Membre')->create(
				["name"=>$_POST['name'], 
				"last_name"=>$_POST['last_name'],
				"first_day"=>$_POST['first_day'],
				"password"=>sha1($_POST['password']),
				"adress_mail"=>$_POST['adress_mail'],
				"phone"=>$_POST['phone']			
				]);
			if ($res) {
				////message Flash
				header('location: index.php?p=Login');
				?>
				<div class='alert alert-success'>Bien enregistré</div>"; 
				<?php
			}
		}
	}
?>

<div class="row">
	<div class="col-md-offset-0 col-md-4 ">
		<div class="login-page">
			<H2 class="login-titre">INSCRIPTION</H2>
				<form method="post" class="form">
					<input type="hidden" name="id" value="">
					<input class="form-control" type="text" name="name" value="" placeholder="Nom de famille">
					<input class="form-control" type="text" name="last_name" value="" placeholder="Prénom">
					<input class="form-control" type="Date" name="first_day" value="" placeholder="Date de naissance">
					<input class="form-control" type="password" name="password" value="" placeholder="Votre Mots de Passe">
					<input class="form-control" type="text" name="adress_mail" value="" placeholder="Votre Adresse mail">
					<input class="form-control" type="value" name="phone" value="" placeholder="Numéro de Téléphone">
					<hr>
					<input id="breathing-button" class="btn btn-primary" type="submit" value="Inscription">
				</form>
		</div>
	</div>
	<div class="col-md-offset-1 col-md-4">
		<?php require ROOT.'/pages/users/login.php'; ?>
	</div>

</div>