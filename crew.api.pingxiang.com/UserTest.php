<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;
use GuzzleHttp\Exception\ClientException;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8002/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);


//get 
 $response = $client->request('GET', 'users?filter[cellPhone]=18840247763',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users?filter[cellPhone]=15592660858&sort=-id&page[number]=1&page[size]=20',['haders'=>['Content-' => 'application/vnd.api+json']]);

//signUp -- 开始
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"1884027765",
                                                "password"=>"123456",
                                                'userName'=>"hellow2244",
                                                'realName'=>'张三',
                                                'organizationId'=>1,
                                                'email' => '111@ssssqq.com'
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


//signIn -- 开始
/*//用户名密码登录示例
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("passport"=>"helloword",
                                                "password"=>"123456"
                                               )
                           )
              );

//手机号登录示例//
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("passport"=>"1884027764"
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
}*/
//signIn -- 结束


//updatePassword  -- 开始
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("oldPassword"=>"123456",
                                                "password"=>"111111"
                                               )
                           )
              );
try {
    $response = $client->request(
                    'PUT',
                    'users/11/updatePassword',
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
}*/
//updatePassword -- 结束


//edit -- 开始
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("realName"=>"张三11122",
                                                "organizationId"=>2,
                                                'email' => '111333wwww@qq.com'
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'users/11',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit -- 结束

//restPassword

/*$response = $client->request(
                'PUT',
                'users/11/restPassword',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/

//delete --开始
/*try {
    $response = $client->request(
                    'DELETE',
                    'users/12',
                    [
                    'haders'=>['Content-Type' => 'application/vnd.api+json']
                    ]
                );
} catch (ClientException $e) {
    if ($e->hasResponse()) {
        var_dump($e->getResponse()->getBody()->getContents());
        exit();
    }
}*/
//delete --结束    


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);


/*{
    "meta": [],
    "data": {
        "type": "users",
        "id": "11",
        "attributes": {
            "cellPhone": "1884027764",
            "realName": "\u5f20\u4e09",
            "userName": "helloword11",
            "password": "14e1b600b1fd579f47433b88e8d85291",
            "email": "111@qq.com",
            "status": 0,
            "createTime": 1501052502,
            "updateTime": 1501052502,
            "statusTime": 1501052502
        },
        "relationships": {
            "organizations": {
                "data": {
                    "type": "Organizations",
                    "id": "1"
                }
            }
        },
        "links": {
            "self": "127.0.0.1\/users\/11"
        }
    }
}*/