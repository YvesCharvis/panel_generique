<?php
use Core\Auth\DBAuth;
use Core\Auth\DBMembre;
define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php'; // permet l'absolute
App::load();

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home";
}

//////////////bouton connect 
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
$mbr = new DBMembre($app->getDb());

if ($auth->logged()) {
	$connect = "Disconnect";
	$panel = "<li><a href='admin.php?p=panel''>Panel Administrateur</a></li>";
	$inscrit = "";
	$profilM = "";
}

elseif ($mbr->connectM()) {
			$connect = "Disconnect";
			$panel = "";
			$inscrit = "";
			$profilM = "<li><a href='membre.php?p=profil''>Mon Profil</a></li>"	;
	
	
}
else{
	$connect = "Login";
	$panel = "";
	$inscrit = "<li><a href='index.php?p=Inscription''>Inscription</a></li>" ;
	$profilM = "";
}


/////////////////////////

ob_start();

if ($page==='home') {  // Charge centre page (contente)
	require ROOT.'/pages/index.php';
}elseif ($page==='Login') {
	require ROOT.'/pages/users/login.php';
}elseif ($page==='Disconnect') {
	require ROOT.'/pages/users/disconnect.php';
}elseif ($page==='Inscription') {
	require ROOT.'/pages/users/inscription.php';
}elseif ($page==='news.single') {
	require ROOT.'/pages/accueil/newcontenu.php';


}elseif ($page==='403') {
	require ROOT.'/pages/errors/403.php';
}elseif ($page==='404') {
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean(); // Le template 
require ROOT.'/pages/templates/default.php'; 