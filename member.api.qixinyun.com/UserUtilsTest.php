<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'users',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'getUsers?filter[source]=1',['haders'=>['Content-' => 'application/vnd.api+json']]);

//signUp  --start
/* $data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"18840287766",
                                                "password"=>"18840287766"
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
//signUp  --end

//signUp  --start
 $data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"12345678911",
                                                "password"=>"1234678911",
                                                "openId"=>"12345678911",
                                                "tokenId"=>"",
                                                "source"=>2,
                                                "avatar"=>"avatar",
                                                "nickName"=>"nickname"
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
            );
//signUp  --end

//restPassword --start
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"18840287763",
                                                "password"=>"18840287763"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'restPassword',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//restPassword --end

//signIn --start
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"18729352536",
                                                "password"=>"123123"
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
            );*/
//signIn --end

//openSignIn --start
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("openId"=>"123456789",
                                                "source"=>"2"
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'users/openSignIn',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//openSignIn --end

//updatePassword --start
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("identifyCardNumber"=>"xxxxxxxxxxxx123",
                                                "realName"=>"realname",
                                                "nickName"=>"nickname",
                                                "avatar"=>"xxxx123456"
                                               )
                           )
              );*/
/*$response = $client->request(
                'PUT',
                'users/2/updatePassword',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//updatePassword --end

//edit --start
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("identifyCardNumber"=>"xxxxxxxxxxxx123",
                                                "realName"=>"realname",
                                                "nickName"=>"nickname",
                                                "avatar"=>"xxxx123456",
                                                "qq"=>"13456",
                                                "email"=>"111@qq.com"
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
//edit --end

//verifyEmail --start 
/*$response = $client->request(
                'PUT',
                'users/1/verifyEmail',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//verifyEmail --end


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);


/*
{
    "meta": [],
    "data": {
        "type": "users",
        "id": "1",
        "attributes": {
            "cellPhone": "18840287763",
            "realName": "realname",
            "userName": "tqSm1483769557",
            "nickName": "nickname",
            "status": 0,
            "createTime": 1483769557,
            "updateTime": 1483770156,
            "statusTime": 0,
            "identifyCardNumber": "xxxxxxxxxxxx123",
            "avatar": "xxxx123456",
            "qq": "13456",
            "email": "111@qq.com",
            "isEmailVerified": 0
        },
        "links": {
            "self": "127.0.0.1\/users\/1"
        }
    }
}
*/

