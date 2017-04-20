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
 //$response = $client->request('GET', 'applyModifiedInfoForms/8,9',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyModifiedInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyModifiedInfoForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyModifiedInfoForms",
                            "attributes"=>array("category"=>1,
                                                "beforeModifiedInfo"=>"beforeModifiedInfo",
                                                "afterModifiedInfo"=>"afterModifiedInfo",
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyModifiedInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyModifiedInfoForms",
                            "attributes"=>array("category"=>12,
                                                "beforeModifiedInfo"=>"12beforeModifiedInfo",
                                                "afterModifiedInfo"=>"12afterModifiedInfo",
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyModifiedInfoForms/29',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/



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
        "type": "applyModifiedInfoForms",
        "id": "29",
        "attributes": {
            "userIdentification": 1,
            "category": 12,
            "beforeModifiedInfo": "12beforeModifiedInfo",
            "afterModifiedInfo": "12afterModifiedInfo",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1492656535
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
            "self": "127.0.0.1\/applyModifiedInfoForms\/29"
        }
    }
}*/