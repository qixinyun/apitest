<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[result]
 //filter[category]
 //filter[company]
 //filter[uid]
 //filter[userIdentification]
 $response = $client->request('GET', 'applyInsepectionForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInsepectionForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyInsepectionForms?filter[uid]=1&filter[userIdentification]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"applyInsepectionForms",
                            "attributes"=>array("council"=>"insepectionCouncil9836369",
                                                "category"=>2,
                                                "date"=>'2059-05-05',
                                                "result"=>1,
                                                "companyId"=>1,
                                                "uid"=>1,
                                                "userIdentification"=>1
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
/*$data = array("data"=>array("type"=>"applyInsepectionForms",
                            "attributes"=>array("council"=>"insepectionCouncil123456",
                                                "category"=>1,
                                                "date"=>'2009-05-05',
                                                "result"=>0
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'applyInsepectionForms/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
*/


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
        "type": "applyInsepectionForms",
        "id": "1",
        "attributes": {
            "userIdentification": 2,
            "council": "insepectionCouncil123456",
            "category": 1,
            "date": "2009-05-05",
            "result": 0,
            "company": 1,
            "status": 2,
            "statusTime": 1487640754,
            "updateTime": 1487602203,
            "createTime": 1487599507
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
            "self": "127.0.0.1\/applyInsepectionForms\/1"
        }
    }
}*/