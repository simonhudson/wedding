<?php
	function getSeating() {

		include('includes/db.inc.php');

		$query_getSeating =
		"SELECT *
		FROM seating";
		
		mysqli_query($db, $query_getSeating) or die('Error querying database. [getSeating]');

		$result_getSeating = mysqli_query($db, $query_getSeating);
		$row_getSeating = mysqli_fetch_array($result_getSeating);

		return $result_getSeating;

	}
?>
