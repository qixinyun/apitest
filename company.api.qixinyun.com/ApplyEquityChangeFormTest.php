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
                            "attributes"=>array("beforeChangeEquityRatio"=>"beforeChangeEquityRatio",
                                                "afterhangeEquityRatio"=>"afterhangeEquityRatio",
                                                "date"=>"2010-01-01",
                                                "executor"=>"executor",
                                                "equityAmount"=>"equityAmount",
                                                "assignee"=>"assignee",
                                                "court"=>"court",
                                                "content"=>"contentcontent",
                                                "shareholderId"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
                            "attributes"=>array("beforeChangeEquityRatio"=>"33beforeChangeEquityRatio",
                                                "afterhangeEquityRatio"=>"33afterhangeEquityRatio",
                                                "date"=>"2013-01-01",
                                                "executor"=>"33executor",
                                                "equityAmount"=>"e33quityAmount",
                                                "assignee"=>"33assignee",
                                                "court"=>"33court",
                                                "content"=>"33contentcontent"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyEquityChangeForms/33',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//edit -- 结束

/*$response = $client->request(
                'PUT',
                'applyRevocationInfoForms/31/decline',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/

/*$response = $client->request(
                'PUT',
                'applyRevocationInfoForms/32/approve',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/


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
        "id": "33",
        "attributes": {
            "userIdentification": 1,
            "beforeChangeequityRatio": "beforeChangeEquityRatio",
            "afterhangeequityRatio": "afterhangeEquityRatio",
            "date": "2010-01-01",
            "executor": "executor",
            "equityAmount": "equityAmount",
            "assignee": "assignee",
            "court": "court",
            "content": "contentcontent",
            "shareholder": 1,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1492669025
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
            "self": "127.0.0.1\/applyEquityChangeForms\/33"
        }
    }
}*/