<?php 
use Core\Auth\DBAuth;
use Core\Auth\DBMembre;

define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
$Mbr = new DBMembre($app->getDb());

//connexion utilisateur via login.php
if ($_POST) {
			if (isset($_POST['username'], $_POST['password'])) {

				if ($auth->login($_POST['username'], $_POST['password'])) {
						header('location: admin.php');
						
			if (!$auth->logged()) {
	$app->forbidden();
}
						/*}elseif{

							if ($_POST) {
								if (isset($_POST['username'], $_POST['password'])) {
									if ($Mbr->login($_POST['username'], $_POST['password'])) {
									header('location: membre.php');
									exit();
			//prevoir un message flash
							}else{
								header('location: index.php?p=login');
								exit();
		}
	}
}*/
		}
	}
}

?>