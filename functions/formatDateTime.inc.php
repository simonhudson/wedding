<?php

	function formatDateTime() {
		$string = '';
		foreach (getDateTime()->data as $dateTime) {
			$string = date('l jS F Y g:ia', strtotime($dateTime['date_time']));
		}
		return $string;
	}

?>
