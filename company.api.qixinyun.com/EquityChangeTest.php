<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

 //$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 //filter[status]
 //filter[company]
 $response = $client->request('GET', 'equityChanges',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityChanges/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'equityChanges?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"equityChanges",
                            "attributes"=>array("name"=>"namenamename",
                                                "members"=>"membersmembers",
                                                "maxClearCount"=>12,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'equityChanges',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"equityChanges",
                            "attributes"=>array("name"=>"namenamename",
                                                "members"=>"membersmembers",
                                                "maxClearCount"=>12,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'equityChanges/1',
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

/*{{
    "meta": {
        "count": 1
    },
    "links": {
        "first": null,
        "last": null,
        "prev": null,
        "next": null
    },
    "data": [
        {
            "type": "equityChanges",
            "id": "1",
            "attributes": {
                "beforeChangeequityRatio": "\u53d8\u66f4\u524d\u80a1\u6743\u6bd4\u4f8b",
                "afterhangeequityRatio": "\u53d8\u66f4\u540e\u80a1\u6743\u6bd4\u4f8b",
                "date": "2017-03-08",
                "executor": "\u88ab\u6267\u884c\u4eba",
                "equityAmount": "\u80a1\u6743\u6570\u989d",
                "assignee": "\u53d7\u8ba9\u4eba",
                "court": "\u6267\u884c\u6cd5\u9662",
                "content": "\u8be6\u60c5",
                "status": 0,
                "statusTime": 0,
                "updateTime": 0,
                "createTime": 1487752865
            },
            "relationships": {
                "companies": {
                    "data": {
                        "type": "companies",
                        "id": "1"
                    }
                },
                "shareholders": {
                    "data": {
                        "type": "shareholders",
                        "id": "2"
                    }
                }
            },
            "links": {
                "self": "127.0.0.1\/equityChanges\/1"
            }
        }
    ]
}*/