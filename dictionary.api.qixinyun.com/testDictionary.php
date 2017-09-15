<?php

require '../vendor/autoload.php';

//$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'dictionaries/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'dictionaries/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'dictionaries?filter[categoryId]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

/*$response = $client->request('GET', 'dictionaries/30',
    [
    'headers'        => [
                        'Accept-Encoding' => 'gzip',
                        'Content-' => 'application/vnd.api+json',
                        'If-None-Match' => 'bab22a9df03b4ea6ea8e25d6cfe55524' 
                        ],
    'decode_content' => true
    ]
);*/

//add -- 开始
/*$data = array("data"=>array("type"=>"dictionaries",
                            "attributes"=>array("name"=>"nSSSSame4555",
                                                "value"=>10,
                                                "categoryId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'dictionaries',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"dictionaries",
//                             "attributes"=>array("name"=>"name1",
//                                                 "value"=>0
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'dictionaries/3',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//edit -- 结束

//delete
// $response = $client->request('DELETE', 'dictionaries/1',
//  [
//  'haders'=>['Content-' => 'application/vnd.api+json']
//  ]);
//delete

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();


echo "<pre>";
var_dump($status);
print_r($contents);

