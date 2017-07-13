<?php include('layout/precontent.inc.php'); ?>
<h1>Seating</h1>
<?php foreach (getSeating() as $table): ?>
	<?php $guestsOnTable = mysqli_num_rows(getTable($table['table_id'])); ?>
	<h2><?= $table['table_name']; ?> (<?= $guestsOnTable ?>)</h2>
		<ul>
		<?php foreach (getTable($table['table_id']) as $guest): ?>
			<li>
				<a href="guest.php?guestId=<?= $guest['guest_id']; ?>"><?= $guest['first_name'].' '. $guest['last_name']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endforeach; ?>

<?php include('layout/postcontent.inc.php'); ?>
