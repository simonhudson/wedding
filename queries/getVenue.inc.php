<?php
	function getVenue() {

		include('db.inc.php');

		$query_getVenue =
		"SELECT *
		FROM venue";

		mysqli_query($db, $query_getVenue) or die('Error querying database. [getVenue]');

		$result_getVenue = mysqli_query($db, $query_getVenue);
		$row_getVenue = mysqli_fetch_array($result_getVenue);

		return (object) array(
			'data' => $result_getVenue,
			'count' => mysqli_num_rows($result_getVenue)
		);

	}
?>
