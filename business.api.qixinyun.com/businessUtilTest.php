<?php
namespace Product;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8008/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get distributions
  /**
     *   3.1 filter[status]
     *   3.2 filter[userId]
     *   3.3 filter[category]
     *   3.4 filter[userGroupId]
     *   3.5 filter[departmentId]
     *   3.6 filter[companyId]
     *   3.7 filter[businessId]
     */
// $response = $client->request('GET', 'distributions/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'distributions/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'distributions?filter[businessId]=7&filter[status]=-2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
//分配
/*$data = array("data"=>array("type"=>"distributions",
                            "attributes"=>array("companyId"=>200922,
                                                "assignerId"=>234,
                                                "userId"=>233
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'distributions/passive',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//圈定
/*$data = array("data"=>array("type"=>"distributions",
                            "attributes"=>array("companyId"=>200921,
                                                "userId"=>234
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'distributions/active',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//更换业务负责人
/*$data = array("data"=>array("type"=>"distributions",
                            "attributes"=>array("companyId"=>200921,
                                                "userId"=>221,
                                                "businessId"=>7,
                                                "assignerId"=>233
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'distributions/8/replaceUser',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//get business
   /**
     *   3.1 filter[status]
     *   3.2 filter[companyId]
     *   3.3 filter[userId]
     *   3.4 filter[userGroupId]
     */
// $response = $client->request('GET', 'businesses/8',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'businesses/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'businesses?filter[companyId]=21021&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//updateStatus -- 开始
/*$data = array("data"=>array("type"=>"businesses",
                            "attributes"=>array("status"=>5)
                           )
              );

$response = $client->request(
                'PUT',
                'businesses/8/updateStatus',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//updateStatus -- 结束

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($status);
print_r($contents);

/*
{
            "meta": [],
            "data": {
                "type": "distributions",
                "id": "9",
                "attributes": {
                    "category": 1,
                    "assigner": 233,
                    "status": 0,
                    "updateTime": 0,
                    "createTime": 1505014576,
                    "statusTime": 1505014576
                },
                "relationships": {
                    "user": {
                        "data": {
                            "type": "users",
                            "id": "221"
                        }
                    },
                    "userGroup": {
                        "data": {
                            "type": "userGroups",
                            "id": "2"
                        }
                    },
                    "department": {
                        "data": {
                            "type": "departments",
                            "id": "11"
                        }
                    },
                    "company": {
                        "data": {
                            "type": "companies",
                            "id": "200921"
                        }
                    },
                    "business": {
                        "data": {
                            "type": "businesss",
                            "id": "7"
                        }
                    }
                },
                "links": {
                    "self": "127.0.0.1\/distributions\/9"
                }
            }
        }
*/

/*
{
    "meta": [],
    "data": {
        "type": "businesss",
        "id": "8",
        "attributes": {
            "updateTime": 0,
            "createTime": 1484801811,
            "statusTime": 1484804264,
            "status": 1
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "101"
                }
            },
            "userGroup": {
                "data": {
                    "type": "userGroups",
                    "id": "5"
                }
            },
            "company": {
                "data": {
                    "type": "companies",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/businesss\/8"
        }
    }
}
*/