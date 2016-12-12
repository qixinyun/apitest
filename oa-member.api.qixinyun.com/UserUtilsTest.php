<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
// $response = $client->request('GET', 'users/8',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users/1,5',['haders'=>['Content-' => 'application/vnd.api+json']]);

//signUp -- 开始
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("cellPhone"=>"15202939431",
//                                                 "password"=>"123456",
//                                                 'userName'=>"chloroplast",
//                                                 'realName'=>'张三',
//                                                 'userGroupId'=>1,
//                                                 'employmentDate'=>'2016-11-01',
//                                                 'gender'=>1,
//                                                 'birthday'=>'1983-10-30',
//                                                 'identifyCardNumber'=>'610103198310301218',
//                                                 'identifyCardCopy'=>'xxx',
//                                                 'roleIds'=>array(1,2,3)
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'POST',
//                 'users',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );
//signUp -- 结束

//signIn
$data = array("data"=>array("type"=>"users",
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
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array(
//                                                 'realName'=>'张三',
//                                                 'userGroupId'=>1,
//                                                 'employmentDate'=>'2016-11-01',
//                                                 'gender'=>1,
//                                                 'birthday'=>'1983-10-30',
//                                                 'identifyCardNumber'=>'610103198310301218',
//                                                 'identifyCardCopy'=>'xxx',
//                                                 'roleIds'=>array(2,3)
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'users/8',
//                 [
//                 'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                 'json' => $data
//                 ]
//             );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
print_r($contents);

