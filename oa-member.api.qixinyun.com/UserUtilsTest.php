<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

 $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8002/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get  filter[userName]=t  filter[cellPhone]  filter[departmentId]=1  filter[status]  filter[userGroupId]

 // $response = $client->request('GET', 'users?filter[userGroupId]=1',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'users/9,10',['haders'=>[' dContent-' => 'application/vnd.api+json']]);

//signUp -- 开始
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("cellPhone"=>"18754523632",
//                                                 "password"=>"18754523632",
//                                                 'userName'=>"admin001",
//                                                 'realName'=>'管理员',
//                                                 'userGroupId'=>1,
//                                                 'employmentDate'=>'2016-11-01',
//                                                 'gender'=>1,
//                                                 'birthday'=>'1983-10-30',
//                                                 'identifyCardNumber'=>'610103198310301218',
//                                                 'identifyCardCopy'=>'xxx',
//                                                 'roleIds'=>array(),
//                                                 'number'=>'admin001',
//                                                 'departmentId'=>0,
//                                                 'avatar'=>''
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
                            "attributes"=>array("passport"=>"18974111315",
                                                "password"=>"18974111315"
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
//                             "attributes"=>array(
//                                                 'realName'=>'张三',
//                                                 'userGroupId'=>1,
//                                                 'employmentDate'=>'2016-11-01',
//                                                 'gender'=>1,
//                                                 'birthday'=>'1983-10-30',
//                                                 'identifyCardNumber'=>'610103198310301218',
//                                                 'identifyCardCopy'=>'xxx',
//                                                 'roleIds'=>array(2,3),
//                                                 'number'=>'123456xx',
//                                                 'departmentId'=>1
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

//restPassword
// $data = array("data"=>array("type"=>"users",
//                             "attributes"=>array("password"=>"111111")
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'users/1/restPassword',
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

