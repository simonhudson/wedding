<?php
	function getGuest($guestId) {

		include('includes/db.inc.php');

		$query_getGuest =
		"SELECT *
		FROM guest
		INNER JOIN seating
		ON guest.table_id = seating.table_id
		INNER JOIN meal
		ON guest.meal_id = meal.meal_id
		WHERE guest.guest_id=$guestId";

		mysqli_query($db, $query_getGuest) or die('Error querying database. [getGuest]');

		$result_getGuest = mysqli_query($db, $query_getGuest);
		$row_getGuest = mysqli_fetch_array($result_getGuest);

		return $result_getGuest;

	}
?>
