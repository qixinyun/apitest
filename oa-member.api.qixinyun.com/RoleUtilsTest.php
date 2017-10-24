<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

 // $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8002/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'roles/4fields[roles]=name',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'roles/3',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'roles?filter[userGroupId]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);


//add -- 开始
// $data = array("data"=>array("type"=>"roles",
//                             "attributes"=>array("name"=>"ro222225dssd22",
//                                                 "userGroupId"=>10,
//                                                 "purviewResultList"=>array(
//                                                             '101001'=>[],'101002'=>[],'101003'=>['edit']
//                                                         ),
//                                                 "scope"=>2
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'roles',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"roles",
                            "attributes"=>array(
                                                "name"=>"name3333",
                                                "purviewResultList"=>array(
                                                            '101001'=>[],'101002'=>['add','edit'],'101003'=>[]
                                                        )
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'roles/49',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//enable --开始
/*$response = $client->request(
                'PUT',
                'roles/45/enable',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//enable --结束

//disable --开始
/*$response = $client->request(
                'PUT',
                'roles/45/disable',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//disable --结束

//open --开始
$response = $client->request(
                'PUT',
                'roles/2/open',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );
//open --结束

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
//edit -- 结束

echo "<pre>";
print_r($status);
print_r($contents);

/*
{
    "meta": [],
    "data": {
        "type": "roles",
        "id": "13",
        "attributes": {
            "name": "rolddde55dssd",
            "status": 0,
            "scope": 2,
            "createTime": 1482920021,
            "updateTime": 1482920021,
            "statusTime": 1482920021
        },
        "relationships": {
            "userGroup": {
                "data": {
                    "type": "userGroups",
                    "id": "16"
                }
            },
            "purviewResultList": {
                "data": [
                    {
                        "type": "purviews",
                        "id": "7"
                    }
                ]
            }
        },
        "links": {
            "self": "139.224.65.136:8002\/roles\/13"
        }
    },
    "included": [
        {
            "type": "purviews",
            "id": "7",
            "attributes": {
                "purviewResultList": {
                    "101001": [],
                    "101002": [
                        "add",
                        "edit"
                    ],
                    "101003": [
                        "edit"
                    ]
                }
            }
        }
    ]
}
*/
