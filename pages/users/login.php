<?php
use Core\Auth\DBAuth;
use Core\Auth\DBMembre;


$app2 = App::getInstance();
$auth2 = new DBAuth($app2->getDb());
$mbr = new DBMembre($app2->getDb());

if ($mbr->connectM()){
	header("location: membre.php");
}
if ($auth2->logged()){
	header("location: admin.php");
exit();
}


?>


<div class="login-page">
<h2 class="login-titre">Connexion</h2>
  <div class="form">
    <form class="login-form" method="Post" action="admin.php">
    <input class="form-control" type="text" name="username" placeholder="nom d'utilisateur">
	<input class="form-control" type="password" name="password" placeholder="mot de passe">
	<hr>
	<input id="breathing-button" class="btn btn-primary" type="submit" value="Connexion">      
    </form>
  </div>
</div>

