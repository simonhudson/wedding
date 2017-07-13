<?php

	function getGuests() {

		include('includes/db.inc.php');

		$query_getGuests = "SELECT * FROM guest";
		mysqli_query($db, $query_getGuests) or die('Error querying database.');

		$result_getGuests = mysqli_query($db, $query_getGuests);
		$row_getGuests = mysqli_fetch_array($result_getGuests);

		return $result_getGuests;

	}

?>
