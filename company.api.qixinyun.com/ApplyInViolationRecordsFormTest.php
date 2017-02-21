<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[date]
 //filter[company]
 //filter[userIdentification]
// filter[uid]
 $response = $client->request('GET', 'applyInViolationRecordsForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInViolationRecordsForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInViolationRecordsForms?filter[reason]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyInViolationRecordsForms",
                            "attributes"=>array("reason"=>1,
                                                "date"=>'2059-05-05',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyInViolationRecordsForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyInViolationRecordsForms",
                            "attributes"=>array("reason"=>2,
                                                "date"=>'2052-05-05'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyInViolationRecordsForms/4',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
*/
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
        "type": "applyInViolationRecordsForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "reason": 1,
            "date": "2049-05-05",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487641712
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
            "self": "127.0.0.1\/applyInViolationRecordsForms\/1"
        }
    }
}*/