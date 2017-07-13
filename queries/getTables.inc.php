<?php
	function getTables() {

		include('includes/db.inc.php');

		$query_getTables =
		"SELECT *
		FROM seating";

		mysqli_query($db, $query_getTables) or die('Error querying database. [getTables]');

		$result_getTables = mysqli_query($db, $query_getTables);
		$row_getTables = mysqli_fetch_array($result_getTables);

		return $result_getTables;

	}
?>
