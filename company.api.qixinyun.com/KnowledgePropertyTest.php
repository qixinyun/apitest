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
// $response = $client->request('GET', 'knowledgeProperties/2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'knowledgeProperties/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'knowledgeProperties?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"knowledgeProperties",
                            "attributes"=>array("number"=>"124578963122",
                                                "name"=>'namename',
                                                "category"=>1,
                                                "pledgorName"=>'出质人名称',
                                                "pledgeeName"=>'质权人名称',
                                                "pledgeRegistrationDeadline"=>'2020-09-06',
                                                "variation"=>'变化情况2029-05-05',
                                                "status"=>0,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'knowledgeProperties',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"knowledgeProperties",
                            "attributes"=>array("number"=>"1245789631225555555",
                                                "name"=>'namename5555555',
                                                "category"=>2,
                                                "pledgorName"=>'出质人名称555',
                                                "pledgeeName"=>'质权人名称555',
                                                "pledgeRegistrationDeadline"=>'2029-10-10',
                                                "variation"=>'变化情况2029-05-0555555555',
                                                "status"=>-2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'knowledgeProperties/1',
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
        "type": "knowledgeProperties",
        "id": "1",
        "attributes": {
            "number": "124578963122",
            "name": "namename",
            "category": 1,
            "pledgorName": "\u51fa\u8d28\u4eba\u540d\u79f0",
            "pledgeeName": "\u8d28\u6743\u4eba\u540d\u79f0",
            "pledgeRegistrationDeadline": "2020-09-06",
            "variation": "\u53d8\u5316\u60c5\u51b52029-05-05",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487727200
        },
        "relationships": {
            "companies": {
                "data": {
                    "type": "companies",
                    "id": "0"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/knowledgeProperties\/1"
        }
    }
}*/