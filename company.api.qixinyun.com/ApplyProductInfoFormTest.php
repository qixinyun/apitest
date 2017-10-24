<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[name]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
 $response = $client->request('GET', 'applyProductInfoForms/200?include=companies&fields[companies]=name,principalRealName,category,certificate',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyProductInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyProductInfoForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyProductInfoForms",
                            "attributes"=>array("name"=>"555enamename",
                                                "description"=>'555description',
                                                "url"=>'http://www.baidu.com',
                                                "logo"=>'5551logologologo',
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                "productInfoId"=>5
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyProductInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyProductInfoForms",
                            "attributes"=>array("name"=>"23editnamennamenamenamename",
                                                "description"=>'23editdescription',
                                                "url"=>'https://www.baidu.com',
                                                "logo"=>'23editlogologologo',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyProductInfoForms/200',
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
        "type": "applyProductInfoForms",
        "id": "200",
        "attributes": {
            "userIdentification": 1,
            "name": "23editnamennamenamenamename",
            "description": "23editdescription",
            "url": "https:\/\/www.baidu.com",
            "logo": "23editlogologologo",
            "company": 1,
            "productInfoId": 5,
            "status": 0,
            "statusTime": 1497239807,
            "updateTime": 1497239807,
            "createTime": 1497239717
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
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyProductInfoForms\/200"
        }
    }
}*/