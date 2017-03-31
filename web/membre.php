<?php
use Core\Auth\DBMembre;

define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php'; // permet l'absolute
App::load();

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home";
}


$app = App::getInstance();
$mbr = new DBMembre($app->getDb());

if ($_POST) {
	if (isset($_POST['username'], $_POST['password'])) {
		if ($mbr->loginM($_POST['username'], $_POST['password'])) {
	//prevoir un message flash
		}else{
			header('location: index.php?p=login');
			exit();
		}
	}
}



if (!$mbr->connectM()) {
	$app->forbidden();
}


//////////////bouton connect 
$app = App::getInstance();
$mbr = new DBMembre($app->getDb());
if ($mbr->connectM()) {
	$connect = "Disconnect";
	$panel = "";
	$inscrit = "";
	$profilM = "<li><a href='membre.php?p=profil''>Mon Profil</a></li>"	;
	
}else{
	$connect = "Login";
	$profilM = "";
	


}

$connect = "Disconnect";

/////////////////////////

ob_start();

if ($page==='home') {  // Charge centre page (contente)
	require ROOT.'/pages/membres/index.php';

}elseif ($page==='success') {
	require ROOT.'/pages/membres/sub.php';	
}elseif ($page==='profil') {
	require ROOT.'/pages/membres/profil.php';


}elseif ($page==='403') {
	require ROOT.'/pages/errors/403.php';
}elseif ($page==='404') {
	require ROOT.'/pages/errors/404.php';

}else{
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean(); // Le template 
require ROOT.'/pages/templates/default.php'; 