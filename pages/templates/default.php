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

<nav class="navbar navbar-fixed-top">
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">Menu<i class="fa fa-bars"></i></button>
                <img src="img/myproject.png" class="img-circle" width="47px">
                <a class="navbar-brand" href="index.php">
                      <span class="light">MY</span> PROJECT
                </a>
        </div>      
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">           
                    <li><a href="index.php">Accueil</a></li>
                    <?= $inscrit ?>    
                    <?= $panel ?>   


                    <?= $profilM   ?>

                    <li><a href="index.php?p=<?=$connect ?>"><?= $connect ?></a></li>                    
                </ul>
            </div>       
   
</nav>
,
<!-- Appelle de pages/index.php => HOME -->
			<?= $content; ?> 
</body>

								<!-- SCRIPTS LOADS -->
	<!-- <script type="text/javascript" hrel="scripts/bootstrap.min.js"></script>
		 <script type="text/javascript" hrel="jquery-3.2.0.min.js"></script> -->

</html>
