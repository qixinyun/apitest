<?php
namespace Product;

require '../vendor/autoload.php';
use GuzzleHttp;

 // $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8007/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
/*$response = $client->request('GET', 'products/1',
    [
    'headers'        => [
                        'Accept-Encoding' => 'gzip',
                        'Content-' => 'application/vnd.api+json',
                        'If-None-Match' => 'acbad7a05644d25431a34a1bf28fb455'
                        ],
    'decode_content' => ''
    ]
);*/
// $response = $client->request('GET', 'products/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'products?filter[number]=123454&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"products",
                            "attributes"=>array("name"=>"productName",
                                                "price"=>10.2,
                                                "category"=>0,
                                                "userGroupId"=>10,
                                                "departmentId"=>2,
                                                "content"=>array(
                                                            '产品内容'
                                                        ),
                                                "number"=>'123454446',
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'products',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"products",
                            "attributes"=>array(
                                                "name"=>"name3333",
                                                "price"=>100.1,
                                                "content"=>array(
                                                            '产品内容'
                                                        ),
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'products/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit -- 结束

//enable --开始
$response = $client->request(
                'PUT',
                'products/1/enable',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );
//enable --结束

//disable --开始
/*$response = $client->request(
                'PUT',
                'products/1/disable',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//disable --结束


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();


echo "<pre>";

print_r($status);
print_r($contents);

/*
{
    "meta": [],
    "data": {
        "type": "products",
        "id": "1",
        "attributes": {
            "category": 2,
            "name": "productName",
            "price": 10.2,
            "number": "123456",
            "content": [
                "\u4ea7\u54c1\u5185\u5bb9"
            ],
            "updateTime": 0,
            "createTime": 1505291752,
            "statusTime": 0,
            "status": 0
        },
        "relationships": {
            "userGroup": {
                "data": {
                    "type": "userGroups",
                    "id": "10"
                }
            },
            "department": {
                "data": {
                    "type": "departments",
                    "id": "2"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/products\/1"
        }
    }
}
*/