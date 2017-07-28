<?php include('layout/precontent.inc.php'); ?>

<section class="section">
	<div class="wrap section__wrap">

		<?= pageHeader('Guests ('.getGuests()->count.')'); ?>

		<?php include('includes/controls/controls.inc.php'); ?>

		<table class="table guests-table">
			<thead>
				<tr>
					<th id="guest_name">Name</th>
					<th id="relationship">Relationship</th>
					<th id="is_child">Child</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach (getGuests()->data as $guest): ?>
					<tr>
						<td headers="guest_name"><?= renderData($guest['first_name']); ?> <?= renderData($guest['last_name']); ?></td>
						<td headers="relationship"><?= renderData($guest['relationship']); ?></td>
						<td headers="is_child"><?= renderData(convertIntBooleanToYesNo($guest['is_child'])); ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>
</section>

<?php include('layout/postcontent.inc.php'); ?>
