<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[userIdentification]
 //filter[uid]
// $response = $client->request('GET', 'applyKnowledgePropertyForms/174?include=companies&fields[companies]=establishedDate',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyKnowledgePropertyForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyKnowledgePropertyForms?filter[reason]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyKnowledgePropertyForms",
                            "attributes"=>array("number"=>"edit1111numbernumber",
                                                "name"=>'22namename4444',
                                                "category"=>2,
                                                "pledgorName"=>'22出质人名称4444',
                                                "pledgeeName"=>'22质权人名称4444',
                                                "pledgeRegistrationDeadline"=>'2022-09-06',
                                                "variation"=>'22变化情况2029-05-054444',
                                                "knowledgePropertyStatus"=>-2,
                                                "companyId"=>4,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                //"knowledgePropertyId"=>1,
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyKnowledgePropertyForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyKnowledgePropertyForms",
                            "attributes"=>array("number"=>"22222editnumbernumber",
                                                "name"=>'22222212121namename',
                                                "category"=>12,
                                                "pledgorName"=>'2222212121出质人名称',
                                                "pledgeeName"=>'22222212121质权人名称',
                                                "pledgeRegistrationDeadline"=>'2001-09-06',
                                                "variation"=>'21212122222222222222222变化情况2029-05-05',
                                                "knowledgePropertyStatus"=>-2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyKnowledgePropertyForms/176',
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
        "type": "applyKnowledgePropertyForms",
        "id": "176",
        "attributes": {
            "userIdentification": 1,
            "number": "edit1111numbernumber",
            "name": "22namename4444",
            "category": 2,
            "pledgorName": "22\u51fa\u8d28\u4eba\u540d\u79f04444",
            "pledgeeName": "22\u8d28\u6743\u4eba\u540d\u79f04444",
            "pledgeRegistrationDeadline": "2022-09-06",
            "variation": "22\u53d8\u5316\u60c5\u51b52029-05-054444",
            "knowledgePropertyStatus": -2,
            "company": 4,
            "knowledgePropertyId": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1496396111
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
                    "id": "4"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyKnowledgePropertyForms\/176"
        }
    }
}*/