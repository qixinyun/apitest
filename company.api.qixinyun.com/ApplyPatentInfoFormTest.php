<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
// $response = $client->request('GET', 'applyPatentInfoForms',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyPatentInfoForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyPatentInfoForms?filter[company]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyPatentInfoForms",
                            "attributes"=>array("name"=>"namenamenamenamenamenamenamenamenamenamenamename",
                                                "category"=>2,
                                                "description"=>'descriptiondescriptiondescription',
                                                "publicationDate"=>'2020-02-20',
                                                "patentInfoStatus"=>-2,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyPatentInfoForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyPatentInfoForms",
                            "attributes"=>array("name"=>"123456namename",
                                                "category"=>1,
                                                "description"=>'descriptiondescriptiondescription',
                                                "publicationDate"=>'2020-02-20',
                                                "patentInfoStatus"=>2,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyPatentInfoForms/1',
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
        "type": "applyPatentInfoForms",
        "id": "1",
        "attributes": {
            "userIdentification": 1,
            "name": "123456namename",
            "category": 1,
            "description": "descriptiondescriptiondescription",
            "publicationDate": "2020-02-20",
            "patentInfoStatus": 2,
            "company": 1,
            "status": 0,
            "statusTime": 1487919388,
            "updateTime": 1487919388,
            "createTime": 1487919197
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
            "self": "127.0.0.1\/applyPatentInfoForms\/1"
        }
    }
}*/