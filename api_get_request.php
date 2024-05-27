<?php
$end_point = "http://...";
        
        //get api request
        $curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $end_point,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
  "Authorization: Basic Token" //optional
    ),
    ));

$response = curl_exec($curl);
$json_obj   = json_decode($response);
// Close cURL session
curl_close($curl);
?>
