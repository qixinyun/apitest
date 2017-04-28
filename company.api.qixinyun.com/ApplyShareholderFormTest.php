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
 $response = $client->request('GET', 'applyShareholderForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyShareholderForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyShareholderForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyShareholderForms",
                            "attributes"=>array("name"=>"111股东名称",
                                                "category"=>1,
                                                "certificateType"=>1,
                                                "certificateNumber"=>"111234567896321465",
                                                "subscribedContributionMethod"=>1,
                                                "subscribedContribution"=>1000,
                                                "subscribedContributionTime"=>"2016-01-01",
                                                "actualContributionMethod"=>1,
                                                "actualContribution"=>1000,
                                                "actualContributionTime"=>"2018-05-05",
                                                "companyId"=>2,
                                                "uid"=>2,
                                                "userIdentification"=>2
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyShareholderForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyShareholderForms",
                            "attributes"=>array("name"=>"股东名称",
                                                "category"=>2,
                                                "certificateType"=>2,
                                                "certificateNumber"=>"2234567896322465",
                                                "subscribedContributionMethod"=>2,
                                                "subscribedContribution"=>22000,
                                                "subscribedContributionTime"=>"2024-02-02",
                                                "actualContributionMethod"=>2,
                                                "actualContribution"=>22000,
                                                "actualContributionTime"=>"2016-05-05",
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyShareholderForms/19',
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
        "type": "applyShareholderForms",
        "id": "19",
        "attributes": {
            "userIdentification": 2,
            "name": "111\u80a1\u4e1c\u540d\u79f0",
            "category": 1,
            "certificateType": 1,
            "certificateNumber": "111234567896321465",
            "subscribedContributionMethod": 1,
            "subscribedContribution": 1000,
            "subscribedContributionTime": "2016-01-01",
            "actualContributionMethod": 1,
            "actualContribution": 1000,
            "actualContributionTime": "2018-05-05",
            "company": 2,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1493099206
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
            "self": "127.0.0.1\/applyShareholderForms\/19"
        }
    }
}*/


