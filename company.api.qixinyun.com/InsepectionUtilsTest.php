<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[result]
 //filter[category]
 //filter[company]
// $response = $client->request('GET', 'insepections/2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'insepections/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'insepections?filter[category]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"insepections",
                            "attributes"=>array("council"=>"insepectionCouncil2255252",
                                                "category"=>1,
                                                "date"=>'2029-05-05',
                                                "result"=>0,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'insepections',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"insepections",
                            "attributes"=>array("council"=>"insepectionCouncil111",
                                                "category"=>2,
                                                "date"=>'2039-05-05',
                                                "result"=>0
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'insepections/2',
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
        "type": "insepections",
        "id": "2",
        "attributes": {
            "council": "insepectionCouncil111",
            "category": 2,
            "date": "2039-05-05",
            "result": 0,
            "status": 0,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1487324898
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
            "self": "127.0.0.1\/insepections\/2"
        }
    }
}*/