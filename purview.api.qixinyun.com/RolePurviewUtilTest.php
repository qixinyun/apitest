<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);
// $response = $client->request('GET', 'rolePurviews/1',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add
// $data = array("data"=>array("type"=>"rolePurviews",
//                                     "attributes"=>array("platformId"=>1,
//                                     					"roleId"=>2,
//                                     					"purviewResultList"=>array(
//                                     						'code1'=>array('value1'),'code2'=>'value1','code3'=>'value2','code4'=>15
//                                     					)
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
$data = array("data"=>array("type"=>"rolePurviews",
                                    "attributes"=>array(
                                    					"purviewResultList"=>array(
                                    						'code1'=>array('value1'),'code2'=>'value1','code3'=>'value2','code4'=>15
                                    					)
                                                    )
                                       )
                          );

$response = $client->request(
                'PUT',
                'rolePurviews/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);