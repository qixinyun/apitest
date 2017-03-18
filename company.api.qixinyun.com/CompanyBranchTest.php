<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 $response = $client->request('GET', 'companyBranches',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'companyBranches/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'companyBranches?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"companyBranches",
                            "attributes"=>array("name"=>"namenamename",
                                                "members"=>"membersmembers",
                                                "maxClearCount"=>12,
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
/*$data = array("data"=>array("type"=>"companyBranches",
                            "attributes"=>array("name"=>"namenamename",
                                                "members"=>"membersmembers",
                                                "maxClearCount"=>12,
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
            );*/

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
//edit -- 结束

echo "<pre>";
print_r($status);
print_r($contents);

/*{
    "meta": {
        "count": 1
    },
    "links": {
        "first": null,
        "last": null,
        "prev": null,
        "next": null
    },
    "data": [
        {
            "type": "companyBranches",
            "id": "1",
            "attributes": {
                "name": "name",
                "category": 1,
                "registrationNumber": "\u6ce8\u518c\u53f7",
                "unifiedSocialCreditCode": "\u7edf\u4e00\u793e\u4f1a\u4fe1\u7528\u4ee3\u7801",
                "organizationCode": "\u7ec4\u7ec7\u673a\u6784\u4ee3\u7801",
                "principalName": "\u6cd5\u4eba\u59d3\u540d",
                "identifyCardNumber": "\u8eab\u4efd\u8bc1\u53f7",
                "principalCategory": 1,
                "province": 11,
                "city": 11,
                "region": 11,
                "detailedAddress": "\u8be6\u7ec6\u5730\u5740",
                "status": 0,
                "statusTime": 0,
                "updateTime": 0,
                "createTime": 1487833387
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
                "self": "127.0.0.1\/companyBranches\/1"
            }
        }
    ]
}*/