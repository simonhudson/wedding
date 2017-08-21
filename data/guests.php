<?php

include('../queries/getGuests.inc.php');
include('../functions/convertDataToJson.inc.php');
echo convertDataToJson(getGuests()->data);

?>
