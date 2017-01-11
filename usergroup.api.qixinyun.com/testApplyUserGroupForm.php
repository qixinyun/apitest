<?php
namespace UserGroup;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8004/']);
 // $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get
// $response = $client->request('GET', 'applyUserGroupForms/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyUserGroupForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyUserGroupForms?filter[status]=0&filter[name]=3&filter[uid]=1',['haders'=>['Content-' => 'application/vnd.api+json']]);


//add -- 开始
$data = array("data"=>array("type"=>"applyUserGroupForms",
                            "attributes"=>array('name'=>"usergroupdddd3332",
                                                'parentId'=>5,
                                                'userGroupType'=>1,
                                                'jirisdictionAreaIds'=>array(2, 52, 500),
                                                'businessAreaIds'=>array(2, 52, 500),
                                                'uid'=>1,
                                                'platformId'=>2
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'applyUserGroupForms',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
//add -- 结束

//edit  --开始
// $data = array("data"=>array("type"=>"applyUserGroupForms",
//                             "attributes"=>array('name'=>"puorgresu1122223",
//                                                 'parentId'=>0,
//                                                 'userGroupType'=>1,
//                                                 'jirisdictionAreaIds'=>array(23, 66, 775),
//                                                 'businessAreaIds'=>array(122, 552, 2000),
//                                                 'uid'=>1,
//                                                 'platformId'=>4
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'applyUserGroupForms/3',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//edit  --结束


//approve --开始
// $response = $client->request(
//                 'PUT',
//                 'applyUserGroupForms/5/approve',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json']
//                 ]
//             );
//approve --结束

//decline --开始
// $response = $client->request(
//                 'PUT',
//                 'applyUserGroupForms/3/decline',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json']
//                 ]
//             );
//decline --结束


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

var_dump($status);
echo "<br>", PHP_EOL;
print_r($contents);

/*
{
    "meta": [],
    "data": {
        "type": "applyUserGroupForms",
        "id": "1",
        "attributes": {
            "userId": 1,
            "userGroupId": 1,
            "name": "puorgresu1122223",
            "parentId": 0,
            "userGroupType": 1,
            "jirisdictionAreas": [
                23,
                66,
                775
            ],
            "businessAreas": [
                122,
                552,
                2000
            ],
            "status": 2,
            "updateTime": 1482916511,
            "createTime": 1482909633,
            "statusTime": 1482983904
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "1"
                }
            },
            "userGroup": {
                "data": {
                    "type": "usergroups",
                    "id": "0"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyUserGroupForms\/1"
        }
    },
    "included": [
        {
            "type": "users",
            "id": "1",
            "relationships": {
                "userGroup": {
                    "data": {
                        "type": "usergroups",
                        "id": "1"
                    }
                }
            }
        }
    ]
}
*/

