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
                            "attributes"=>array("number"=>123,
                                                "acceptedNumber"=>456,
                                                "actualSolvedNumber"=>12,
                                                "caseNumber"=>22,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
                            "attributes"=>array("number"=>111,
                                                "acceptedNumber"=>22,
                                                "actualSolvedNumber"=>33,
                                                "caseNumber"=>44,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyComplaintInfoForms/1',
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
        "type": "applyComplaintInfoForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "number": 123,
            "acceptedNumber": 456,
            "actualSolvedNumber": 12,
            "caseNumber": 22,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1489651397
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
            "self": "127.0.0.1\/applyComplaintInfoForms\/1"
        }
    }
}*/