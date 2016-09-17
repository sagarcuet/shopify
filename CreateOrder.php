<?php
$apikey   = 'Your API KEY';
$password = 'Your Passord';
$host     = 'Your Shopify API host';
$baseUrl = 'https://'.$apikey.':'.$password.'@'.$host.'/admin/';

$order_array = array(
    "order"=>array('line_items'=> 
	    	    array(
		    		array(
		    			//"variant_id"=> '7448770371',
		    			"variant_id"=> '23712810243', // With the ID of the product Not the product_id
        				"quantity"=> '2'
		    			//'title'=> 'Product One', // Use for Alternative product add
		    			//'name'=>  'My product',  // Use for Alternative product add
		    			//'price'=> '5.00'         // Use for Alternative product add

		    		)
    		)
       )
);
echo json_encode($order_array);
echo "<br />";
$url = $baseUrl."orders.json";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json','Accept-Encoding: gzip, deflate','Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($order_array));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec ($curl);
curl_close ($curl);
//echo "<pre>";
print_r($response); 
//echo '</pre>';
?>
