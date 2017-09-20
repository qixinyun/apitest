<?php

require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8005/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

// $response = $client->request('GET', 'logs?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add
$data = array("data"=>array("type"=>"logs",
                            "attributes"=>array(
                            					"source"=>array(
                            						"category"=>2,
                                                	"type"=>3,
                                                	"sourceId"=>1111
                                                ),
                                                "content"=>array('a'=>'asas','b'=>3)
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'logs',
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
