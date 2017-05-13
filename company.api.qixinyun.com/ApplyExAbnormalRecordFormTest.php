<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[userIdentification]
// filter[uid]
 $response = $client->request('GET', 'applyExAbnormalRecordForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyExAbnormalRecordForms/18,19',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyExAbnormalRecordForms?filter[inAbnormalRecord]=1&sort=id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyExAbnormalRecordForms",
                            "attributes"=>array("reason"=>'reasonreasonreason121',
                                                "date"=>'2059-05-05',
                                                "decisionAuthority"=>'decisionAuthoritydecisionAuthoritydecisionAuthority',
                                                "inAbnormalRecordId"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyExAbnormalRecordForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyExAbnormalRecordForms",
                            "attributes"=>array("reason"=>'1reasonreasonreason33333',
                                                "date"=>'2180-04-12',
                                                "decisionAuthority"=>'2211111decisionAuthoritydecisionAuthoritydecisionAuthority'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyExAbnormalRecordForms/19',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
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
        "type": "applyExAbnormalRecordForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "reason": 1,
            "date": "2059-05-05",
            "decisionAuthority": "decisionAuthoritydecisionAuthoritydecisionAuthority",
            "inAbnormalRecord": 1,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487747683
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
            "self": "127.0.0.1\/applyExAbnormalRecordForms\/1"
        }
    }
}*/