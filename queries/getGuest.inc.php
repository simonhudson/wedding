<?php

	function getGuest($guestId) {

		include('db.inc.php');

		$query_getGuest =
		"SELECT *
		FROM guest
		WHERE guest.guest_id=$guestId";

		mysqli_query($db, $query_getGuest) or die('Error querying database. [getGuest]');

		$result_getGuest = mysqli_query($db, $query_getGuest);
		$row_getGuest = mysqli_fetch_array($result_getGuest);

		return (object) array(
			'data' => $result_getGuest,
			'count' => mysqli_num_rows($result_getGuest)
		);

	}
?>
