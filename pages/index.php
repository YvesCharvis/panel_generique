<h2>MON SITE</h2>

<?php var_dump($_SESSION); ?>
<div class="row">
<div class="col-xs-10 col-md-8 col-lg-6">
<h2>News du moments</h2>
<?= require ROOT.'/pages/accueil/new.php'; ?>
</div>
<div class="col-xs-2 col-md-4 col-lg-6">
<h2>Categorie</h2>
<?= require ROOT.'/pages/accueil/category.php'; ?>
</div>
</div>