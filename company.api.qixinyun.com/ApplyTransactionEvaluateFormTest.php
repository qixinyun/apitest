<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applyTransactionEvaluateForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyTransactionEvaluateForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyTransactionEvaluateForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyTransactionEvaluateForms",
                            "attributes"=>array("appraiser"=>"评价人",
                                                "date"=>"2020-02-02",
                                                "content"=>'评价内容',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyTransactionEvaluateForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyTransactionEvaluateForms",
                            "attributes"=>array("appraiser"=>"11评价人",
                                                "date"=>"2010-02-02",
                                                "content"=>'111评价内容'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyTransactionEvaluateForms/1',
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
        "type": "applyTransactionEvaluateForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "appraiser": "\u8bc4\u4ef7\u4eba",
            "date": "2020-02-02",
            "content": "\u8bc4\u4ef7\u5185\u5bb9",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488946495
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
            "self": "127.0.0.1\/applyTransactionEvaluateForms\/1"
        }
    }
}*/