<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8005/']);
//$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);
$response = $client->request('GET', 'templates/1',['haders'=>['Content-' > 'application/vnd.api+json']]);

//save
//$data = array("data"=>array("type"=>"templates",
//                                    "attributes"=>array("purviewList"=>array(
//                                    						array(
//                                    							'type'=>1,
//                                                                'category'=>1,
//                                    							'code'=>'code1',
//                                    							'name'=>'测试复选框',
//                                    							'description'=>'测试复选框描述',
//                                    							'options'=>array(
//                                    								'option1'=>'value1',
//                                    								'option2'=>'value2'
//                                    							)
//                                    						),
//                                    						array(
//                                    							'type'=>2,
//                                                                'category'=>1,
//                                    							'code'=>'code2',
//                                    							'name'=>'测试radio',
//                                    							'description'=>'测试radio描述',
//                                    							'options'=>array(
//                                    								'option1'=>'value1',
//                                    								'option2'=>'value2'
//                                    							)
//                                    						),  
//                                    						array(
//                                    							'type'=>3,
//                                                                'category'=>1,
//                                    							'code'=>'code3',
//                                    							'name'=>'测试selec3',
//                                    							'description'=>'测试select描述',
//                                    							'options'=>array(
//                                    								'option1'=>'value1',
//                                    								'option2'=>'value2'
//                                    							)
//                                    						),                                             
//                                    						array(
//                                    							'type'=>4,
//                                                                'category'=>1,
//                                    							'code'=>'code4',
//                                    							'name'=>'测试range',
//                                    							'description'=>'测试radio描述',
//                                    							'options'=>array(
//                                    								'min'=>11,
//                                    								'max'=>22
//                                    							)
//                                    						)            			
//                                    					)
//                                                    )
//                                       )
//                          );
//
//$response = $client->request(
//                'POST',
//                'templates/1',
//                [
//                'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                'json' => $data
//                ]
//            );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);
