<?php

	function getDateTime() {

		include('db.inc.php');

		$query_getDateTime =
		"SELECT *
		FROM datetime";

		mysqli_query($db, $query_getDateTime) or die('Error querying database [getDateTime].');

		$result_getDateTime = mysqli_query($db, $query_getDateTime);

		return (object) array(
			'data' => $result_getDateTime,
			'count' => mysqli_num_rows($result_getDateTime)
		);

	}

?>
