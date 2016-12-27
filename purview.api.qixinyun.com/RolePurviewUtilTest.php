<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8005/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);
$response = $client->request('GET', 'rolePurviews?filter[platformId]=1&filter[roleId]=41',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'rolePurviews',['haders'=>['Content-' => 'application/vnd.api+json']]);
//add  
// $data = array("data"=>array("type"=>"rolePurviews",
//                                     "attributes"=>array("platformId"=>1,
//                                     					"roleId"=>5,
//                                     					"purviewResultList"=>array(
//                                     						'code1'=>array('value1'),'code2'=>'value1','code3'=>'value2','code4'=>15
//                                     					)
//                                                     )
//                                        )
//                           );

// $data = array("data"=>array("type"=>"rolePurviews",
//                                     "attributes"=>array("platformId"=>1,
//                                                         "roleId"=>1,
//                                                         "purviewResultList"=>array(
//                                                             '101001'=>array('add'),'101002'=>['edit'],'101003'=>['add','edit']
//                                                         )
//                                                     )
//                                        )
//                           );
// $response = $client->request(
//                 'POST',
//                 'rolePurviews',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

//edit
// $data = array("data"=>array("type"=>"rolePurviews",
//                                     "attributes"=>array(
//                                     					"purviewResultList"=>array(
//                                     						'code1'=>array(),'code2'=>'value1','code3'=>'value2','code4'=>15
//                                     					)
//                                                     )
//                                        )
//                           );

// $response = $client->request(
//                 'PUT',
//                 'rolePurviews/platform/1/role/2',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);