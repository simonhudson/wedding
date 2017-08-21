<?php

	function formatDateTime() {
		$string = '';
		foreach (getDateTime()->data as $dateTime) {
			$string = date('l jS F Y g:i a', strtotime($dateTime['date_time']));
		}
		return $string;
	}

?>
