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
 $response = $client->request('GET', 'applyCompanyBranchForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCompanyBranchForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCompanyBranchForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyCompanyBranchForms",
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
                                                "companyId"=>2,
                                                "uid"=>2,
                                                "userIdentification"=>2
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyCompanyBranchForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyCompanyBranchForms",
                            "attributes"=>array("name"=>"22企业名称namename111",
                                                "category"=>1,
                                                "registrationNumber"=>"",
                                                "unifiedSocialCreditCode"=>"222x11xxx123",
                                                "organizationCode"=>"",
                                                "principalName"=>"222principalName11",
                                                "identifyCardNumber"=>"2221123456789632145",
                                                "principalCategory"=>1,
                                                "province"=>11,
                                                "city"=>149,
                                                "region"=>1258,
                                                "detailedAddress"=>"22211detailedAddress详细地址"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyCompanyBranchForms/17',
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
        "type": "applyCompanyBranchForms",
        "id": "17",
        "attributes": {
            "userIdentification": 2,
            "name": "22\u4f01\u4e1a\u540d\u79f0namename111",
            "category": 1,
            "registrationNumber": "",
            "unifiedSocialCreditCode": "222x11xxx123",
            "organizationCode": "",
            "principalName": "222principalName11",
            "identifyCardNumber": "2221123456789632145",
            "principalCategory": 1,
            "province": 11,
            "city": 149,
            "region": 1258,
            "detailedAddress": "22211detailedAddress\u8be6\u7ec6\u5730\u5740",
            "company": 2,
            "status": 0,
            "statusTime": 1493094869,
            "updateTime": 1493094869,
            "createTime": 1493094791
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "2"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyCompanyBranchForms\/17"
        }
    }
}*/


