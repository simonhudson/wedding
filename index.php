<?php include('functions/__import.inc.php'); ?>
<?php include('queries/__import.inc.php'); ?>
<!doctype html>
<html>
	<head>
		<title>Wedding</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="" rel="stylesheet" />
		<style>
		</style>
	</head>
	<body>

		<table>
			<thead>
				<tr>
					<th id="guest_id"></th>
					<th id="guest_name">Name</th>
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
					<td headers="is_invited_day"><?= convertIntBooleanToString($guest['is_invited_day']); ?></td>
					<td headers="is_invited_evening"><?= convertIntBooleanToString($guest['is_invited_evening']); ?></td>
					<td headers="is_top_table"><?= convertIntBooleanToString($guest['is_top_table']); ?></td>
					<td headers="is_child"><?= convertIntBooleanToString($guest['is_child']); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>

	<script src=""></script>
	<script>

	</script>
	</body>
</html>
