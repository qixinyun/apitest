<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'productionSafeInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'productionSafeInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'productionSafeInfos?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"productionSafeInfos",
                            "attributes"=>array("punishmentReason"=>1,
                                                "punishmentContent"=>'punishmentContentpunishmentContent',
                                                "punishmentDate"=>'2010-02-02',
                                                "punishmentOrganization"=>'punishmentOrganization',
                                                "classificationSupervisionLevel"=>1,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'productionSafeInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"productionSafeInfos",
                            "attributes"=>array("punishmentReason"=>6,
                                                "punishmentContent"=>'11p666unishmentContentpunishmentContent',
                                                "punishmentDate"=>'2060-02-02',
                                                "punishmentOrganization"=>'22666punishmentOrganization',
                                                "classificationSupervisionLevel"=>6
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'productionSafeInfos/2',
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
        "type": "productionSafeInfos",
        "id": "1",
        "attributes": {
            "punishmentReason": 1,
            "punishmentContent": "punishmentContentpunishmentContent",
            "punishmentDate": "2010-02-02",
            "punishmentOrganization": "punishmentOrganization",
            "classificationSupervisionLevel": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488776607
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
            "self": "127.0.0.1\/productionSafeInfos\/1"
        }
    }
}[*/