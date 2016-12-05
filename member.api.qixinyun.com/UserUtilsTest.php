<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'users/1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);

//signUp -- 开始
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("cellPhone"=>"15202939431",
                                                "password"=>"123456"
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
//signUp -- 结束

//signIn
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("cellPhone"=>"15202939431",
//                                                 "password"=>"123456"
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'users/signIn',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );


//restPassword
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("cellPhone"=>"15202939431",
//                                                 "password"=>"1111"
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'restPassword',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

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
$data = array("data"=>array("type"=>"users",
                            "attributes"=>array("nickName"=>"nickName111"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'users/6',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);

