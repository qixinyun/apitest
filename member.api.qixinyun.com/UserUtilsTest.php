<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'users',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'getUsers?filter[openId]=12345678911',['haders'=>['Content-' => 'application/vnd.api+json']]);

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
/* $data = array("data"=>array("type"=>"users",
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
            );*/
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
                            "attributes"=>array("openId"=>"12345678911",
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
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("identifyCardNumber"=>"3editxxxxxxxxxx133",
                                                "realName"=>"311realname",
                                                "nickName"=>"311nickname",
                                                "avatar"=>"311xxxx133456",
                                                "qq"=>"31113456",
                                                "email"=>"313333311@qq.com",
                                                "gender"=>1,
                                                "address"=>"3addressaddress",
                                                "birthday"=>"2011-01-10",
                                                "province"=>23,
                                                "city"=>135,
                                                "region"=>1200
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'users/108',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
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
        "id": "7",
        "attributes": {
            "cellPhone": "12345678911",
            "realName": "211realname",
            "userName": "hOAz1484365438",
            "nickName": "211nickname",
            "status": 0,
            "createTime": 1484365438,
            "updateTime": 1490785035,
            "statusTime": 0,
            "identifyCardNumber": "2editxxxxxxxxxx123",
            "avatar": "211xxxx123456",
            "qq": "21113456",
            "email": "212222211@qq.com",
            "isEmailVerified": 0,
            "gender": 2,
            "address": "2addressaddress",
            "birthday": "2010-01-10",
            "province": 22,
            "city": 125,
            "region": 1000
        },
        "links": {
            "self": "127.0.0.1\/users\/7"
        }
    }
}
*/

