<?php include('layout/precontent.inc.php'); ?>

<?php
$totalInvitedGuests = mysqli_num_rows(getGuests());
$numberFamily = mysqli_num_rows(getRelationship('Family'));
$numberFriend = mysqli_num_rows(getRelationship('Friend'));
$numberChildren = mysqli_num_rows(getChildren());
?>

<?= pageHeader('Guests ('.$totalInvitedGuests.')'); ?>

<div class="form-inline well well-lg">
	<div class="form-group">
		<label for="guests-filter">Filter</label>
		<select class="form-control js-filter" data-data-source="guests-table" id="guests-filter">
			<option>Show all</option>
			<optgroup label="Relationship">
				<option data-filter-by="relationship" value="Family">Family&nbsp;(<?= $numberFamily; ?>)</option>
				<option data-filter-by="relationship" value="Friend">Friend&nbsp;(<?= $numberFriend; ?>)</option>
				<option data-filter-by="is_child" value="Yes">Children&nbsp;(<?= $numberChildren; ?>)</option>
			</optgroup>
			<optgroup label="Invitation">
				<option data-filter-by="is_invited_day" value="Yes">Day invite</option>
				<option data-filter-by="is_invited_evening" value="Yes">Evening invite</option>
			</optgroup>
			<optgroup label="Meal choice">
				<?php foreach (getMeals() as $meal): ?>
					<option data-filter-by="meal" value="<?= renderData($meal['meal_description']); ?>"><?= renderData($meal['meal_description']); ?></option>
				<?php endforeach; ?>
			</optgroup>
		</select>
		<div class="form-group">
			<label for="guests-live-search">Search by name</label>
			<input class="form-control js-live-search" data-data-source="guests-table" data-search-on="guest_name" id="guests-live-search" type="text" />
		</div>
	</div>
</div>

<table class="table guests-table">
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
				<td headers="guest_name"><?= renderData($guest['first_name']); ?> <?= renderData($guest['last_name']); ?></td>
				<td headers="relationship"><?= renderData($guest['relationship']); ?></td>
				<td headers="is_invited_day"><?= renderData(convertIntBooleanToYesNo($guest['is_invited_day'])); ?></td>
				<td headers="is_invited_evening"><?= renderData(convertIntBooleanToYesNo($guest['is_invited_evening'])); ?></td>
				<td headers="is_child"><?= renderData(convertIntBooleanToYesNo($guest['is_child'])); ?></td>
				<td headers="seating"><a href="seating.php?table=<?= renderData($guest['table_id']); ?>"><?= renderData($guest['table_name']); ?></a></td>
				<td headers="meal"><?= renderData($guest['meal_description']); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php include('layout/postcontent.inc.php'); ?>
