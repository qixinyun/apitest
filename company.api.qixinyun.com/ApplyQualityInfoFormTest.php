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
 //filter[category]
// $response = $client->request('GET', 'applyQualityInfoForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyQualityInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyQualityInfoForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"applyQualityInfoForms",
                            "attributes"=>array("punishmentReason"=>111,
                                                "punishmentContent"=>'1111punishmentContentpunishmentContent',
                                                "punishmentDate"=>'2001-02-02',
                                                "punishmentOrganization"=>'1111punishmentOrganization',
                                                "classificationSupervisionLevel"=>10,
                                                "companyId"=>2,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                "qualityInfoId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyQualityInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyQualityInfoForms",
                            "attributes"=>array("punishmentReason"=>2,
                                                "punishmentContent"=>'111punishmentContentpunishmentContent',
                                                "punishmentDate"=>'2014-02-02',
                                                "punishmentOrganization"=>'111punishmentOrganization',
                                                "classificationSupervisionLevel"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyQualityInfoForms/1',
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
        "type": "applyQualityInfoForms",
        "id": "208",
        "attributes": {
            "userIdentification": 1,
            "punishmentReason": 1,
            "punishmentContent": "punishmentContentpunishmentContent",
            "punishmentDate": "2010-02-02",
            "punishmentOrganization": "punishmentOrganization",
            "classificationSupervisionLevel": 1,
            "company": 2,
            "qualityInfoId": 0,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1497340602
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
            "self": "127.0.0.1\/applyQualityInfoForms\/208"
        }
    }
}*/


