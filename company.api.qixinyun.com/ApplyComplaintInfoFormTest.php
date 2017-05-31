<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applyComplaintInfoForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyComplaintInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyComplaintInfoForms?filter[registrationCategory]=3&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyComplaintInfoForms",
                            "attributes"=>array("number"=>11123,
                                                "acceptedNumber"=>22234,
                                                "actualSolvedNumber"=>33345,
                                                "caseNumber"=>44456,
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                               // "complaintInfoId"=>2
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyComplaintInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyComplaintInfoForms",
                            "attributes"=>array("number"=>123456,
                                                "acceptedNumber"=>223456,
                                                "actualSolvedNumber"=>334567,
                                                "caseNumber"=>445678,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyComplaintInfoForms/165',
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
        "type": "applyComplaintInfoForms",
        "id": "166",
        "attributes": {
            "userIdentification": 1,
            "number": 11123,
            "acceptedNumber": 22234,
            "actualSolvedNumber": 33345,
            "caseNumber": 44456,
            "company": 1,
            "complaintInfoId": 2,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1496212223
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "152"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyComplaintInfoForms\/166"
        }
    }
}*/