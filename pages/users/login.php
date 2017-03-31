<?php
use Core\Auth\DBAuth;
use Core\Auth\DBMembre;


$app2 = App::getInstance();
$auth2 = new DBAuth($app2->getDb());
$mbr = new DBMembre($app2->getDb());

if ($mbr->connect()){
	header("location: membre.php");
}
if ($auth2->logged()){
	header("location: admin.php");
	# code...
}
?>
<h2>connexion</h2>

 <form method="Post" action="admin.php" >
	<input class="form-control" type="text" name="username" placeholder="nom d'utilisateur">
	<input class="form-control" type="password" name="password" placeholder="mot de passe">
	<input class="btn btn-primary" type="submit">
</form>
 
