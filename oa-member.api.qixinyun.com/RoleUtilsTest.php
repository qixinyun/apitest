<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'roles/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'roles/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'roles?filter[userGroupId]=1',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
// $data = array("data"=>array("type"=>"roles",
//                             "attributes"=>array("name"=>"roleName1",
//                                                 "userGroupId"=>2,
//                                                 "purview"=>array(1,2,3)
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'roles',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"roles",
//                             "attributes"=>array(
//                                                 "name"=>"name3333",
//                                                 "purview"=>array(1,2,3)
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'roles/3',
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
print_r($contents);

