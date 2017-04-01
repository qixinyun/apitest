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
// $response = $client->request('GET', 'applyLaborAndSocialSecurityPaymentInfoForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyLaborAndSocialSecurityPaymentInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyLaborAndSocialSecurityPaymentInfoForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyLaborAndSocialSecurityPaymentInfoForms",
                            "attributes"=>array("arrearsMoney"=>12,
                                                "arrearsCategory"=>2,
                                                "statisticsDate"=>'2020-02-02',
                                                "classificationSupervisionLevel"=>2,
                                                "companyId"=>2,
                                                "uid"=>2,
                                                "userIdentification"=>2
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyLaborAndSocialSecurityPaymentInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyLaborAndSocialSecurityPaymentInfoForms",
                            "attributes"=>array("arrearsMoney"=>13,
                                                "arrearsCategory"=>1,
                                                "statisticsDate"=>'2034-03-03',
                                                "classificationSupervisionLevel"=>3,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyLaborAndSocialSecurityPaymentInfoForms/1',
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
        "type": "applyLaborAndSocialSecurityPaymentInfoForms",
        "id": "1",
        "attributes": {
            "userIdentification": 2,
            "arrearsMoney": 12,
            "arrearsCategory": 2,
            "statisticsDate": "2020-02-02",
            "classificationSupervisionLevel": 2,
            "company": 2,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1489132768
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
            "self": "127.0.0.1\/applyLaborAndSocialSecurityPaymentInfoForms\/1"
        }
    }
}*/


