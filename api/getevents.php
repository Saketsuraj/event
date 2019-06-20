<?php
    $output = file_get_contents('https://www.eventbriteapi.com/v3/events/search/?sort_by=date&user.id=userid&token=token');
    echo $output;
?>