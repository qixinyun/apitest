<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'complaintInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'complaintInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'complaintInfos?filter[registrationCategory]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"complaintInfos",
                            "attributes"=>array("number"=>123,
                                                "acceptedNumber"=>456,
                                                "actualSolvedNumber"=>12,
                                                "caseNumber"=>22,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'complaintInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"complaintInfos",
                            "attributes"=>array("number"=>111,
                                                "acceptedNumber"=>222,
                                                "actualSolvedNumber"=>33,
                                                "caseNumber"=>44,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'complaintInfos/1',
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
        "type": "complaintInfos",
        "id": "1",
        "attributes": {
            "number": 123,
            "acceptedNumber": 456,
            "actualSolvedNumber": 12,
            "caseNumber": 22,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1489647571
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
            "self": "127.0.0.1\/complaintInfos\/1"
        }
    }
}*/