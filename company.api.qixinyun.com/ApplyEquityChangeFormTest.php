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
 //$response = $client->request('GET', 'applyEquityChangeForms/8,9',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyEquityChangeForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyEquityChangeForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyEquityChangeForms",
                            "attributes"=>array("beforeChangeEquityRatio"=>"55555beforeChangeEquityRatio",
                                                "afterhangeEquityRatio"=>"55555afterhangeEquityRatio",
                                                "date"=>"2000-01-01",
                                                "executor"=>"5555executor",
                                                "equityAmount"=>"5555equityAmount",
                                                "assignee"=>"5555assignee",
                                                "court"=>"5555court",
                                                "content"=>"5555contentcontent",
                                                "shareholderId"=>1,
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                               // "equityChangeId"=>5
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyEquityChangeForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyEquityChangeForms",
                            "attributes"=>array("beforeChangeEquityRatio"=>"777beforeChangeEquityRatio",
                                                "afterhangeEquityRatio"=>"777afterhangeEquityRatio",
                                                "date"=>"2013-01-01",
                                                "executor"=>"777executor",
                                                "equityAmount"=>"e777quityAmount",
                                                "assignee"=>"777assignee",
                                                "court"=>"777court",
                                                "content"=>"777contentcontent"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyEquityChangeForms/180',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//edit -- 结束


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();


echo "<pre>";
print_r($status);
print_r($contents);

/*{
    "meta": [],
    "data": {
        "type": "applyEquityChangeForms",
        "id": "180",
        "attributes": {
            "userIdentification": 1,
            "beforeChangeequityRatio": "777beforeChangeEquityRatio",
            "afterhangeequityRatio": "777afterhangeEquityRatio",
            "date": "2013-01-01",
            "executor": "777executor",
            "equityAmount": "e777quityAmount",
            "assignee": "777assignee",
            "court": "777court",
            "content": "777contentcontent",
            "shareholder": 1,
            "company": 1,
            "equityChangeId": 5,
            "status": 0,
            "statusTime": 1496629334,
            "updateTime": 1496629334,
            "createTime": 1496629115
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
            "self": "127.0.0.1\/applyEquityChangeForms\/180"
        }
    }
}*/