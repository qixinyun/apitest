<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //$response = $client->request('GET', 'revocationInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'revocationInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'revocationInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"revocationInfos",
                            "attributes"=>array("category"=>1,
                                                "beforeRevocationInfo"=>"beforeRevocationInfo",
                                                "afterRevocationInfo"=>"afterRevocationInfo",
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'revocationInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"revocationInfos",
                            "attributes"=>array("category"=>2,
                                                "beforeRevocationInfo"=>"222beforeRevocationInfo",
                                                "afterRevocationInfo"=>"2222afterRevocationInfo",
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'revocationInfos/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
//edit -- 结束

echo "<pre>";
print_r($status);
print_r($contents);

/*{
    "meta": [],
    "data": {
        "type": "revocationInfos",
        "id": "1",
        "attributes": {
            "category": 1,
            "beforeRevocationInfo": "beforeRevocationInfo",
            "afterRevocationInfo": "afterRevocationInfo",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1492660078
        },
        "relationships": {
            "companies": {
                "data": {
                    "type": "companies",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/revocationInfos\/1"
        }
    }
}*/