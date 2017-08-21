<?php

	function getGuests() {

		include('../functions/convertDataToJson.inc.php');
		include('../includes/db.inc.php');

		$query_getGuests =
		"SELECT *
		FROM guest
		ORDER BY guest.guest_id ASC";

		mysqli_query($db, $query_getGuests) or die('Error querying database [getGuests].');

		$result_getGuests = mysqli_query($db, $query_getGuests);
		$row_getGuests = mysqli_fetch_array($result_getGuests);

		return (object) array(
			'data' => $result_getGuests,
			'count' => mysqli_num_rows($result_getGuests),
			'json' => convertDataToJson($result_getGuests)
		);

	}

?>
