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
 $response = $client->request('GET', 'applyClearInfoForms/163?include=companies&fields[companies]=name,principalRealName',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyClearInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyClearInfoForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyClearInfoForms",
                            "attributes"=>array("name"=>"11editname",
                                                "members"=>"11editmembers",
                                                "maxClearCount"=>120,
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                //"clearInfoId"=>4
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyClearInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyClearInfoForms",
                            "attributes"=>array("name"=>"22211editname",
                                                "members"=>"22211editmembers",
                                                "maxClearCount"=>110
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyClearInfoForms/163',
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
        "type": "applyClearInfoForms",
        "id": "163",
        "attributes": {
            "userIdentification": 1,
            "name": "11editname",
            "members": "11editmembers",
            "maxClearCount": 120,
            "company": 1,
            "clearInfoId": 4,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1496204107
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "152"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyClearInfoForms\/163"
        }
    }
}*/