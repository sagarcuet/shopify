<?php
$apikey   = 'Your API KEY';
$password = 'Your Passord';
$host     = 'Your Shopify API host';
$baseUrl = 'https://'.$apikey.':'.$password.'@'.$host.'/admin/';
$url = $baseUrl."products.json";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec ($curl);
curl_close ($curl);
//echo "<pre>";
print_r($response); 
//echo '</pre>';
?>