<?php include('layout/precontent.inc.php'); ?>

<?php $totalInvitedGuests = mysqli_num_rows(getGuests()); ?>

<?= pageHeader('Guests ('.$totalInvitedGuests.')'); ?>

<div class="row">
	<div class="col-xs-2">
		<select class="form-control js-filter" data-data-source="guests-table">
			<option>Filter by</option>
			<option data-filter-by="relationship" value="Family">Family</option>
			<option data-filter-by="relationship" value="Friend">Friend</option>
			<option data-filter-by="is_invited_day" value="Yes">Day invite</option>
			<option data-filter-by="is_invited_evening" value="Yes">Evening invite</option>
			<option data-filter-by="is_child" value="Yes">Children</option>
		</select>
	</div>
</div>

<table class="table table-striped guests-table">
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
	<tbody>
		<?php foreach (getGuests() as $guest): ?>
			<tr>
				<td headers="guest_name"><?= $guest['first_name']. ' '. $guest['last_name']; ?></td>
				<td headers="relationship"><?= $guest['relationship']; ?></td>
				<td headers="is_invited_day"><?= convertIntBooleanToYesNo($guest['is_invited_day']); ?></td>
				<td headers="is_invited_evening"><?= convertIntBooleanToYesNo($guest['is_invited_evening']); ?></td>
				<td headers="is_child"><?= convertIntBooleanToYesNo($guest['is_child']); ?></td>
				<td headers="seating"><a href="seating.php#table-<?= $guest['table_id']; ?>"><?= $guest['table_name']; ?></a></td>
				<td headers="meal"><?= $guest['meal_description']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php include('layout/postcontent.inc.php'); ?>
