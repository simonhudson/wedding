<?php
	function getTable($tableId) {

		include('includes/db.inc.php');

		$query_getTable =
		"SELECT *
		FROM guest
		WHERE guest.table_id=$tableId";

		mysqli_query($db, $query_getTable) or die('Error querying database. [getTable]');

		$result_getTable = mysqli_query($db, $query_getTable);
		$row_getTable = mysqli_fetch_array($result_getTable);

		return (object) array(
			'data' => $result_getTable,
			'count' => mysqli_num_rows($result_getTable)
		);

	}
?>
