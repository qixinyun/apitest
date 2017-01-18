<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1:8001/']);

//get 
$response = $client->request('GET', 'workflows/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'workflows?filter[userGroupId]=3&filter[category]=2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'workflows?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"workflows",
                            "attributes"=>array("userGroupId"=>1,
                                                "category"=>3,
                                                'nodeList'=>array(
                                                		array(
                                                			'userGroupId'=>2,
                                                			'departmentId'=>1,
                                                			'category'=>0,
                                                			'roleId'=>1,
                                                		),
                                                		array(
                                                			'userGroupId'=>2,
                                                			'departmentId'=>1,
                                                			'category'=>0,
                                                			'roleId'=>1
                                                		),    
                                                		array(
                                                			'userGroupId'=>4,
                                                			'departmentId'=>2,
                                                			'category'=>2,
                                                			'roleId'=>2
                                                		),                                              		
                                                	)
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'workflows',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"workflows",
//                             "attributes"=>array(
//                                                 'nodeList'=>array(
//                                                 		array(
//                                                 			'userGroupId'=>5,
//                                                 			'departmentId'=>1,
//                                                 			'category'=>0,
//                                                 			'roleId'=>1,
//                                                 		),
//                                                 		array(
//                                                 			'userGroupId'=>5,
//                                                 			'departmentId'=>1,
//                                                 			'category'=>0,
//                                                 			'roleId'=>1
//                                                 		),    
//                                                 		array(
//                                                 			'userGroupId'=>2,
//                                                 			'departmentId'=>2,
//                                                 			'category'=>2,
//                                                 			'roleId'=>2
//                                                 		),                                              		
//                                                 	)
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'workflows/1',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//edit -- 结束

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
var_dump($status);
echo "<pre>";
print_r($contents);