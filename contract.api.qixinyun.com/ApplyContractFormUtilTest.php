<?php
namespace Product;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8007/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'applyContractForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyContractForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyContractForms?filter[userGroupId]=10&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"applyContractForms",
                            "attributes"=>array("name"=>"contractName",
                                                "validityStart"=>'2017-01-18',
                                                "validityEnd"=>'2027-01-18',
                                                "category"=>1,
                                                "price"=>10.2,
                                                "companyId"=>1,
                                                "productId"=>1,
                                                "uid"=>86
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyContractForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyContractForms",
                            "attributes"=>array("name"=>"contractNameqqq",
                                                "validityStart"=>'2017-01-28',
                                                "validityEnd"=>'2027-01-28',
                                                "category"=>2,
                                                "price"=>10.25,
                                                "productId"=>1
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyContractForms/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
//edit -- 结束

echo "<pre>";
print_r($status);
print_r($contents);