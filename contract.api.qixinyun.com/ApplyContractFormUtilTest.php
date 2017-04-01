<?php
namespace Product;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8006/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get applyContractForms
  /**
     *   3.1 filter[status]
     *   3.2 filter[name]
     *   3.3 filter[uid]
     *   3.4 filter[userGroupId]
     *   3.5 filter[departmentId]
     *   3.6 filter[businessId]
     */
 // $response = $client->request('GET', 'applyContractForms/10',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyContractForms/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'applyContractForms?filter[businessId]=1&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//get contract
   /**
     *   3.1 filter[status]
     *   3.2 filter[name]
     *   3.3 filter[userGroupId]
     *   3.4 filter[departmentId]
     *   3.5 filter[price]
     *   3.6 filter[businessId]
     */
// $response = $client->request('GET', 'contracts',['haders'=>['Content-' => 'application/vnd.api+json']]);
 //$response = $client->request('GET', 'contracts/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'contracts?filter[businessId]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
// $data = array("data"=>array("type"=>"applyContractForms",
//                             "attributes"=>array("name"=>"contractName",
//                                                 "validityStart"=>'2017-01-18',
//                                                 "validityEnd"=>'2027-01-18',
//                                                 "category"=>1,
//                                                 "price"=>10.2,
//                                                 "companyId"=>1,
//                                                 "productId"=>1,
//                                                 "businessId"=>1,
//                                                 "uid"=>86
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'applyContractForms',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//add -- 结束

//edit -- 开始
// $data = array("data"=>array("type"=>"applyContractForms",
//                             "attributes"=>array("name"=>"contractNameqqq",
//                                                 "validityStart"=>'2017-01-28',
//                                                 "validityEnd"=>'2027-01-28',
//                                                 "category"=>2,
//                                                 "price"=>10.25,
//                                                 "productId"=>1
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'applyContractForms/10',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

/*$response = $client->request(
                'PUT',
                'applyContractForms/1/decline',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
*/
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
        "type": "applyContractForms",
        "id": "1",
        "attributes": {
            "name": "contractNameqqq",
            "validityStart": "2017-01-28",
            "validityEnd": "2027-01-28",
            "category": 2,
            "price": 10,
            "status": -2,
            "updateTime": 1484662497,
            "createTime": 1484660426,
            "statusTime": 1484741139
        },
        "relationships": {
            "user": {
                "data": {
                    "type": "users",
                    "id": "86"
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
                    "id": "9"
                }
            },
            "company": {
                "data": {
                    "type": "companies",
                    "id": "1"
                }
            },
            "product": {
                "data": {
                    "type": "products",
                    "id": "1"
                }
            },
            "business": {
                "data": {
                    "type": "businesses",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/applyContractForms\/1"
        }
    }
}
*/

/*
{
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
            "type": "contracts",
            "id": "1",
            "attributes": {
                "name": "contractName",
                "validityStart": "2017-01-18",
                "validityEnd": "2027-01-18",
                "category": 1,
                "price": 10,
                "updateTime": 0,
                "createTime": 1484740956,
                "statusTime": 0,
                "status": 0
            },
            "relationships": {
                "user": {
                    "data": {
                        "type": "users",
                        "id": "86"
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
                        "id": "9"
                    }
                },
                "company": {
                    "data": {
                        "type": "companies",
                        "id": "1"
                    }
                },
                "product": {
                    "data": {
                        "type": "products",
                        "id": "1"
                    }
                },
                "business": {
                    "data": {
                        "type": "businesses",
                        "id": "2"
                    }
                }
            },
            "links": {
                "self": "127.0.0.1\/contracts\/1"
            }
        }
    ]
}
*/