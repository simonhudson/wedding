<?php
	function getGuest($guestId) {

		include('includes/db.inc.php');

		$query_getGuest = "SELECT * FROM guest WHERE guest_id=$guestId";
		mysqli_query($db, $query_getGuest) or die('Error querying database.');

		$result_getGuest = mysqli_query($db, $query_getGuest);
		$row_getGuest = mysqli_fetch_array($result_getGuest);

		return $result_getGuest;

	}
?>
