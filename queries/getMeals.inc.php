<?php

	function getMeals() {

		include('includes/db.inc.php');

		$query_getMeals =
		"SELECT *
		FROM meal";

		mysqli_query($db, $query_getMeals) or die('Error querying database [getGuests].');

		$result_getMeals = mysqli_query($db, $query_getMeals);
		$row_getMeals = mysqli_fetch_array($result_getMeals);

		return $result_getMeals;

	}

?>
