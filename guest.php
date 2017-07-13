<?php include('layout/precontent.inc.php'); ?>

<?php $guestId = $_GET['guestId']; ?>

<?php foreach (getGuest($guestId) as $guest): ?>
	<table>
		<thead>
			<tr>
				<th id="guest_id"></th>
				<th id="guest_name">Name</th>
				<th id="relationship">Relationship</th>
				<th id="is_invited_day">Day invite</th>
				<th id="is_invited_evening">Evening invite</th>
				<th id="is_child">Child</th>
			</tr>
		</thead>
			<tr>
				<td headers="guest_id"><?= $guest['guest_id']; ?></td>
				<td headers="guest_name"><?= $guest['first_name']. ' '. $guest['last_name']; ?></td>
				<td headers="relationship"><?= $guest['relationship']; ?></td>
				<td headers="is_invited_day"><?= convertIntBooleanToString($guest['is_invited_day']); ?></td>
				<td headers="is_invited_evening"><?= convertIntBooleanToString($guest['is_invited_evening']); ?></td>
				<td headers="is_child"><?= convertIntBooleanToString($guest['is_child']); ?></td>
			</tr>
	</table>
<?php endforeach; ?>

<?php include('layout/postcontent.inc.php'); ?>
