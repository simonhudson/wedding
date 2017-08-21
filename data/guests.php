<?php

include('../queries/getGuests.inc.php');
echo getGuests()->json;

?>
