<?php
App::getInstance()->getTable('Membre')->delete($_POST['id']);
header('location: admin.php?p=utilisateurs.inscrits');
?>