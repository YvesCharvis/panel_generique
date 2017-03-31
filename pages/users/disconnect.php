<?php 
	unset($_SESSION['Auth']);
	unset($_SESSION['Mbr']);
	header('location: index.php?p=login');
	exit();