<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[name]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
 //filter[category]
// $response = $client->request('GET', 'applyAssociatedCompanyForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyAssociatedCompanyForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'applyAssociatedCompanyForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyAssociatedCompanyForms",
                            "attributes"=>array("name"=>"namee222",
                                                "category"=>1,
                                                "registrationNumber"=>'registrationNumber',
                                                "organizationCode"=>'organizationCode',
                                                "evaluationUnit"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyAssociatedCompanyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyAssociatedCompanyForms",
                            "attributes"=>array("name"=>"123456namename",
                                                "category"=>2,
                                                "registrationNumber"=>'r11egistrationNumber',
                                                "organizationCode"=>'111organizationCode',
                                                "evaluationUnit"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyAssociatedCompanyForms/1',
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
        "type": "applyAssociatedCompanyForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "namee222",
            "category": 1,
            "registrationNumber": "registrationNumber",
            "organizationCode": "organizationCode",
            "evaluationUnit": 1,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488510244
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
            "self": "127.0.0.1\/applyAssociatedCompanyForms\/1"
        }
    }
}*/


