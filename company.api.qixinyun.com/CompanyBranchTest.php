<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //$response = $client->request('GET', 'companyBranches',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'companyBranches/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'companyBranches?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"companyBranches",
                            "attributes"=>array("name"=>"企业名称namename111",
                                                "category"=>1,
                                                "registrationNumber"=>"",
                                                "unifiedSocialCreditCode"=>"x11xxx123",
                                                "organizationCode"=>"",
                                                "principalName"=>"principalName11",
                                                "identifyCardNumber"=>"1123456789632145",
                                                "principalCategory"=>1,
                                                "province"=>11,
                                                "city"=>149,
                                                "region"=>1258,
                                                "detailedAddress"=>"11detailedAddress详细地址",
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'companyBranches',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"companyBranches",
                            "attributes"=>array("name"=>"111企业名称namename",
                                                "category"=>2,
                                                "registrationNumber"=>"",
                                                "unifiedSocialCreditCode"=>"111xxxx123",
                                                "organizationCode"=>"",
                                                "principalName"=>"111principalName",
                                                "identifyCardNumber"=>"111123456789632145",
                                                "principalCategory"=>11,
                                                "province"=>32,
                                                "city"=>394,
                                                "region"=>3336,
                                                "detailedAddress"=>"111detailedAddress详细地址"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'companyBranches/1',
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
        "type": "companyBranches",
        "id": "2",
        "attributes": {
            "name": "\u4f01\u4e1a\u540d\u79f0namename111",
            "category": 1,
            "registrationNumber": "",
            "unifiedSocialCreditCode": "x11xxx123",
            "organizationCode": "",
            "principalName": "principalName11",
            "identifyCardNumber": "1123456789632145",
            "principalCategory": 1,
            "province": 11,
            "city": 149,
            "region": 1258,
            "detailedAddress": "11detailedAddress\u8be6\u7ec6\u5730\u5740",
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1491903278
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
            "self": "127.0.0.1\/companyBranches\/2"
        }
    }
}*/