<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applyRevocationInfoForms/31,32',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyRevocationInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyRevocationInfoForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyRevocationInfoForms",
                            "attributes"=>array("category"=>1,
                                                "beforeRevocationInfo"=>"beforeRevocationInfo",
                                                "afterRevocationInfo"=>"afterRevocationInfo",
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyRevocationInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyRevocationInfoForms",
                            "attributes"=>array("category"=>12,
                                                "beforeRevocationInfo"=>"12beforeRevocationInfo",
                                                "afterRevocationInfo"=>"12afterRevocationInfo",
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyRevocationInfoForms/32',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//edit -- 结束



$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($status);
print_r($contents);

/*{
    "meta": [],
    "data": {
        "type": "applyRevocationInfoForms",
        "id": "32",
        "attributes": {
            "userIdentification": 1,
            "category": 1,
            "beforeRevocationInfo": "beforeRevocationInfo",
            "afterRevocationInfo": "afterRevocationInfo",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1492661986
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyRevocationInfoForms\/32"
        }
    }
}*/