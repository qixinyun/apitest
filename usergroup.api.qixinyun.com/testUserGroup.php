<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8004/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'usergroups/11',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'usergroups/1,2,3',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'usergroups?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
// $data = array("data"=>array("type"=>"usergroups",
//                             "attributes"=>array("name"=>"usergroup44",
//                                                 "category"=>1,
//                                                 'parentId'=>0,
//                                                 'userGroupType'=>1,
//                                                 'jirisdictionAreaIds'=>array(),
//                                                 'businessAreaIds'=>array()
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'usergroups',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"usergroups",
//                             "attributes"=>array("name"=>"usergroup122",
//                                                 'userGroupType'=>1,
//                                                 'jirisdictionAreaIds'=>array(1, 2),
//                                                 'businessAreaIds'=>array(1, 2)
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'usergroups/11',
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

