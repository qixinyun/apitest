<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[name]
 //filter[category]
 //filter[company]
// $response = $client->request('GET', 'associatedCompanies',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'associatedCompanies/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'associatedCompanies?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"associatedCompanies",
                            "attributes"=>array("name"=>"namenamename",
                                                "category"=>1,
                                                "registrationNumber"=>'registrationNumber',
                                                "organizationCode"=>'organizationCode',
                                                "evaluationUnit"=>1,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'associatedCompanies',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"associatedCompanies",
                            "attributes"=>array("name"=>"111namenamename",
                                                "category"=>2,
                                                "registrationNumber"=>'111registrationNumber',
                                                "organizationCode"=>'111organizationCode',
                                                "evaluationUnit"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'associatedCompanies/1',
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
        "type": "associatedCompanies",
        "id": "1",
        "attributes": {
            "name": "namenamename",
            "category": 1,
            "registrationNumber": "registrationNumber",
            "organizationCode": "organizationCode",
            "evaluationUnit": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488506818
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
            "self": "127.0.0.1\/associatedCompanies\/1"
        }
    }
}*/