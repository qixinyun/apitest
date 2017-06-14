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
 $response = $client->request('GET', 'applyBrandInfoForms/148,151,171?include=companies&fields[companies]=name,principalRealName,category,certificate,registration_number',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyBrandInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyBrandInfoForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyBrandInfoForms",
                            "attributes"=>array("name"=>"148name",
                                                "category"=>1,
                                                "fillingTime"=>'2019-05-05',
                                                "logo"=>'148logologologo',
                                                "brandInfoStatus"=>-2,
                                                "companyId"=>1,
                                                "uid"=>152,
                                                "userIdentification"=>1,
                                                //"brandInfoId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyBrandInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"applyBrandInfoForms",
                            "attributes"=>array("name"=>"149namename",
                                                "category"=>12,
                                                "fillingTime"=>'2009-10-12',
                                                "logo"=>'149logologo',
                                                "brandInfoStatus"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyBrandInfoForms/149',
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
        "type": "applyBrandInfoForms",
        "id": "151",
        "attributes": {
            "userIdentification": 1,
            "name": "148name",
            "category": 1,
            "fillingTime": "2019-05-05",
            "logo": "148logologologo",
            "brandInfoStatus": -2,
            "company": 1,
            "brandInfoId": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1496200755
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
            "self": "127.0.0.1\/applyBrandInfoForms\/151"
        }
    }
}*/