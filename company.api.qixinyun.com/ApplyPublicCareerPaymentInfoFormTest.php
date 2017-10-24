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
// $response = $client->request('GET', 'applyPublicCareerPaymentInfoForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyPublicCareerPaymentInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyPublicCareerPaymentInfoForms?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"applyPublicCareerPaymentInfoForms",
                            "attributes"=>array("arrearsMoney"=>111,
                                                "arrearsCategory"=>111,
                                                "statisticsDate"=>'2010-02-02',
                                                "classificationSupervisionLevel"=>111,
                                                "companyId"=>4,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                "publicCareerPaymentInfoId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyPublicCareerPaymentInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyPublicCareerPaymentInfoForms",
                            "attributes"=>array("arrearsMoney"=>13,
                                                "arrearsCategory"=>1,
                                                "statisticsDate"=>'2034-03-03',
                                                "classificationSupervisionLevel"=>3,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyPublicCareerPaymentInfoForms/1',
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
        "type": "applyPublicCareerPaymentInfoForms",
        "id": "206",
        "attributes": {
            "userIdentification": 1,
            "arrearsMoney": 122,
            "arrearsCategory": 22,
            "statisticsDate": "2020-02-02",
            "classificationSupervisionLevel": 22,
            "company": 3,
            "publicCareerPaymentInfoId": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1497336629
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
                    "id": "3"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyPublicCareerPaymentInfoForms\/206"
        }
    }
}*/


