<?php
namespace UserGroup;

require '../vendor/autoload.php';
use GuzzleHttp;

//$client = new GuzzleHttp\Client(['base_uri' => 'http://139.224.65.136:8004/']);
// $client = new GuzzleHttp\Client(['base_uri' => 'http://127.0.0.1/']);

//get filter[name]=t  filter[status]=0  sort=-id
/*$response = $client->request(
                'GET',
                'departments?filter[status]=0',
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
                'departments',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );*/
//add -- 结束

//edit --开始
/*$data = array("data"=>array("type"=>"departments",
                            "attributes"=>array("name"=>"department11",
                                                "departmentType"=>"1"
                                               )
                           )
              );
$response = $client->request(
                'PUT',
                'departments/1',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json'],
                'json' => $data
                ]
            );
*/
//edit -- 结束

//enabled --开始
/*$response = $client->request(
                'PUT',
                'departments/1/enabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//enabled --结束

//disabled --开始
/*$response = $client->request(
                'PUT',
                'departments/1/disabled',
                [
                'haders'=>['Content-Type' => 'application/vnd.api+json']
                ]
            );*/
//disabled --结束



$status = $response->getStatusCode();
$body = $response->getBody();
$contents = $body->getContents();

echo "<pre>";
var_dump($contents);

