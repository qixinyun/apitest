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
 //$response = $client->request('GET', 'applyKnowledgePropertyForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyKnowledgePropertyForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyKnowledgePropertyForms?filter[reason]=1&sort=date',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyKnowledgePropertyForms",
                            "attributes"=>array("number"=>"221245789631224444",
                                                "name"=>'22namename4444',
                                                "category"=>2,
                                                "pledgorName"=>'22出质人名称4444',
                                                "pledgeeName"=>'22质权人名称4444',
                                                "pledgeRegistrationDeadline"=>'2022-09-06',
                                                "variation"=>'22变化情况2029-05-054444',
                                                "knowledgePropertyStatus"=>-2,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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

//edit -- 开始212121
/*$data = array("data"=>array("type"=>"applyKnowledgePropertyForms",
                            "attributes"=>array("number"=>"212121124578963122",
                                                "name"=>'212121namename',
                                                "category"=>1,
                                                "pledgorName"=>'212121出质人名称',
                                                "pledgeeName"=>'212121质权人名称',
                                                "pledgeRegistrationDeadline"=>'2021-09-06',
                                                "variation"=>'212121变化情况2029-05-05',
                                                "knowledgePropertyStatus"=>-2
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyKnowledgePropertyForms/25',
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
        "type": "applyKnowledgePropertyForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "number": "1245789631224444",
            "name": "namename4444",
            "category": 2,
            "pledgorName": "\u51fa\u8d28\u4eba\u540d\u79f04444",
            "pledgeeName": "\u8d28\u6743\u4eba\u540d\u79f04444",
            "pledgeRegistrationDeadline": "2020-09-06",
            "variation": "\u53d8\u5316\u60c5\u51b52029-05-054444",
            "knowledgePropertyStatus": 0,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487732924
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
            "self": "127.0.0.1\/applyKnowledgePropertyForms\/1"
        }
    }
}*/