<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[result]
 //filter[company]
// $response = $client->request('GET', 'exViolationRecords',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'exViolationRecords/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'exViolationRecords?filter[reason]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"exViolationRecords",
                            "attributes"=>array("reason"=>"r1111easonreason",
                                                "decisionAuthority"=>'deq11111cisionAuthoritydecisionAuthoritydecisionAuthority',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'exViolationRecords',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"exViolationRecords",
                            "attributes"=>array("reason"=>"r1111easonreason",
                                                "decisionAuthority"=>'deq11111cisionAuthoritydecisionAuthoritydecisionAuthority'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'exViolationRecords/4',
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
        "type": "inViolationRecords",
        "id": "4",
        "attributes": {
            "reason": 2,
            "date": "2052-05-05",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487606526
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
            "self": "127.0.0.1\/inViolationRecords\/4"
        }
    }
}*/