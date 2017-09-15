<?php

require '../vendor/autoload.php';

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'categories/11',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'categories/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'categories?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);
//add -- 开始
/*$data = array("data"=>array("type"=>"categories",
                            "attributes"=>array("name"=>"wedcsdvc",
                                                "parentId"=>1,
                                                "code"=>11112541
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'categories',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"categories",
//                             "attributes"=>array("name"=>"name1",
//                                                 "code"=>"value1"
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'categories/1',
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

