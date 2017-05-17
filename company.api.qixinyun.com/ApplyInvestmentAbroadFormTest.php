<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applyInvestmentAbroadForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInvestmentAbroadForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInvestmentAbroadForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"applyInvestmentAbroadForms",
                            "attributes"=>array("companyName"=>"companyName",
                                                "principal"=>'principal',
                                                "establishedTime"=>'2029-05-05',
                                                "registrationCapital"=>23,
                                                "address"=>'addressaddress',
                                                "website"=>'htp://www.baidu.com',
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyInvestmentAbroadForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyInvestmentAbroadForms",
                            "attributes"=>array("companyName"=>"111companyName",
                                                "principal"=>'111principal',
                                                "establishedTime"=>'2019-05-05',
                                                "registrationCapital"=>13,
                                                "address"=>'11addressaddress',
                                                "website"=>'http://www.baidu.com',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyInvestmentAbroadForms/1',
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
        "type": "applyInvestmentAbroadForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "companyName": "companyName",
            "principal": "principal",
            "establishedTime": "2029-05-05",
            "registrationCapital": 23,
            "address": "addressaddress",
            "website": "htp:\/\/www.baidu.com",
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488879087
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
            "self": "127.0.0.1\/applyInvestmentAbroadForms\/1"
        }
    }
}*/