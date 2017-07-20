<?php

	function getDateTime() {

		include('includes/db.inc.php');

		$query_getDateTime =
		"SELECT *
		FROM datetime";

		mysqli_query($db, $query_getDateTime) or die('Error querying database [getDateTime].');

		$result_getDateTime = mysqli_query($db, $query_getDateTime);
		$row_getDateTime = mysqli_fetch_array($result_getDateTime);

		return $result_getDateTime;

	}

?>
