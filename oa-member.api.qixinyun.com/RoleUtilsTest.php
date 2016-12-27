<?php
namespace User;

require '../vendor/autoload.php';
use GuzzleHttp;

// $client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8002/']);
 $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get 
$response = $client->request('GET', 'roles/49',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'roles/1,2',['haders'=>['Content-' => 'application/vnd.api+json']]);
// $response = $client->request('GET', 'roles?filter[userGroupId]=1&filter[roleStatus]=0&filter[scope]=2',['haders'=>['Content-' => 'application/vnd.api+json']]);

//add -- 开始
/*$data = array("data"=>array("type"=>"roles",
                            "attributes"=>array("name"=>"roleName2dd",
                                                "userGroupId"=>16,
                                                "purviewResultList"=>array(
                                                            '101001'=>['add'],'101002'=>['add','edit'],'101003'=>['edit']
                                                        ),
                                                "scope"=>2
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'roles',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit -- 开始
/*$data = array("data"=>array("type"=>"roles",
                            "attributes"=>array(
                                                "name"=>"name3333",
                                                "purviewResultList"=>array(
                                                            '101001'=>[],'101002'=>['add','edit'],'101003'=>[]
                                                        )
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'roles/49',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/

//enabled --开始
/*$response = $client->request(
                'PUT',
                'roles/1/enabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//enabled --结束

//disabled --开始
/*$response = $client->request(
                'PUT',
                'roles/1/disabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//disabled --结束

//open --开始
/*$response = $client->request(
                'PUT',
                'roles/1/open',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//open --结束

$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();
//edit -- 结束

echo "<pre>";
print_r($status);
print_r($contents);
