<?php include('layout/precontent.inc.php'); ?>

<?php $totalInvitedGuests = mysqli_num_rows(getGuests()); ?>

<?= pageHeader('Guests ('.$totalInvitedGuests.')'); ?>

<div class="form-inline">
	<div class="form-group">
		<label for="guests-filter">Filter</label>
		<select class="form-control js-filter" data-data-source="guests-table" id="guests-filter">
			<option>Show all</option>
			<optgroup label="Relationship">
				<option data-filter-by="relationship" value="Family">Family</option>
				<option data-filter-by="relationship" value="Friend">Friend</option>
				<option data-filter-by="is_child" value="Yes">Children</option>
			</optgroup>
			<optgroup label="Invitation">
				<option data-filter-by="is_invited_day" value="Yes">Day invite</option>
				<option data-filter-by="is_invited_evening" value="Yes">Evening invite</option>
			</optgroup>
			<optgroup label="Meal choice">
				<option data-filter-by="meal" value="Chicken">Chicken</option>
				<option data-filter-by="meal" value="Fish">Fish</option>
				<option data-filter-by="meal" value="Vegetarian">Vegetarian</option>
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
				<td headers="guest_name"><?php if (isset($guest['first_name'])): ?><?= $guest['first_name']. ' '. $guest['last_name']; ?><?php endif; ?></td>
				<td headers="relationship"><?php if (isset($guest['first_name'])): ?><?= $guest['relationship']; ?><?php endif; ?></td>
				<td headers="is_invited_day"><?php if (isset($guest['first_name'])): ?><?= convertIntBooleanToYesNo($guest['is_invited_day']); ?><?php endif; ?></td>
				<td headers="is_invited_evening"><?php if (isset($guest['first_name'])): ?><?= convertIntBooleanToYesNo($guest['is_invited_evening']); ?><?php endif; ?></td>
				<td headers="is_child"><?php if (isset($guest['first_name'])): ?><?= convertIntBooleanToYesNo($guest['is_child']); ?><?php endif; ?></td>
				<td headers="seating"><?php if (isset($guest['first_name'])): ?><a href="seating.php#table-<?= $guest['table_id']; ?>"><?= $guest['table_name']; ?></a><?php endif; ?></td>
				<td headers="meal"><?php if (isset($guest['first_name'])): ?><?= $guest['meal_description']; ?><?php endif; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php include('layout/postcontent.inc.php'); ?>
