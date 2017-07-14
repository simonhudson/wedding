<?php

	function getGuests() {

		include('includes/db.inc.php');

		$query_getGuests =
		"SELECT *
		FROM guest
		INNER JOIN seating
		ON guest.table_id = seating.table_id
		INNER JOIN meal
		ON guest.meal_id = meal.meal_id
		ORDER BY guest.guest_id ASC";

		mysqli_query($db, $query_getGuests) or die('Error querying database [getGuests].');

		$result_getGuests = mysqli_query($db, $query_getGuests);
		$row_getGuests = mysqli_fetch_array($result_getGuests);

		return $result_getGuests;

	}

?>
