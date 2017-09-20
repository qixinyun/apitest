<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client(['base_uri' => 'https://oapi.dingtalk.com/robot/send?access_token=39e6a511d3c9b57d16b3734b242b4372ba926ab4bd9832b210a0c183871a77a6']);
 // $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);



//signUp -- 开始
 $response = $client->request(
                 'POST',
                 '',
                 [
                 'json' => ['msgtype'=>'link','link'=>['text'=>"oa后台0.3版已经发布沙箱",'title'=>'oa后台0.3版已经发布沙箱','messageUrl'=>'http://oa.sandbox.qixinyun.com/']]
                 ]
             );
//signUp -- 结束




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
