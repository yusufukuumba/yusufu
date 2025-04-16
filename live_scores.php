<?php
$api_url = 'https://api.football-data.org/v2/matches';
$token = 'b7c61c10c369400fab31c98686b660c6';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'X-Auth-Token: ' . $token
));

$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
?>