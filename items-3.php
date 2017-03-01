<?php
require "common.php"; 
// set up params
$url = 'http://localhost/EShop/index.php?route=api/login'; 
$fields = array(
  //'username' => 'testuser',
  'key' => 'ghOcQKjfnXqBBlxznOLY7cJuULpmuPc76xtSDGeSSV12h0C0FVBSWpd1Qp3ZZEnyhUsVUt2Tn8QKutO1DAZzaS0TGrJBTnsesgBYGEpAyDRo1QvARUnoVWPXpxStTR5BkYfpBAGgNVN2HGjbd12rGa4df76yYgWO6iwgdEWNiUPiPSmXNDJ7aEpAWAoKcOm2V8BDnIGRvNx4XhqZClhNXIFtRg3C8p3reND3qxuchwXqXluHA6GYOnSwBfcx40GP',
);
 
$json = do_curl_request($url, $fields);
$data = json_decode($json);
$token = $data->token;
var_dump($data);
echo '<br/>Login successfully<br/><br/>';
/*---------------------------------------------------*/


$url = 'http://localhost/EShop/index.php?route=api/cart/add&token='.$token;

$fields = array(
  'product_id' => '50',
  'quantity' => '1'
);
 
$json = do_curl_request($url, $fields);
$data = json_decode($json);
var_dump($data);
echo '<br/>Item added...<br/><br/>';
/*---------------------------------------------------*/


// get list of products from the "Cart"
$url = 'http://localhost/EShop/index.php?route=api/cart/products&token='.$token;
$json = do_curl_request($url);
$products_data = json_decode($json);
var_dump($products_data);
echo '<br/>Items displayed...<br/><br/>';

?>