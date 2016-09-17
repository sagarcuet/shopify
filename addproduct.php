<?php
$apikey   = 'Your API KEY';
$password = 'Your Passord';
$host     = 'Your Shopify API host';
$baseUrl = 'https://'.$apikey.':'.$password.'@'.$host.'/admin/';

$products_array = array(
    "product"=>array(
        "title"=> "test product 151",
        "body_html"=> "Good test product!",
        "vendor"=> "New Vendor",
        "product_type"=> "Extension Cords")
);
echo json_encode($products_array);
echo "<br />";
$url = $baseUrl."products.json";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json','Accept-Encoding: gzip, deflate','Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($products_array));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec ($curl);
curl_close ($curl);
//echo "<pre>";
print_r($response); 
//echo '</pre>';
?>
