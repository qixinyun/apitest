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
 //$response = $client->request('GET', 'applyClearInfoForms/8,9',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyClearInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyClearInfoForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyClearInfoForms",
                            "attributes"=>array("name"=>"11122namenamename",
                                                "members"=>"11122membersmembers",
                                                "maxClearCount"=>122,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
                            "attributes"=>array("name"=>"27namenamename",
                                                "members"=>"27membersmembers",
                                                "maxClearCount"=>127
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyClearInfoForms/27',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

$response = $client->request(
                'PUT',
                'applyClearInfoForms/28/decline',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );

/*$response = $client->request(
                'PUT',
                'applyClearInfoForms/27/approve',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
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
        "type": "applyClearInfoForms",
        "id": "27",
        "attributes": {
            "userIdentification": 1,
            "name": "27namenamename",
            "members": "27membersmembers",
            "maxClearCount": 127,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1492599816
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
            "self": "127.0.0.1\/applyClearInfoForms\/27"
        }
    }
}*/