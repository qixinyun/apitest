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
// $response = $client->request('GET', 'applyPrimaryPeopleForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyPrimaryPeopleForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyPrimaryPeopleForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyPrimaryPeopleForms",
                            "attributes"=>array("name"=>"editnamenamename",
                                                "duties"=>2,
                                                "gender"=>2,
                                                "nationality"=>4,
                                                "birthday"=>"1995-05-05",
                                                "education"=>8,
                                                "socialDuties"=>"socialDuties",
                                                "experience"=>"experience",
                                                "abroadInvestmen"=>-2,
                                                "companyId"=>2,
                                                "uid"=>2,
                                                "userIdentification"=>2
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyPrimaryPeopleForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyPrimaryPeopleForms",
                            "attributes"=>array("name"=>"111editnamenamename",
                                                "duties"=>1,
                                                "gender"=>1,
                                                "nationality"=>1,
                                                "birthday"=>"1991-05-05",
                                                "education"=>1,
                                                "socialDuties"=>"111socialDuties",
                                                "experience"=>"111xperience",
                                                "abroadInvestmen"=>0
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyPrimaryPeopleForms/1',
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
        "type": "applyPrimaryPeopleForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "punishmentReason": 1,
            "punishmentContent": "punishmentContentpunishmentContent",
            "punishmentDate": "2010-02-02",
            "punishmentOrganization": "punishmentOrganization",
            "classificationSupervisionLevel": 1,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488529268
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
            "self": "127.0.0.1\/applyPrimaryPeopleForms\/1"
        }
    }
}*/


