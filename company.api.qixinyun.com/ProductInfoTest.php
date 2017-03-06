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
// $response = $client->request('GET', 'productInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'productInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'productInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"productInfos",
                            "attributes"=>array("name"=>"namenamename",
                                                "description"=>'description',
                                                "url"=>'hettp://www.baidu.com',
                                                "logo"=>'logologologo',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'productInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"productInfos",
                            "attributes"=>array("name"=>"namenamename111",
                                                "description"=>'description111',
                                                "url"=>'https://www.baidu.com',
                                                "logo"=>'logologologo11',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'productInfos/1',
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
        "type": "productInfos",
        "id": "1",
        "attributes": {
            "name": "namenamename",
            "description": "description",
            "url": "hettp:\/\/www.baidu.com",
            "logo": "logologologo",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488788600
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
            "self": "127.0.0.1\/productInfos\/1"
        }
    }
}*/