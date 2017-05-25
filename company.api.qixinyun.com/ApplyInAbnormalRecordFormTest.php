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
                            "attributes"=>array("reason"=>1,
                                                "date"=>'2009-05-05',
                                                "decisionAuthority"=>'2decisionAuthoritydecisionAuthoritydecisionAuthority',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1,
                                                //"inAbnormalRecordId"=>1
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
$data = array("data"=>array("type"=>"applyInAbnormalRecordForms",
                            "attributes"=>array("reason"=>122,
                                                "date"=>'2009-05-05',
                                                "decisionAuthority"=>'221111nAuthoritydecisionAuthority'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyInAbnormalRecordForms/121',
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
        "type": "applyInAbnormalRecordForms",
        "id": "121",
        "attributes": {
            "userIdentification": 1,
            "reason": 122,
            "date": "2009-05-05",
            "decisionAuthority": "221111nAuthoritydecisionAuthority",
            "company": 1,
            "inAbnormalRecordId": 1,
            "status": 0,
            "statusTime": 1495687493,
            "updateTime": 1495687493,
            "createTime": 1495687413
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyInAbnormalRecordForms\/121"
        }
    }
}*/