<?php
require '../vendor/autoload.php';
$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.104:8006/']);
//$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1:8001/']);

//get 
$response = $client->request('GET', 'operationFlows?filter[roleId]=4&filter[userGroupId]=2&filter[departmentId]=4&filter[sourceApplicationCategory]=6&filter[status]=0',['haders'=>['Content-' => 'application/vnd.api+json']]);

//$data = array("data"=>array("type"=>"operationFlows",
//                            "attributes"=>array(
//                                                'content'=>['审批通过']
//                                               )
//                           )
//              );
//$response = $client->request(
//                'PUT',
//                'operationFlows/777/approve',
//                [
//                'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                'json' => $data
//                ]
//            );
//approve
//confirm
//decline

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
var_dump($status);
echo "<pre>";
print_r($contents);
