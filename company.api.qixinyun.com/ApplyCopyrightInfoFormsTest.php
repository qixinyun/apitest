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
 $response = $client->request('GET', 'applyCopyrightInfoForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCopyrightInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyCopyrightInfoForms?filter[registrationCategory]=3&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyCopyrightInfoForms",
                            "attributes"=>array("name"=>'hellohello',
                                                "registrationNumber"=>'967845123',
                                                "registrationDate"=>'2059-05-05',
                                                "registrationCategory"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
                            "attributes"=>array("name"=>'121worldworld',
                                                "registrationNumber"=>'1211234567896321',
                                                "registrationDate"=>'2029-01-15',
                                                "registrationCategory"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyCopyrightInfoForms/1',
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
        "type": "applyCopyrightInfoForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "worldworld",
            "registrationNumber": "1234567896321",
            "registrationDate": "2009-05-05",
            "registrationCategory": 2,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1488251516
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
            "self": "127.0.0.1\/applyCopyrightInfoForms\/1"
        }
    }
}*/