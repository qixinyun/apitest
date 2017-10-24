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
// $response = $client->request('GET', 'applyRecruitInfoForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyRecruitInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyRecruitInfoForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"applyRecruitInfoForms",
                            "attributes"=>array("duties"=>"133岗位",
                                                "salary"=>123,
                                                "address"=>'33地点',
                                                "source"=>'333来源',
                                                "publicationDate"=>'2013-05-05',
                                                "companyId"=>2,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                "recruitInfoId"=>3
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyRecruitInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyRecruitInfoForms",
                            "attributes"=>array("duties"=>"111岗位",
                                                "salary"=>13,
                                                "address"=>'111地点',
                                                "source"=>'111来源',
                                                "publicationDate"=>'2025-05-05',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyRecruitInfoForms/1',
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
        "type": "applyRecruitInfoForms",
        "id": "212",
        "attributes": {
            "userIdentification": 1,
            "duties": "133\u5c97\u4f4d",
            "salary": 123,
            "address": "33\u5730\u70b9",
            "source": "333\u6765\u6e90",
            "publicationDate": "2013-05-05",
            "company": 2,
            "recruitInfoId": 3,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1497347776
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
            "self": "127.0.0.1\/applyRecruitInfoForms\/212"
        }
    }
}*/


