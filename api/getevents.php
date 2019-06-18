<?php
    $ch = curl_init();
    curl_setopt_array(
        $ch, array(
        CURLOPT_URL => 'https://www.eventbriteapi.com/v3/events/search/?sort_by=date&user.id=userid&token=token',
        CURLOPT_RETURNTRANSFER => true
    ));
        
    $output = curl_exec($ch);
    echo $output;
?>