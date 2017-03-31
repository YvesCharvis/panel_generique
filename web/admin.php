<?php
use Core\Auth\DBAuth;
use Core\Auth\DBMembre;


define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home";
}

$app = App::getInstance();
$auth = new DBAuth($app->getDb());
$mbr = new DBMembre($app->getDb());


//connexion utilisateur via login.php
if ($_POST) {
	if (isset($_POST['username'], $_POST['password'])) {
		if ($auth->loginA($_POST['username'], $_POST['password'])) {
			header('location: admin.php?p=panel');
			//prevoir un message flash			

		
	}elseif ($_POST) {
		if (isset($_POST['username'], $_POST['password'])) {
			if ($mbr->loginM($_POST['username'], $_POST['password'])) {	
			header('location: membre.php?p=home');
			exit();
			}
		}
		}
}
}

//fin connexion utilisateur via login.php

if (!$auth->logged()) {
	$app->forbidden();
}

//////////////bouton connect 
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if ($auth->logged()) {	
	$panel = "<li><a href='admin.php?p=panel''>Panel Administrateur</a></li>";
    $inscrit = "";
    $profilM = "";
}else{
	$connect = "login";
	$profilM = "";
	
	
}

$connect = "Disconnect";

ob_start();

if ($page==='home') {
	require ROOT.'/pages/admin/index.php';

}elseif ($page==='panel') {
	require ROOT.'/pages/admin/index.php';
}elseif ($page==='utilisateurs.inscrits') {
	require ROOT.'/pages/admin/utilisateurs/index.php';
}elseif ($page==='utilisateur.delete') {
	require ROOT.'/pages/admin/utilisateurs/delete.php';
}elseif ($page==='administrateurs.delete') {
	require ROOT.'/pages/admin/Administrateurs/delete.php';
}elseif ($page==='administrateurs.inscrits') {
	require ROOT.'/pages/admin/Administrateurs/index.php';
}elseif ($page==='administrateurs.add') {
	require ROOT.'/pages/admin/Administrateurs/add.php';
}elseif ($page==='add.new') {
	require ROOT.'/pages/admin/Contenu/News/add.php';
	
	/////suite pour post
}else{
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean();
require ROOT.'/pages/templates/default.php'; 