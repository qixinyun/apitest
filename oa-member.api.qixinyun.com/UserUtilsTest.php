<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8002/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
 $response = $client->request('GET', 'users/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);

//signUp -- 开始
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"18841187763",
                                                "password"=>"123456",
                                                'userName'=>"emilyngrg",
                                                'realName'=>'张三',
                                                'userGroupId'=>1,
                                                'employmentDate'=>'2016-11-01',
                                                'gender'=>1,
                                                'birthday'=>'1983-10-30',
                                                'identifyCardNumber'=>'610105598310301222',
                                                'identifyCardCopy'=>'xxx',
                                                'roleIds'=>array(1,2),
                                                'number'=>'123456xx',
                                                'departmentId'=>1,
                                                'avatar' => 'xxxxxxx21125'
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'users',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//signUp -- 结束

//signIn
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("passport"=>"15202939431",
                                                "password"=>"123456"
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'users/signIn',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
*/

//updatePassword
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("oldPassword"=>"1111",
//                                                 "password"=>"123456"
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'users/6/updatePassword',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

//编辑用户信息
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array(
                                                'realName'=>'张三',
                                                'userGroupId'=>1,
                                                'employmentDate'=>'2016-11-01',
                                                'gender'=>1,
                                                'birthday'=>'1983-10-30',
                                                'identifyCardNumber'=>'610103198310301218',
                                                'identifyCardCopy'=>'xxx',
                                                'roleIds'=>array(2,3),
                                                'number'=>'23456nnnwww',
                                                'departmentId' => 2,
                                                'avatar' => 'xxxxxxx225'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'users/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/


//restPassword
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("password"=>"111111")
                           )
              );
$response = $client->request(
                'PUT',
                'users/1/restPassword',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//enabled --开始
/*$response = $client->request(
                'PUT',
                'users/6/enabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//enabled --结束

//disabled --开始
/*$response = $client->request(
                'PUT',
                'users/6/disabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//disabled --结束
$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);


/*
{
    "meta": [],
    "data": {
        "type": "users",
        "id": "1",
        "attributes": {
            "cellPhone": "18840287763",
            "realName": "\u5f20\u4e09",
            "userName": "nijing",
            "employmentDate": 1477929600,
            "gender": 1,
            "birthday": 436291200,
            "identifyCardNumber": "610103198310301218",
            "identifyCardCopy": "xxx",
            "number": "23456nnnwww",
            "avatar": "xxxxxxx225",
            "status": 0,
            "createTime": 1482418285,
            "updateTime": 1483065980,
            "statusTime": 1482418285
        },
        "relationships": {
            "userGroup": {
                "data": {
                    "type": "userGroups",
                    "id": "1"
                }
            },
            "roles": {
                "data": [
                    {
                        "type": "roles",
                        "id": "2"
                    }
                ]
            },
            "department": {
                "data": {
                    "type": "departments",
                    "id": "2"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/users\/1"
        }
    }
}
*/