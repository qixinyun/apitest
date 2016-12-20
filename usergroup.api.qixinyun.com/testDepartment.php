<?php
namespace UserGroup;

require '../vendor/autoload.php';
use GuzzleHttp;

$client = new GuzzleHttp\Client();

//get filter[name]=t  filter[status]=0  sort=-id
/*$response = $client->request(
                'GET',
                'http://127.0.0.1/departments?filter[status]=0',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                ]
            );*/

//add -- 开始
/*$data = array("data"=>array("type"=>"departments",
                            "attributes"=>array("name"=>"department1",
                                                'departmentType'=>1
                                               )
                           )
              );
$response = $client->request(
                'POST',
                'http://127.0.0.1/departments',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

$data = array("data"=>array("type"=>"departments",
                            "attributes"=>array("name"=>"department11",
                                                "departmentType"=>"1"
                                               )
                           )
              );
//edit
$response = $client->request(
                'PUT',
                'http://127.0.0.1/departments/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );



$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

