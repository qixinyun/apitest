<?php
require '../vendor/autoload.php';

//139.224.65.136:8004

$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'usergroups/11',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'usergroups/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"usergroups",
                            "attributes"=>array("name"=>"usergroup1",
                                                "category"=>1,
                                                'parentId'=>0,
                                                'type'=>1,
                                                'jirisdictionAreaIds'=>array(3, 52, 500),
                                                'businessAreaIds'=>array(4, 52, 501)
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'usergroups',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"usergroups",
//                             "attributes"=>array("name"=>"usergroup122",
//                                                 'type'=>1,
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

echo "<pre>";
print_r($contents);

