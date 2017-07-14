<?php include('layout/precontent.inc.php'); ?>

<?php $guestId = $_GET['guestId']; ?>

<h1>Guest</h1>

<?php foreach (getGuest($guestId) as $guest): ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th id="guest_name">Name</th>
				<th id="relationship">Relationship</th>
				<th id="is_invited_day">Day invite</th>
				<th id="is_invited_evening">Evening invite</th>
				<th id="is_child">Child</th>
				<th id="seating">Seating</th>
				<th id="meal">Meal</th>
			</tr>
		</thead>
			<tr>
				<td headers="guest_name"><?= $guest['first_name']. ' '. $guest['last_name']; ?></td>
				<td headers="relationship"><?= $guest['relationship']; ?></td>
				<td headers="is_invited_day"><?= convertIntBooleanToYesNo($guest['is_invited_day']); ?></td>
				<td headers="is_invited_evening"><?= convertIntBooleanToYesNo($guest['is_invited_evening']); ?></td>
				<td headers="is_child"><?= convertIntBooleanToYesNo($guest['is_child']); ?></td>
				<td headers="seating"><a href="seating.php#table-<?= $guest['table_id']; ?>"><?= $guest['table_name']; ?></a></td>
				<td headers="meal"><?= $guest['meal_description']; ?></td>
			</tr>
	</table>
<?php endforeach; ?>

<?php include('layout/postcontent.inc.php'); ?>
