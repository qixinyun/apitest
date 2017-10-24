<?php
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8005/']);
//$client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);
$response = $client->request('GET', 'templates/1',['haders'=>['Content-' > 'application/vnd.api+json']]);

//save
//$data = array("data"=>array("type"=>"templates",
//                                    "attributes"=>array("purviewList"=>
//                                                  $data['data]['attributes']['purviewlist']
//                                    						)            			
//                                    					)
//                                                    );
//
//$response = $client->request(
//                'POST',
//                'templates/1',
//                [
//                'haders'=>['Content-Type' => 'application/vnd.api+json'],
//                'json' => $data
//                ]
//            );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
$data = json_decode($contents,true);

print_r($data);
    exit();
//$data['data']['attributes']['purviewList'][]= 
//    array(
//        'type' => 1,
//        'category' => 2,
//        'code' => 101015,
//        'name'=>'分配管理',
//        'description'=>'分配管理: 分配查看,分配更改,分配记录',
//        'options'=>array(
//            '分配查看'=>'show',
//            '分配更改'=>'edit',
//            '分配记录'=>'record'
//        )
//    );
//$data['data']['attributes']['purviewList'][]= 
//    array(
//        'type' => 1,
//        'category' => 2,
//        'code' => 101016,
//        'name'=>'分配业务管理',
//        'description'=>'分配业务,业务查看,业务分配,业务圈定',
//        'options'=>array(
//            '业务查看'=>'show',
//            '业务分配'=>'passiveDistriubtion',
//            '业务圈定'=>'activeDistriubtion'
//        )
//    );
//
//$data['data']['attributes']['purviewList'][]= 
//    array(
//        'type' => 1,
//        'category' => 2,
//        'code' => 101017,
//        'name'=>'合同管理',
//        'description'=>'合同列表,合同查看',
//        'options'=>array(
//            '合同查看'=>'show'
//        )
//    );
//
//$data['data']['attributes']['purviewList'][]= 
//    array(
//        'type' => 1,
//        'category' => 2,
//        'code' => 101018,
//        'name'=>'产品管理',
//        'description'=>'产品列表,产品新增,修改产品,查看产品,产品禁用,产品启用',
//        'options'=>array(
//            '产品新增'=>'add',
//            '修改产品'=>'edit',
//            '查看产品'=>'show',
//            '产品禁用'=>'disable',
//            '产品启用'=>'enable'
//        )
//    );
//
//$data['data']['attributes']['purviewList'][]= 
//    array(
//        'type' => 1,
//        'category' => 2,
//        'code' => 101019,
//        'name'=>'财务管理',
//        'description'=>'财务列表,财务查看',
//        'options'=>array(
//            '财务查看'=>'show'
//        )
//    );

//echo '<pre>';
//print_r($data);
$data['data']['attributes']['purviewList'][] = 
array(
);

$result = array("data"=>array("type"=>"templates",
                                    "attributes"=>array("purviewList"=>
                                                  $data['data']['attributes']['purviewList']
                                    						)            			
                                    					)
                                                    );

$response = $client->request(
                'POST',
                'templates/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $result
                ]
            );

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
echo '<pre>';
print_r($contents);
