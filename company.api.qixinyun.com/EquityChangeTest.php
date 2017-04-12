<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

 //$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'equityChanges',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityChanges/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityChanges?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"equityChanges",
                            "attributes"=>array("beforeChangeEquityRatio"=>"beforeChangeEquityRatio",
                                                "afterhangeEquityRatio"=>"afterhangeEquityRatio",
                                                "date"=>"2010-01-01",
                                                "executor"=>"executor",
                                                "equityAmount"=>"equityAmount",
                                                "assignee"=>"assignee",
                                                "court"=>"court",
                                                "content"=>"contentcontent",
                                                "shareholderId"=>1,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'equityChanges',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"equityChanges",
                            "attributes"=>array("beforeChangeEquityRatio"=>"1beforeChangeEquityRatio",
                                                "afterhangeEquityRatio"=>"1afterhangeEquityRatio",
                                                "date"=>"2011-01-01",
                                                "executor"=>"1executor",
                                                "equityAmount"=>"1equityAmount",
                                                "assignee"=>"1assignee",
                                                "court"=>"1court",
                                                "content"=>"1contentcontent"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'equityChanges/2',
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
        "type": "equityChanges",
        "id": "2",
        "attributes": {
            "beforeChangeequityRatio": "beforeChangeEquityRatio",
            "afterhangeequityRatio": "afterhangeEquityRatio",
            "date": "2010-01-01",
            "executor": "executor",
            "equityAmount": "equityAmount",
            "assignee": "assignee",
            "court": "court",
            "content": "contentcontent",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1491965072
        },
        "relationships": {
            "companies": {
                "data": {
                    "type": "companies",
                    "id": "1"
                }
            },
            "shareholders": {
                "data": {
                    "type": "shareholders",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/equityChanges\/2"
        }
    }
}*/