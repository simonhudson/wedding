<?php

	function getRelationship($relationship) {

		include('db.inc.php');

		$query_getRelationship =
		"SELECT *
		FROM guest
		WHERE guest.relationship='$relationship'";

		mysqli_query($db, $query_getRelationship) or die('Error querying database [getRelationship].');

		$result_getRelationship = mysqli_query($db, $query_getRelationship);
		$row_getRelationship = mysqli_fetch_array($result_getRelationship);

		return (object) array(
			'data' => $result_getRelationship,
			'count' => mysqli_num_rows($result_getRelationship)
		);

	}

?>
