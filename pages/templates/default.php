    <!DOCTYPE html>
<html lang="fr">
  <head>
  		<title><?= App::getInstance()->titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">   
    						<!-- Bootstrap core CSS -->
    	<link type="text/css" rel="stylesheet" href="frameworks/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>	


<ol class="breadcrumb">
    <li><a href="index.php">Accueil</a></li>
    <?= $inscrit ?>    
    <li><a href="index.php?p=<?=$connect ?>"><?= $connect ?></a></li> 
    <?= $panel ?>
</ol>

<!-- Appelle de pages/index.php => HOME -->
			<?= $content; ?> 
</body>

								<!-- SCRIPTS LOADS -->
	<!-- <script type="text/javascript" hrel="scripts/bootstrap.min.js"></script>
		 <script type="text/javascript" hrel="jquery-3.2.0.min.js"></script> -->

</html>
