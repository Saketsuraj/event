<?php
    $ch = curl_init();
    curl_setopt_array(
        $ch, array(
        CURLOPT_URL => 'https://www.eventbrite.com/oauth/authorize',
        CURLOPT_RETURNTRANSFER => true
    ));
        
    $output = curl_exec($ch);
    var_dump($output);
?>