<?php

	function getChildren() {

		include('includes/db.inc.php');

		$query_getChildren =
		"SELECT *
		FROM guest
		WHERE guest.is_child";

		mysqli_query($db, $query_getChildren) or die('Error querying database [getChildren].');

		$result_getChildren = mysqli_query($db, $query_getChildren);
		$row_getChildren = mysqli_fetch_array($result_getChildren);

		return (object) array(
			'data' => $result_getChildren,
			'count' => mysqli_num_rows($result_getChildren)
		);

	}

?>
