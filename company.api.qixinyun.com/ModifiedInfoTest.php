<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //$response = $client->request('GET', 'modifiedInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'modifiedInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'modifiedInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"modifiedInfos",
                            "attributes"=>array("category"=>1,
                                                "beforeModifiedInfo"=>"beforeModifiedInfo",
                                                "afterModifiedInfo"=>"afterModifiedInfo",
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'modifiedInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"modifiedInfos",
                            "attributes"=>array("category"=>2,
                                                "beforeModifiedInfo"=>"222beforeModifiedInfo",
                                                "afterModifiedInfo"=>"2222afterModifiedInfo",
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'modifiedInfos/2',
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
        "type": "modifiedInfos",
        "id": "2",
        "attributes": {
            "category": 1,
            "beforeModifiedInfo": "beforeModifiedInfo",
            "afterModifiedInfo": "afterModifiedInfo",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1491902530
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
            "self": "127.0.0.1\/modifiedInfos\/2"
        }
    }
}*/