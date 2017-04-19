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
// $response = $client->request('GET', 'applyInAbnormalRecordForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInAbnormalRecordForms/14,15',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInAbnormalRecordForms?filter[company]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyInAbnormalRecordForms",
                            "attributes"=>array("reason"=>12,
                                                "date"=>'2259-05-05',
                                                "decisionAuthority"=>'2decisionAuthoritydecisionAuthoritydecisionAuthority',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyInAbnormalRecordForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyInAbnormalRecordForms",
                            "attributes"=>array("reason"=>2,
                                                "date"=>'2052-05-05',
                                                "decisionAuthority"=>'22222decisionAuthoritydecisionAuthoritydecisionAuthority'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyInAbnormalRecordForms/17',
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
        "type": "applyInAbnormalRecordForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "reason": 1,
            "date": "2059-05-05",
            "decisionAuthority": "decisionAuthoritydecisionAuthoritydecisionAuthority",
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
            "self": "127.0.0.1\/applyInAbnormalRecordForms\/1"
        }
    }
}*/