<?php include('layout/precontent.inc.php'); ?>

<table>
	<thead>
		<tr>
			<th id="guest_id"></th>
			<th id="guest_name">Name</th>
			<th id="relationship">Relationship</th>
			<th id="is_invited_day">Day invite</th>
			<th id="is_invited_evening">Evening invite</th>
			<th id="is_top_table">Top table</th>
			<th id="is_child">Child</th>
		</tr>
	</thead>
	<?php foreach (getGuests() as $guest): ?>
		<tr>
			<td headers="guest_id"><?= $guest['guest_id']; ?></td>
			<td headers="guest_name"><?= $guest['first_name']. ' '. $guest['last_name']; ?></td>
			<td headers="relationship"><?= $guest['relationship']; ?></td>
			<td headers="is_invited_day"><?= convertIntBooleanToString($guest['is_invited_day']); ?></td>
			<td headers="is_invited_evening"><?= convertIntBooleanToString($guest['is_invited_evening']); ?></td>
			<td headers="is_top_table"><?= convertIntBooleanToString($guest['is_top_table']); ?></td>
			<td headers="is_child"><?= convertIntBooleanToString($guest['is_child']); ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<?php include('layout/postcontent.inc.php'); ?>
