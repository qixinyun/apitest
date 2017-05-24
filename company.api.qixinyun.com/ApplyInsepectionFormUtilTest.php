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
// $response = $client->request('GET', 'applyInsepectionForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInsepectionForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInsepectionForms?filter[uid]=1&filter[userIdentification]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyInsepectionForms",
                            "attributes"=>array("council"=>"insepectionCouncil9836369",
                                                "category"=>57,
                                                "date"=>'2059-05-05',
                                                "result"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1,
                                               // "insepectionId"=>1
                                               ) 
                           )
              );
$response = $client->request(
                'POST',
                'applyInsepectionForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
$data = array("data"=>array("type"=>"applyInsepectionForms",
                            "attributes"=>array("council"=>"1insepectionCouncil123456",
                                                "category"=>52,
                                                "date"=>'2059-05-05',
                                                "result"=>5
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyInsepectionForms/105',
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
        "type": "applyInsepectionForms",
        "id": "105",
        "attributes": {
            "userIdentification": 1,
            "council": "1insepectionCouncil123456",
            "category": 52,
            "date": "2059-05-05",
            "result": 0,
            "company": 1,
            "insepectionId": 1,
            "status": 0,
            "statusTime": 1495633593,
            "updateTime": 1495633593,
            "createTime": 1495633408
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "OAusers",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyInsepectionForms\/105"
        }
    }
}*/