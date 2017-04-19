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
 //$response = $client->request('GET', 'applyBrandInfoForms/8,9',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyBrandInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyBrandInfoForms?filter[userIdentification]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyBrandInfoForms",
                            "attributes"=>array("name"=>"111namemmmmmmmm",
                                                "category"=>2,
                                                "fillingTime"=>'2059-05-05',
                                                "logo"=>'logologologo',
                                                "brandInfoStatus"=>-2,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
                            "attributes"=>array("name"=>"111222namemmmmmmmm",
                                                "category"=>1,
                                                "fillingTime"=>'2209-10-12',
                                                "logo"=>'123456logologo',
                                                "brandInfoStatus"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyBrandInfoForms/12',
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
        "type": "applyBrandInfoForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "namenamenamenamenamenamenamenamenamenamenamename",
            "category": 2,
            "fillingTime": "2059-05-05",
            "logo": "logologologo",
            "brandInfoStatus": -2,
            "company": 1,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487837051
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
            "self": "127.0.0.1\/applyBrandInfoForms\/1"
        }
    }
}*/