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
                            "attributes"=>array("category"=>12,
                                                "beforeRevocationInfo"=>"11111beforeRevocationInfo",
                                                "afterRevocationInfo"=>"11111afterRevocationInfo",
                                                "companyId"=>12,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                               // "revocationInfoId"=>4
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
$data = array("data"=>array("type"=>"applyRevocationInfoForms",
                            "attributes"=>array("category"=>22,
                                                "beforeRevocationInfo"=>"222212beforeRevocationInfo",
                                                "afterRevocationInfo"=>"22212afterRevocationInfo",
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyRevocationInfoForms/184',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

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
        "id": "184",
        "attributes": {
            "userIdentification": 1,
            "category": 22,
            "beforeRevocationInfo": "222212beforeRevocationInfo",
            "afterRevocationInfo": "22212afterRevocationInfo",
            "company": 12,
            "revocationInfoId": 4,
            "status": 0,
            "statusTime": 1496630853,
            "updateTime": 1496630853,
            "createTime": 1496630765
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "152"
                }
            },
            "companies": {
                "data": {
                    "type": "companies",
                    "id": "12"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyRevocationInfoForms\/184"
        }
    }
}*/