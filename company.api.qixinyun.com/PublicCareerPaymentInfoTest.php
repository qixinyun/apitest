<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'publicCareerPaymentInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'publicCareerPaymentInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'publicCareerPaymentInfos?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"publicCareerPaymentInfos",
                            "attributes"=>array("arrearsMoney"=>1,
                                                "arrearsCategory"=>2,
                                                "statisticsDate"=>'2010-02-02',
                                                "classificationSupervisionLevel"=>1,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'publicCareerPaymentInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"publicCareerPaymentInfos",
                            "attributes"=>array("arrearsMoney"=>16,
                                                "arrearsCategory"=>1,
                                                "statisticsDate"=>'2060-02-02',
                                                "classificationSupervisionLevel"=>6
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'publicCareerPaymentInfos/1',
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
        "type": "publicCareerPaymentInfos",
        "id": "1",
        "attributes": {
            "arrearsMoney": 1,
            "arrearsCategory": 2,
            "statisticsDate": "2010-02-02",
            "classificationSupervisionLevel": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1489111816
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
            "self": "127.0.0.1\/publicCareerPaymentInfos\/1"
        }
    }
}*/