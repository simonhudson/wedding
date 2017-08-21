<?php

	function convertDataToJson($data) {
		$rows = array();
		while($r = mysqli_fetch_assoc($data)) {
			$rows[] = $r;
		}
		return json_encode($rows);
	}

?>
