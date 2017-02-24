<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'exAbnormalRecords',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'exAbnormalRecords/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'exAbnormalRecords?filter[company]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"exAbnormalRecords",
                            "attributes"=>array("reason"=>'reasonreasonreason',
                                                "date"=>'2049-05-05',
                                                "decisionAuthority"=>'decisionAuthoritydecisionAuthoritydecisionAuthority',
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'exAbnormalRecords',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"exAbnormalRecords",
                            "attributes"=>array("reason"=>'reasonreasonreason121',
                                                "date"=>'2052-05-05',
                                                "decisionAuthority"=>'decisionAuthoritydecisionAuthoritydecisionAuthority121',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'exAbnormalRecords/1',
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
        "type": "exAbnormalRecords",
        "id": "1",
        "attributes": {
            "reason": "reasonreasonreason",
            "date": "2049-05-05",
            "decisionAuthority": "decisionAuthoritydecisionAuthoritydecisionAuthority",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487752865
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
            "self": "127.0.0.1\/exAbnormalRecords\/1"
        }
    }
}*/