<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;
use GuzzleHttp\Exception\ClientException;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8002/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);


//get 
// $response = $client->request('GET', 'users/9?fields[users]=cellPhone,employmentDate',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users?filter[cellPhone]=15592660858&sort=-id&page[number]=1&page[size]=20',['haders'=>['Content-' => 'application/vnd.api+json']]);

//signUp -- 开始
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"17741187722",
                                                "password"=>"123456",
                                                'userName'=>"nijing114",
                                                'realName'=>'张三',
                                                'employmentDate'=>'2016-11-01',
                                                'gender'=>1,
                                                'birthday'=>'1983-10-30',
                                                'identifyCardNumber'=>'610105598310301555',
                                                "identifyCardFrontPhoto"=>"身份证正面",
                                                "identifyCardBackPhoto"=>"身份证反面",
                                                "identifyCardHandHeldPhoto"=>"手持身份证",
                                                'roleIds'=>array(50, 51,52,49),
                                                'number'=>'123456xx',
                                                'avatar' => 'xxxxxxx21125',
                                                'qq' => '123456789',
                                                'email' => '111@qq.com'
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
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("passport"=>"11117741187722",
                                                "password"=>"123456ww"
                                               )
                           )
              );
try {
    $response = $client->request(
                    'POST',
                    'users/signIn',
                    [
                    'haders'=>['Content-Type' => 'application/vnd.api+json'],
                    'json' => $data
                    ]
                );
} catch (ClientException $e) {
    if ($e->hasResponse()) {
        var_dump($e->getResponse()->getBody()->getContents());
        exit();
    }
}


//updatePassword
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("oldPassword"=>"18974111315",
//                                                 "password"=>"18974111315"
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
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("cellPhone"=>"18841187728",
//                                                 "password"=>"123456",
//                                                 'realName'=>'张三111',
//                                                 'employmentDate'=>'2016-11-01',
//                                                 'gender'=>1,
//                                                 'birthday'=>'1983-10-30',
//                                                 'identifyCardNumber'=>'610105598310301328',
//                                                 "identifyCardFrontPhoto"=>"身份证正面1",
//                                                 "identifyCardBackPhoto"=>"身份证反面2",
//                                                 "identifyCardHandHeldPhoto"=>"手持身份证3",
//                                                 'roleIds'=>array(3,4),
//                                                 'number'=>'123456xx',
//                                                 'avatar' => 'xxxxxxx21125',
//                                                 'qq' => '12345678229',
//                                                 'email' => '111333wwww@qq.com'
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'users/1',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );


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

//enable --开始
/*$response = $client->request(
                'PUT',
                'users/9/enable',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//enable --结束

//disable --开始
/*$response = $client->request(
                'PUT',
                'users/9/disable',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//disable --结束

//bindAdmin --开始
/*$response = $client->request(
                'PUT',
                'users/1/bindAdmin',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//bindAdmin --结束

//unBindAdmin --开始
/*$response = $client->request(
                'PUT',
                'users/9/unBindAdmin',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//unBindAdmin --结束

//verifyEmail --开始
// $response = $client->request(
//                 'PUT',
//                 'users/1/verifyEmail',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json']
//                 ]
//             );
//verifyEmail --结束

//绑定职位
/*$data = array("data"=>array("type"=>"positions",
                            "attributes"=>array(
                                "userGroupId"=>3,
                                "departmentId"=>9
                            )
                           )
              );
$response = $client->request(
                'POST',
                'users/9/positions',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            ); */   

//解绑职位
/*$response = $client->request(
                'DELETE',
                'users/1/positions/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            ); */   

//修改职位
/*$data = array("data"=>array("type"=>"positions",
                            "attributes"=>array(
                                "userGroupId"=>4,
                                "departmentId"=>9
                            )
                           )
              );
$response = $client->request(
                'PUT',
                'users/9/positions/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/    


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
        "id": "9",
        "attributes": {
            "cellPhone": "18841187728",
            "realName": "\u5f20\u4e09",
            "userName": "emilyngrgdddd",
            "employmentDate": 1477929600,
            "gender": 1,
            "birthday": 436291200,
            "identifyCardNumber": "610105598310301328",
            "identifyCardFrontPhoto": "\u8eab\u4efd\u8bc1\u6b63\u97621",
            "identifyCardBackPhoto": "\u8eab\u4efd\u8bc1\u53cd\u97622",
            "identifyCardHandHeldPhoto": "\u624b\u6301\u8eab\u4efd\u8bc13",
            "number": "123456xx",
            "avatar": "xxxxxxx21125",
            "qq": "12345678229",
            "email": "111333wwww@qq.com",
            "isEmailVerified": 0,
            "isAdmin": 0,
            "status": 0,
            "createTime": 1483679696,
            "updateTime": 1483679860,
            "statusTime": 1483679696
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
                        "id": "1"
                    },
                    {
                        "type": "roles",
                        "id": "2"
                    }
                ]
            },
            "department": {
                "data": {
                    "type": "departments",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/users\/9"
        }
    },
    "included": [
        {
            "type": "roles",
            "id": "1",
            "attributes": {
                "name": "roleName1",
                "status": 0,
                "scope": 2,
                "createTime": 1482208440,
                "updateTime": 1482315288,
                "statusTime": 1482208440
            },
            "relationships": {
                "userGroup": {
                    "data": {
                        "type": "userGroups",
                        "id": "17"
                    }
                },
                "purviewResultList": {
                    "data": []
                }
            }
        },
        {
            "type": "roles",
            "id": "2",
            "attributes": {
                "name": "roleName2",
                "status": 0,
                "scope": 2,
                "createTime": 1482293243,
                "updateTime": 1482293243,
                "statusTime": 1482293243
            },
            "relationships": {
                "userGroup": {
                    "data": {
                        "type": "userGroups",
                        "id": "16"
                    }
                },
                "purviewResultList": {
                    "data": []
                }
            }
        }
    ]
}
*/