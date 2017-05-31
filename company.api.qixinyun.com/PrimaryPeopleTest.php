<?php
namespace Company;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8003/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1:10084/']);

//get 
 //filter[status]
 //filter[company]
// $response = $client->request('GET', 'primaryPeoples',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'primaryPeoples/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'primaryPeoples?sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
$data = array("data"=>array("type"=>"primaryPeoples",
                            "attributes"=>array("name"=>"edit111namenamename",
                                                "duties"=>2,
                                                "gender"=>2,
                                                "nationality"=>4,
                                                "birthday"=>"1995-05-05",
                                                "education"=>8,
                                                "socialDuties"=>"socialDuties",
                                                "experience"=>"experience",
                                                "abroadInvestmen"=>-2,
                                                "companyId"=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'primaryPeoples',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"primaryPeoples",
                            "attributes"=>array("name"=>"namenamename",
                                                "members"=>"membersmembers",
                                                "maxClearCount"=>12,
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'primaryPeoples/1',
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
            "type": "primaryPeoples",
            "id": "1",
            "attributes": {
                "category": 1,
                "beforeModifiedInfo": "before_modified_infobefore_modified_info",
                "afterModifiedInfo": "after_modified_infoafter_modified_info",
                "status": 0,
                "statusTime": 0,
                "updateTime": 0,
                "createTime": 1487833387
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
                "self": "127.0.0.1\/primaryPeoples\/1"
            }
        }
    ]
}*/