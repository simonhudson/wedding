<?php
	function getTables($tableId) {

		include('includes/db.inc.php');

		if ($tableId) {
			$query_getTables =
			"SELECT *
			FROM seating
			WHERE seating.table_id=$tableId";
		} else {
			$query_getTables =
			"SELECT *
			FROM seating";
		}

		mysqli_query($db, $query_getTables) or die('Error querying database. [getTables]');

		$result_getTables = mysqli_query($db, $query_getTables);
		$row_getTables = mysqli_fetch_array($result_getTables);

		return (object) array(
			'data' => $result_getTables,
			'count' => mysqli_num_rows($result_getTables)
		);

	}
?>
