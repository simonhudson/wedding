<?php include('layout/precontent.inc.php'); ?>

<?php foreach (getSeating() as $table): ?>
	<?= $table['name']; ?>
<?php endforeach; ?>

<?php include('layout/postcontent.inc.php'); ?>
