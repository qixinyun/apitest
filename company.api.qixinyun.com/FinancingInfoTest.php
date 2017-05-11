<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 $response = $client->request('GET', 'financingInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'financingInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'financingInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"financingInfos",
                            "attributes"=>array("date"=>'2009-05-05',
                                                "stage"=>1234,
                                                "money"=>123,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'financingInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"financingInfos",
                            "attributes"=>array("date"=>'2019-05-05',
                                                "stage"=>1451,
                                                "money"=>145
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'financingInfos/1',
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
        "type": "financingInfos",
        "id": "1",
        "attributes": {
            "date": "2009-05-05",
            "stage": 1234,
            "money": 123,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1494493175
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
            "self": "127.0.0.1\/financingInfos\/1"
        }
    }
}*/