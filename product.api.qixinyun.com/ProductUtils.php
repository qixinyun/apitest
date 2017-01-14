<?php
namespace Product;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8007/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'products/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'products/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'products?filter[userGroupId]=10&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"products",
                            "attributes"=>array("name"=>"productName",
                                                "price"=>10.2,
                                                "category"=>0,
                                                "userGroupId"=>10,
                                                "departmentId"=>2,
                                                "content"=>array(
                                                            '产品内容'
                                                        ),
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'products',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"products",
//                             "attributes"=>array(
//                                                 "name"=>"name3333",
//                                                 "price"=>100.1,
//                                                 "content"=>array(
//                                                             '产品内容'
//                                                         ),
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'products/2',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
//edit -- 结束

echo "<pre>";
print_r($status);
print_r($contents);