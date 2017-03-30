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
$Mbr = new DBMembre($app->getDb());



if ($_POST) {
	if (isset($_POST['username'], $_POST['password'])) {
		if ($Mbr->login($_POST['username'], $_POST['password'])) {
			//prevoir un message flash
		}else{
			header('location: index.php?p=login');
			exit();
		}
	}
}
if (!$Mbr->logged()) {
	$app->forbidden();
}
//////////////bouton connect 
$app = App::getInstance();
$Mbr = new DBMembre($app->getDb());
if ($Mbr->logged()) {
	$connect = "Disconnect";
	$panel = "";
	$inscrit = "";
	
}else{
	$connect = "Login";
	$panel = "";
	$inscrit = "" ;

}
/////////////////////////

ob_start();

if ($page==='home') {  // Charge centre page (contente)
	require ROOT.'/pages/membres/index.php';

}elseif ($page==='success') {
	require ROOT.'/pages/membres/sub.php';	


}elseif ($page==='403') {
	require ROOT.'/pages/errors/403.php';
}elseif ($page==='404') {
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean(); // Le template 
require ROOT.'/pages/templates/default.php'; 