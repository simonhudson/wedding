<?php

	function formatDateTime() {
		$string = '';
		foreach (getDateTime() as $dateTime) {
			$string = date('D j M Y g:i A', strtotime($dateTime['date_time']));
		}
		return $string;
	}

?>
