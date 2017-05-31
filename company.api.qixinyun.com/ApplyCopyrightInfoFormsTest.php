<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[name]
 //filter[category]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applyCopyrightInfoForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCopyrightInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCopyrightInfoForms?filter[registrationCategory]=3&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyCopyrightInfoForms",
                            "attributes"=>array("name"=>'111hellohello',
                                                "registrationNumber"=>'11111967845123',
                                                "registrationDate"=>'2019-05-05',
                                                "registrationCategory"=>12,
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                               // "copyrightInfoId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyCopyrightInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyCopyrightInfoForms",
                            "attributes"=>array("name"=>'2222worldworld',
                                                "registrationNumber"=>'22222222211234567896321',
                                                "registrationDate"=>'2009-01-15',
                                                "registrationCategory"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyCopyrightInfoForms/170',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
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
        "type": "applyCopyrightInfoForms",
        "id": "170",
        "attributes": {
            "userIdentification": 1,
            "name": "111hellohello",
            "registrationNumber": "11111967845123",
            "registrationDate": "2019-05-05",
            "registrationCategory": 12,
            "company": 1,
            "copyrightInfoId": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1496212904
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
            "self": "127.0.0.1\/applyCopyrightInfoForms\/170"
        }
    }
}*/