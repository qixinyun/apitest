<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 //filter[userIdentification]
// filter[uid]
 $response = $client->request('GET', 'applyCertificateInfoForms/155,158,159?include=companies&fields[companies]=name,principalRealName',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCertificateInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCertificateInfoForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyCertificateInfoForms",
                            "attributes"=>array("name"=>'444444hhhhh',
                                                "issueDate"=>'2001-05-05',
                                                "expirationDate"=>'2020-09-06',
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                //"certificateInfoId"=>4
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyCertificateInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyCertificateInfoForms",
                            "attributes"=>array("name"=>'444444hhhhh',
                                                "issueDate"=>'2001-05-05',
                                                "expirationDate"=>'2020-09-06',
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyCertificateInfoForms/159',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit -- 结束


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();


echo "<pre>";
print_r($status);
print_r($contents);

/*{
    "meta": [],
    "data": {
        "type": "applyCertificateInfoForms",
        "id": "159",
        "attributes": {
            "userIdentification": 1,
            "name": "444444hhhhh",
            "issueDate": "2001-05-05",
            "expirationDate": "2020-09-06",
            "company": 1,
            "certificateInfoId": 4,
            "status": 0,
            "statusTime": 1496203004,
            "updateTime": 1496203004,
            "createTime": 1496202903
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "152"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyCertificateInfoForms\/159"
        }
    }
}*/