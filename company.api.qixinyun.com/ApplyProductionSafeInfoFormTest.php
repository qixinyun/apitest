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
// $response = $client->request('GET', 'applyProductionSafeInfoForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyProductionSafeInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyProductionSafeInfoForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyProductionSafeInfoForms",
                            "attributes"=>array("punishmentReason"=>33,
                                                "punishmentContent"=>'33entContentpunishmentContent',
                                                "punishmentDate"=>'2020-02-02',
                                                "punishmentOrganization"=>'33mentOrganization',
                                                "classificationSupervisionLevel"=>33,
                                                "companyId"=>2,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                "productionSafeInfoId"=>3
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyProductionSafeInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyProductionSafeInfoForms",
                            "attributes"=>array("punishmentReason"=>333,
                                                "punishmentContent"=>'333editContentpunishmentContent',
                                                "punishmentDate"=>'2014-01-01',
                                                "punishmentOrganization"=>'33editentOrganization',
                                                "classificationSupervisionLevel"=>333,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyProductionSafeInfoForms/204',
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
        "type": "applyProductionSafeInfoForms",
        "id": "203",
        "attributes": {
            "userIdentification": 1,
            "punishmentReason": 33,
            "punishmentContent": "33entContentpunishmentContent",
            "punishmentDate": "2020-02-02",
            "punishmentOrganization": "33mentOrganization",
            "classificationSupervisionLevel": 33,
            "company": 2,
            "productionSafeInfoId": 3,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1497251128
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "152"
                }
            },
            "companies": {
                "data": {
                    "type": "companies",
                    "id": "2"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyProductionSafeInfoForms\/203"
        }
    }
}*/


