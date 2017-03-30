<?php
App::getInstance()->getTable('User')->delete($_POST['id']);
header('location: admin.php?p=administrateurs.inscrits');
?>