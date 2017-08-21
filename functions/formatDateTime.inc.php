<?php

	function formatDateTime() {
		$string = '';
		foreach (getDateTime()->data as $dateTime) {
			$string = date('l jS F Y g:i A', strtotime($dateTime['date_time']));
		}
		return $string;
	}

?>
