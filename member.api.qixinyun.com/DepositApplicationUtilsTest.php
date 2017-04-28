<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.141:8001/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get
// $response = $client->request('GET', 'depositApplications?filter[userId]=1&filter[status]=2&sort=-id',['haders'=>['Content-' => 'application/vnd.api+json']]);

// add -- 开始
//支付宝充值,充值后 account 资金会直接入账
//comment 因为这里使用线上充值模式,不会添加入库
$data = array("data"=>array("type"=>"depositApplications",
                            "attributes"=>array("userId"=>194,
                                                "money"=>9.8,
                                                "payType"=>1,
                                                "comment"=>array('bank'=>1,'serialNumber'=>'xxx')
                                               )
                           )
              );

//线下充值,需要审批
// $data = array("data"=>array("type"=>"depositApplications",
//                             "attributes"=>array("userId"=>1,
//                                                 "money"=>10.2,
//                                                 "payType"=>3,
//                                                 "comment"=>array('bank'=>1,'serialNumber'=>'xxx')
//                                                )
//                            )
//               );


$response = $client->request(
                'POST',
                'depositApplications',
                [
                'haders'=>['Accept-Encoding' => 'gzip','Content-Type' => 'application/vnd.api+json'],
                'decode_content' => 'gzip',
                'json' => $data
                ]
            );
// add -- 结束

// confirm -- 开始
// $response = $client->request(
//                 'PUT',
//                 'depositApplications/1/confirm',
//                 [
//                 'haders'=>['Accept-Encoding' => 'gzip','Content-Type' => 'application/vnd.api+json'],
//                 'decode_content' => 'gzip'
//                 ]
//             );
// confirm -- 结束

// decline
// $data = array("data"=>array("type"=>"depositApplications",
//                             "attributes"=>array(
//                                                 "reason"=>array('id'=>1,'comment'=>'comment')
//                                                )
//                            )
//               );
// $response = $client->request(
//                 'PUT',
//                 'depositApplications/5/decline',
//                 [
//                 'haders'=>['Accept-Encoding' => 'gzip','Content-Type' => 'application/vnd.api+json'],
//                 'decode_content' => 'gzip',
//                 'json' => $data
//                 ]
//             );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";

print_r($status);
print_r($contents);


