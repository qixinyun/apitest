<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'users',['haders'=>['Content-' => 'application/vnd.api+json']]);
 $response = $client->request('GET', 'users/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);
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
 /*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"21196793881",
                                                "password"=>"21196793881",
                                                "openId"=>"21196793881xx",
                                                "tokenId"=>"21196793881xxx",
                                                "source"=>1,
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
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"18729358536",
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
            );
//signIn --end

//openSignIn --start
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("openId"=>"openIdopenIdope",
                                                "source"=>"1"
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'users/signIn/open',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//openSignIn --end

//updatePassword --start
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("oldPassword"=>"旧密码",
                                                "password"=>"新密码"
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
                            "attributes"=>array("identifyCardNumber"=>"108txxxxxxxxxx133",
                                                "realName"=>"108realname",
                                                "nickName"=>"108nickname",
                                                "avatar"=>"",
                                                "qq"=>"10813456",
                                                "email"=>"313333108@qq.com",
                                                "gender"=>1,
                                                "address"=>"108addressaddress",
                                                "birthday"=>"1998-01-10",
                                                "province"=>12,
                                                "city"=>125,
                                                "region"=>1250
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'users/107',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//edit --end

//bindEmail --start 
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("email"=>"222nijing@139.com")
                           )
              );
$response = $client->request(
                'PUT',
                'users/2/bind/email',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//bindEmail --end

//bindQQ --start 
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("qq"=>"141414111111111",
                                                "openId"=>"141414openIdopenIdope",
                                                "tokenId"=>"141414tokenIdtokenId"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'users/14/bind/qq',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//bindQQ --end

//updateCellPhone --start 
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"12345678912")
                           )
              );
$response = $client->request(
                'PUT',
                'users/2/updateCellPhone',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//updateCellPhone --end

//addLawyerCertificates --start 
/*$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("lawyerCertificates"=>array("1xxxxxxx", "2xxxxxxxxxx", "3xxxxxxx"))
                           )
              );
$response = $client->request(
                'PUT',
                'users/105/addLawyerCertificates',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//addLawyerCertificates --end


$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($status);
var_dump($contents);


/*
{
    "meta": [],
    "data": {
        "type": "users",
        "id": "5",
        "attributes": {
            "cellPhone": "",
            "realName": "",
            "userName": "XGJM1484362260",
            "nickName": "nickname",
            "status": 0,
            "createTime": 1484362260,
            "updateTime": 1492073257,
            "statusTime": 0,
            "identifyCardNumber": "",
            "avatar": "avatar",
            "qq": "",
            "email": "",
            "isEmailVerified": 0,
            "gender": 0,
            "address": "",
            "birthday": "0000-00-00",
            "province": 0,
            "city": 0,
            "region": 0,
            "lawyerCertificates": [
                "1xxxxxxx",
                "2xxxxxxxxxx",
                "3xxxxxxx"
            ]
        },
        "links": {
            "self": "127.0.0.1\/users\/5"
        }
    }
}
*/

