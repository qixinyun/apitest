<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[name]
 //filter[category]
 //filter[company]
 $response = $client->request('GET', 'brandInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'brandInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'brandInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"brandInfos",
                            "attributes"=>array("name"=>"namenamename",
                                                "category"=>1,
                                                "fillingTime"=>'2029-05-05',
                                                "logo"=>'logologologo',
                                                "status"=>0,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'brandInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"brandInfos",
                            "attributes"=>array("name"=>"namenamename111",
                                                "category"=>2,
                                                "fillingTime"=>'2029-05-05',
                                                "logo"=>'logologologo111',
                                                "status"=>-2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'brandInfos/1',
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
        "type": "brandInfos",
        "id": "2",
        "attributes": {
            "name": "namenamename",
            "category": 1,
            "fillingTime": "2029-05-05",
            "logo": "logologologo",
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
            "self": "127.0.0.1\/brandInfos\/2"
        }
    }
}*/