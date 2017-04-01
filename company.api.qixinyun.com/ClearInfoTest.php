<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 //$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 $response = $client->request('GET', 'clearInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'clearInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'clearInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"clearInfos",
                            "attributes"=>array("name"=>"namenamename",
                                                "members"=>"membersmembers",
                                                "maxClearCount"=>12,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'clearInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"clearInfos",
                            "attributes"=>array("name"=>"namenamename",
                                                "members"=>"membersmembers",
                                                "maxClearCount"=>12,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'clearInfos/1',
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
            "meta": {
                "count": 1
            },
            "links": {
                "first": null,
                "last": null,
                "prev": null,
                "next": null
            },
            "data": [
                {
                    "type": "clearInfos",
                    "id": "1",
                    "attributes": {
                        "name": "namename",
                        "members": "membersmembers",
                        "maxClearCount": 12,
                        "status": 0,
                        "statusTime": 0,
                        "updateTime": 0,
                        "createTime": 1487833387
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
                        "self": "127.0.0.1\/clearInfos\/1"
                    }
                }
            ]
        }*/