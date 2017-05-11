<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 $response = $client->request('GET', 'equityFrozenInfos',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityFrozenInfos/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityFrozenInfos?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"equityFrozenInfos",
                            "attributes"=>array("executor"=>'executor',
                                                "executionCourt"=>'executionCourt',
                                                "documentNumber"=>'documentNumber',
                                                "details"=>'detailsdetails',
                                                "equityAmount"=>123,
                                                "publicNotice"=>'publicNoticepublicNoticepublicNotice',
                                                "status"=>1,
                                                "attachments"=>array('1attachments155','1attachments255','1attachments355'),
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'equityFrozenInfos',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"equityFrozenInfos",
                            "attributes"=>array("executor"=>'111executor',
                                                "executionCourt"=>'111executionCourt',
                                                "documentNumber"=>'111documentNumber',
                                                "details"=>'d111etailsdetails',
                                                "equityAmount"=>12334,
                                                "publicNotice"=>'111publicNoticepublicNoticepublicNotice',
                                                "status"=>12,
                                                "attachments"=>array('equityFrozenInfosachments125','equityFrozenInfosachments235','equityFrozenInfosachments345')
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'equityFrozenInfos/1',
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
        "type": "equityFrozenInfos",
        "id": "1",
        "attributes": {
            "executor": "executor",
            "executionCourt": "executionCourt",
            "documentNumber": "documentNumber",
            "details": "detailsdetails",
            "equityAmount": 123,
            "publicNotice": "publicNoticepublicNoticepublicNotice",
            "attachments": [
                "1attachments155",
                "1attachments255",
                "1attachments355"
            ],
            "status": 1,
            "statusTime": 0,
            "updateTime": 0,
            "createTime": 1494487018
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
            "self": "127.0.0.1\/equityFrozenInfos\/1"
        }
    }
}*/