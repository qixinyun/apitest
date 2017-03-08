<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'transactionEvaluates',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'transactionEvaluates/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'transactionEvaluates?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"transactionEvaluates",
                            "attributes"=>array("appraiser"=>"评价人",
                                                "date"=>"2020-02-02",
                                                "content"=>'评价内容',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'transactionEvaluates',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"transactionEvaluates",
                            "attributes"=>array("appraiser"=>"评价人111",
                                                "date"=>"2027-02-02",
                                                "content"=>'评价内容111',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'transactionEvaluates/1',
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
        "type": "transactionEvaluates",
        "id": "1",
        "attributes": {
            "appraiser": "\u8bc4\u4ef7\u4eba",
            "date": "2020-02-02",
            "content": "\u8bc4\u4ef7\u5185\u5bb9",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488942726
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
            "self": "127.0.0.1\/transactionEvaluates\/1"
        }
    }
}*/