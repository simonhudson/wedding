<?php
include('layout/precontent.inc.php');

$tableId = null;
if (isset($_GET['table'])) {
	$tableId = $_GET['table'];
}

?>
<?= pageHeader('Seating'); ?>
<?php foreach (getTables($tableId)->data as $table): ?>
	<?php $guestsOnTable = mysqli_num_rows(getTable($table['table_id'])); ?>
	<h2 id="table-<?= $table['table_id'] ?>"><?= $table['table_name']; ?> (<?= $guestsOnTable ?>)</h2>
		<ul>
		<?php foreach (getTable($table['table_id'])->data as $guest): ?>
			<li>
				<a href="guest.php?guestId=<?= $guest['guest_id']; ?>"><?= $guest['first_name'].' '. $guest['last_name']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endforeach; ?>

<?php include('layout/postcontent.inc.php'); ?>
